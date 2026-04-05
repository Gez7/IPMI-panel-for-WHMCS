<?php
// Path to ipmitool
$IPMITOOL = "/usr/bin/ipmitool";
$USER = "bthoster";
$PASS = "PhVbWJkMbntDZ7aM";
$SERVERS_FILE = "servers.txt";

// Load servers
$servers = [];
if (file_exists($SERVERS_FILE)) {
    $lines = file($SERVERS_FILE, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        [$name, $date, $ip] = explode(":", $line, 3);
        $servers[] = ['name' => trim($name), 'date' => trim($date), 'ip' => trim($ip)];
    }
}

// Function to run ipmitool command
function run_ipmi($ip, $cmd) {
    global $IPMITOOL, $USER, $PASS;
    $baseIlo = sprintf("%s -I lanplus -H %s -U %s -P %s",
        $IPMITOOL, escapeshellarg($ip), escapeshellarg($USER), escapeshellarg($PASS));
    $baseSmc = sprintf("%s -I lanplus -H %s -U %s -P %s -C 3",
        $IPMITOOL, escapeshellarg($ip), escapeshellarg($USER), escapeshellarg($PASS));

    exec("$baseIlo $cmd 2>&1", $out, $ret);
    $output = implode("\n", $out);

    if ($ret !== 0 || stripos($output, "Error") !== false || stripos($output, "Invalid") !== false || stripos($output, "Failed to connect") !== false) {
        exec("$baseSmc $cmd 2>&1", $out2, $ret2);
        $output = implode("\n", $out2);
        if ($ret2 !== 0) {
            return false;
        }
    }
    return $output;
}

// Handle add server
if (isset($_POST['add_server'])) {
    $name = trim($_POST['name']);
    $date = trim($_POST['date']);
    $ip   = trim($_POST['ip']);

    if ($name && $date && $ip) {
        file_put_contents($SERVERS_FILE, "$name:$date:$ip\n", FILE_APPEND);
    }
    header("Location: ilo.php");
    exit;
}

// Handle delete server
if (isset($_GET['delete'])) {
    $ipToDelete = $_GET['delete'];
    $newLines = [];
    foreach ($servers as $srv) {
        if ($srv['ip'] !== $ipToDelete) {
            $newLines[] = "{$srv['name']}:{$srv['date']}:{$srv['ip']}";
        }
    }
    file_put_contents($SERVERS_FILE, implode("\n", $newLines) . "\n");
    header("Location: ilo.php");
    exit;
}

// Handle actions
if (isset($_GET['action'], $_GET['ip'])) {
    $ip = $_GET['ip'];
    $action = $_GET['action'];
    $cmd = "";

    if ($action === "status") $cmd = "chassis power status";
    if ($action === "on") $cmd = "chassis power on";
    if ($action === "off") $cmd = "chassis power off";
    if ($action === "reset") $cmd = "chassis power reset";

    if ($cmd) {
        $result = run_ipmi($ip, $cmd);
        echo nl2br(htmlspecialchars($result ?: "Failed to connect"));
        exit;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>IPMI Control Panel</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f4f4f4; padding: 20px; }
        table { border-collapse: collapse; width: 100%; background: white; }
        th, td { border: 1px solid #ccc; padding: 10px; text-align: center; }
        th { background: #eee; }
        button { padding: 5px 10px; margin: 2px; cursor: pointer; }
        form { margin-top: 20px; padding: 10px; background: #fff; border: 1px solid #ccc; }
        input { padding: 5px; margin: 5px; }
    </style>
    <script>
        function doAction(ip, action, elementId) {
            fetch("?action=" + action + "&ip=" + ip)
                .then(r => r.text())
                .then(t => {
                    document.getElementById(elementId).innerHTML = t;
                });
        }

        function autoRefresh() {
            <?php foreach ($servers as $srv): ?>
                doAction('<?= $srv['ip'] ?>','status','status-<?= $srv['ip'] ?>');
            <?php endforeach; ?>
        }
        window.onload = autoRefresh;
        setInterval(autoRefresh, 600000);
    </script>
</head>
<body>
    <h2>IPMI Control Panel</h2>
    <table>
        <tr>
            <th>Server</th>
            <th>Order Date</th>
            <th>IP</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($servers as $srv): ?>
            <tr>
                <td><?= htmlspecialchars($srv['name']) ?></td>
                <td><?= htmlspecialchars($srv['date']) ?></td>
                <td><?= htmlspecialchars($srv['ip']) ?></td>
                <td id="status-<?= $srv['ip'] ?>">Unknown</td>
                <td>
                    <button onclick="doAction('<?= $srv['ip'] ?>','status','status-<?= $srv['ip'] ?>')">Refresh</button>
                    <button onclick="doAction('<?= $srv['ip'] ?>','on','status-<?= $srv['ip'] ?>')">Power On</button>
                    <button onclick="doAction('<?= $srv['ip'] ?>','off','status-<?= $srv['ip'] ?>')">Hard Off</button>
                    <button onclick="doAction('<?= $srv['ip'] ?>','reset','status-<?= $srv['ip'] ?>')">Reset</button>
                    <a href="ilo.php?delete=<?= $srv['ip'] ?>" onclick="return confirm('Delete this server?')">
                        <button style="background:red; color:white;">Delete</button>
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

    <h3>Add New Server</h3>
    <form method="post">
        <input type="text" name="name" placeholder="Server Name" required>
        <input type="text" name="date" placeholder="Order Date (dd-mm-yyyy)" required>
        <input type="text" name="ip" placeholder="IP Address" required>
        <button type="submit" name="add_server">Add Server</button>
    </form>
</body>
</html>
