<?php
/**
 * Migration script to encrypt existing IPMI credentials
 * Run this once after setting up encryption
 */

require_once __DIR__ . '/config.php';
require_once __DIR__ . '/lib/encryption.php';

echo "Starting encryption migration...\n";

// Check if encryption key is set
if (ENCRYPTION_KEY === 'CHANGE_THIS_TO_A_RANDOM_32_BYTE_HEX_STRING_IN_PRODUCTION') {
  echo "ERROR: Please set a proper encryption key in config.php first!\n";
  echo "Generate one with: echo bin2hex(random_bytes(32));\n";
  exit(1);
}

// Get all servers
$result = $mysqli->query("SELECT id, ipmi_user, ipmi_pass FROM servers");
if (!$result) {
  echo "Error: " . $mysqli->error . "\n";
  exit(1);
}

$updated = 0;
$skipped = 0;

while ($row = $result->fetch_assoc()) {
  $id = $row['id'];
  $user = $row['ipmi_user'];
  $pass = $row['ipmi_pass'];
  
  // Check if already encrypted (encrypted strings are base64, longer)
  // Simple heuristic: if it's base64 and longer than typical plaintext
  $isEncrypted = false;
  if (strlen($user) > 50 || strlen($pass) > 50) {
    try {
      // Try to decrypt - if it works, it's already encrypted
      Encryption::decrypt($user);
      $isEncrypted = true;
    } catch (Exception $e) {
      // Not encrypted
    }
  }
  
  if ($isEncrypted) {
    echo "Server $id: Already encrypted, skipping...\n";
    $skipped++;
    continue;
  }
  
  // Encrypt credentials
  try {
    $encrypted_user = Encryption::encrypt($user);
    $encrypted_pass = Encryption::encrypt($pass);
    
    $stmt = $mysqli->prepare("UPDATE servers SET ipmi_user = ?, ipmi_pass = ? WHERE id = ?");
    $stmt->bind_param("ssi", $encrypted_user, $encrypted_pass, $id);
    $stmt->execute();
    $stmt->close();
    
    echo "Server $id: Encrypted successfully\n";
    $updated++;
  } catch (Exception $e) {
    echo "Server $id: Error - " . $e->getMessage() . "\n";
  }
}

echo "\nMigration complete!\n";
echo "Updated: $updated servers\n";
echo "Skipped: $skipped servers (already encrypted)\n";

