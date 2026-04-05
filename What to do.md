# What To Do (Current Guide)

Last updated: 2026-03-27 UTC

## Live Context (Read First)
1. This guide assumes you are already on the live panel server (`213.177.179.84`) in `/var/www/html`.
2. Panel code changes are already applied in this path in this session.
3. So you do **not** need another panel-code deploy step right now on this same server.
4. Your remaining manual work is WHMCS-side sync + validation.

This guide matches current codebase after latest fixes:
- per-service IPMI mapping
- hostname-based module actions
- Accept Order provisioning flow
- WHMCS button/UI updates
- security hardening in module
- async WHMCS power actions (no 25s timeout issue)
- BMC-aware runtime command order (Supermicro/iLO/iDRAC/generic)
- fixed false-failure parsing for verbose IPMI outputs
- Supermicro command compatibility hardening (no `-L` first attempt + longer power timeout)
- Panel username alignment toward client email in provisioning flow

---

## 0) What You Must Do First (Current Priority)

Do this exact order:
1. Upload latest WHMCS module files (Section `B`) again (required after latest fix).
2. Clear WHMCS template cache (Section `B`).
3. Configure product module fields (Section `D`) with exact values below.
4. Confirm required custom fields exist (Section `E`).
5. Run Accept Order provisioning test (Section `F`).
6. Run module command test (Section `G`).
7. Re-test one Supermicro server in panel (`ON` / `OFF` / `RESET`).

Only after all above are green, continue to next feature phase (IPMI Session).

If current test state is unclear, restart cleanly from section `F` using:
1. `hostname` = `whmcs-test-smc1`
2. `ipmi_ip` = `10.30.251.132`
3. `ipmi_user` = `bthoster`
4. `ipmi_pass` = `PhVbWJkMbntDZ7aM`

---

## 0.1) Start From Here Now (Based On Your Current Progress)

Use this section as your restart point now.

Current confirmed by you:
1. Panel user email mapping is correct (`ssh_zone@yahoo.com`).
2. Test service provisioning/mapping exists for `whmcs-test-smc1`.
3. `10.30.251.132` works for power commands.

Important new update:
1. `WHMCS Module/ipmipanel.php` was updated again to resolve client email reliably from DB when `clientsdetails` is incomplete.
2. You must upload this file again before re-testing screenshot complaint.

What is still required before telling client “all fixed”:
1. Validate exact complained server command path (`s393`).
2. Validate ASRockRack/Supermicro command path from panel side.
3. Validate autosuspend behavior.

Do this exact order:
1. Re-upload module file + clear template cache (`R0`).
2. Run `R1` (s393 command validation).
3. Run `R2` (ASRockRack/Supermicro target validation).
4. Run `R3` (autosuspend validation).
5. Run `R5` (client-area screenshot complaint validation).
6. If all pass, use `R4` client update message.

### R0) Deploy Latest Email-Resolution Fix (mandatory now)
1. Upload local file:
   1. source: `/var/www/html/WHMCS Module/ipmipanel.php`
   2. destination: `/httpdocs/modules/servers/ipmipanel/ipmipanel.php`
2. WHMCS admin -> `Utilities` -> `System Cleanup` -> `Empty Template Cache` -> `Go`
3. Hard refresh browser (`Ctrl+F5`).

### R1) Validate Client Complaint Server `s393` (exact)
1. Open panel dashboard: `http://213.177.179.84/index.php`
2. Find row `s393` (IPMI IP `10.30.253.161`).
3. Click in this exact sequence:
   1. `OFF`
   2. wait 5-15 seconds
   3. `REFRESH`
   4. confirm status shows `OFF`
   5. `ON`
   6. wait 5-15 seconds
   7. `REFRESH`
   8. confirm status shows `ON`
   9. `RESET`
4. Run SSH evidence command:
```bash
php -r 'require "/var/www/html/config.php"; $sid=308; $r=$mysqli->query("SELECT id,action,result,created_at FROM action_logs WHERE server_id=".$sid." ORDER BY id DESC LIMIT 12"); while($x=$r->fetch_assoc()){echo implode("\t",[$x["id"],$x["action"],$x["result"],$x["created_at"]]).PHP_EOL;}'
```
5. Pass criteria:
   1. `chassis power off` = `Success`
   2. `chassis power on` = `Success`
   3. `chassis power reset` = `Success`

### R2) Validate ASRockRack / Supermicro Complaint Target
Use the exact complained case values (already known):
1. `server_name = s393`
2. `server_id = 308`
3. `ipmi_ip = 10.30.253.161`
4. `ipmi_user = bthoster`
5. `ipmi_pass = PhVbWJkMbntDZ7aM`

Now run this exact validation:
1. Open panel dashboard: `http://213.177.179.84/index.php`
2. Find row `s393` (IP `10.30.253.161`).
3. Click commands on that row:
   1. `OFF`
   2. wait 5-15 sec
   3. `REFRESH` (expect `OFF`)
   4. `ON`
   5. wait 5-15 sec
   6. `REFRESH` (expect `ON`)
   7. `RESET`
4. Run direct SSH checks for same endpoint:
```bash
timeout 10 ipmitool -I lanplus -H 10.30.253.161 -U 'bthoster' -P 'PhVbWJkMbntDZ7aM' chassis power status
timeout 10 ipmitool -I lanplus -C 3 -H 10.30.253.161 -U 'bthoster' -P 'PhVbWJkMbntDZ7aM' chassis power status
```
5. Confirm action logs for `server_id=308`:
```bash
php -r 'require "/var/www/html/config.php"; $sid=308; $r=$mysqli->query("SELECT id,action,result,created_at FROM action_logs WHERE server_id=".$sid." ORDER BY id DESC LIMIT 20"); while($x=$r->fetch_assoc()){echo implode("\t",[$x["id"],$x["action"],$x["result"],$x["created_at"]]).PHP_EOL;}'
```
6. Pass criteria for R2:
   1. at least one direct `ipmitool` status command returns `Chassis Power is on/off`,
   2. panel OFF/ON/RESET run without visible command error,
   3. logs contain `Success` for `chassis power off`, `chassis power on`, `chassis power reset`.

If client reports a different ASRockRack/Supermicro hostname later, repeat same sequence with that hostname/IP only.

### R3) Validate AutoSuspend (WHMCS)
1. WHMCS admin: `https://test.btcloud.ro/admin`
2. Open test client service (`elliot carey - #1` -> `Products/Services` -> `KVM1` -> `Go`).
3. In `Module Commands`:
   1. click `Suspend`
   2. confirm WHMCS service `Status` becomes `Suspended`
   3. then click `Unsuspend`
   4. confirm `Status` returns `Active`
4. Panel check:
   1. after `Suspend`, service should not allow client power actions
   2. after `Unsuspend`, actions available again

### R4) Send To Client If R1/R2/R3 Pass
Use this:
`I re-tested the reported issues. Panel login now uses client email correctly, and power commands on the complained servers are working (OFF/ON/REBOOT with success logs). I also re-validated suspend/unsuspend flow in WHMCS and panel sync. Current module state is stable for these fixes.`

### R5) Validate The Screenshot Complaint Screen (exact location)
Complaint screenshot location is WHMCS client-side service overview module output.

1. In WHMCS admin, open client profile for `elliot carey - #1`.
2. Click `Login as Owner`.
3. In client area, open `Services` and open the target service.
   1. URL pattern: `clientarea.php?action=productdetails&id=<service_id>`
4. On Overview tab, find `IPMI Controls` block (same as screenshot).
5. Verify line:
   1. `Panel Access: ... | Username: ssh_zone@yahoo.com`
6. If still old username appears:
   1. confirm step `R0` deployed,
   2. clear cache again,
   3. open in private/incognito window and recheck.

---

## A) Exact Access

### A1. Panel SSH
1. Host: `213.177.179.84`
2. Port: `22`
3. User: `root`
4. Password: `Bthoster12!@`
5. Project path: `/var/www/html`

### A2. Panel Admin
1. URL: `http://213.177.179.84/login.php`
2. User: `admin`
3. Password: `Fuckyou123!@`

### A3. WHMCS Test Admin
1. URL: `https://test.btcloud.ro/admin`
2. User: `uid0`
3. Password: `Bthoster12!@`

### A4. WHMCS FTP
1. Host: `176.97.210.16`
2. User: `btcloudtest`
3. Password: `1?j4m6Es6`
4. WHMCS root (expected): `/httpdocs`

---

## B) Files You Must Upload To WHMCS

Local source files:
1. `/var/www/html/WHMCS Module/ipmipanel.php`
2. `/var/www/html/WHMCS Module/templates/clientarea-controls.tpl`
3. `/var/www/html/WHMCS Module/ipmipanel_button_colors.php`

WHMCS destination paths:
1. `/httpdocs/modules/servers/ipmipanel/ipmipanel.php`
2. `/httpdocs/modules/servers/ipmipanel/templates/clientarea-controls.tpl`
3. `/httpdocs/includes/hooks/ipmipanel_button_colors.php`

After upload:
1. WHMCS Admin -> top menu `Utilities` -> left menu `System Cleanup`.
2. In `Cleanup Operations`, click `Go` under `Empty Template Cache`.
3. Hard refresh browser (Ctrl+F5).
4. Open one service page and confirm new read-only fields are visible:
   1. `Panel Power State`
   2. `Panel Reachable`
   3. `Panel Status Checked At (UTC)`
4. This upload includes self-heal logic for command errors:
   1. if command hits `Server not found for hostname`,
   2. module auto-runs `CreateAccount` once and retries action.
4. If `System Cleanup` throws `open_basedir` / `ticket_attachments` error:
   1. Fix Storage path first in WHMCS:
      1. `Configuration` -> `System Settings` -> `Storage Settings`
      2. Ensure `Ticket Attachments` path points to the current WHMCS root (test path, not old production path).
   2. Temporary fallback cache clear via SSH:
```bash
rm -f /var/www/vhosts/test.btcloud.ro/httpdocs/templates_c/*
```

---

## C) What Is Implemented In Code Now

1. Hostname-based API actions (no strict dependency on Panel Server ID).
2. Provision endpoint in panel API:
   1. Create/reuse panel user by client email
   2. Create/reuse server by hostname
   3. Assign server to user
3. WHMCS `CreateAccount` now calls provisioning API (for Accept Order flow).
4. Per-service `ipmi_ip` is enforced for CreateAccount (prevents one shared server/IPMI target).
5. Module security hardening:
   1. URL validation
   2. HTTPS/TLS checks by default
   3. safer error handling
6. Admin module command colors:
   1. Power On green
   2. Power Off red
   3. Reboot orange
   4. Get Status cyan
7. Power action reliability upgrades:
   1. WHMCS `Power On/Off/Reboot` calls are async by default.
   2. API queues background power job, returns fast, avoids cURL timeout.
   3. Background power job now uses per-server lock (prevents conflicting queued actions).
   4. Background power job triggers immediate status refresh after command.
8. Runtime command strategy now uses `bmc_type` priority:
   1. `supermicro`: tries default `lanplus` first, then `lanplus -C 3`
   2. `ilo4` / `idrac`: vendor-aware fallback order
   3. `generic`: compact order for power commands, wider order for status checks
9. Provision flow now also triggers background BMC type detection for that server.
10. Supermicro stability improvements:
   1. Runtime treats `supermiscro` typo as `supermicro`.
   2. Removed over-strict `session` failure check that could mark valid output as failure.
   3. Supermicro power path uses longer timeout than generic path.
   4. Runtime includes no-`-L` compatibility attempt before explicit privilege attempts.
11. Panel login visibility for auto-created users:
   1. On `CreateAccount`, module syncs panel username/password into WHMCS service fields.
   2. Client area `Panel Access` block now shows:
      1. panel login URL
      2. panel username
   3. generated password (only when new panel user is auto-created)
   3. If panel user already exists, existing password is not changed.
   4. Provisioning now tries to align panel username with client email for consistency.
12. Panel action CSRF hardening:
   1. `ON/OFF/RESET/SUSPEND/UNSUSPEND` now require POST + session CSRF token.
   2. Old direct GET-style action triggering is blocked for mutating actions.
13. API hardening:
   1. `/api/api.php` now enforces POST for mutating actions:
      1. `provision`
      2. `suspend`
      3. `unsuspend`
      4. `poweron`
      5. `poweroff`
      6. `reboot`
14. Status endpoint access control:
   1. `/api/status.php` now requires authenticated session.
   2. Regular clients only get statuses for assigned servers.
   3. Admin/Reseller can still see all servers.
15. Status-cache consistency:
   1. IPMI status exception path now writes `server_status` row (`unknown/reachable=0/last_error`).
   2. Prevents stale old `ON/OFF` data after failed live checks.
16. Status checker lock improvement:
   1. Full sweep keeps global lock.
   2. Single-server checks use per-server lock.
   3. Manual/targeted checks are no longer blocked by a running full sweep.
17. Provisioning consistency hardening:
   1. Provisioning now checks/reuses by `ipmi_ip` when hostname is new, to prevent duplicate physical-server entries.
   2. Provisioning now enforces dedicated ownership by reassigning server mapping to the target client user (old mappings are removed).
18. ASRockRack/Supermicro command compatibility hardening:
   1. Runtime now maps `asrockrack/asrock` aliases to supermicro behavior.
   2. Power actions now use additional fallback cipher attempts when initial attempts fail.
19. BMC auto-detect alignment:
   1. Auto-detect now classifies ASRockRack signatures as `supermicro` strategy for runtime compatibility.
20. WHMCS client-area username display alignment:
   1. Panel login username shown in WHMCS client area is now client email-first to match requested behavior.

---

## D) Mandatory WHMCS Product Setup

### D1. Open Product Editor (exact path)
Use either path:
1. Top bar wrench icon (`Configuration`) -> `System Settings` -> `Products/Services`
2. Or go to `/admin/setup` -> `Products & Services` -> `Products/Services`

Then:
1. Find your dedicated product in the list.
2. Click the product name (or Edit icon) to open `Edit Product`.

### D2. Select Module (exact tab/button flow)
1. In `Edit Product`, click tab: `Module Settings`.
2. In `Module Name` dropdown, select: `IPMI Panel (API)` (module id: `ipmipanel`).
3. Click `Save Changes` once (important, this reloads module-specific fields).

### D3. Fill Module Fields (field-by-field)
On the same `Module Settings` tab, set:
1. `Panel Base URL` = `http://213.177.179.84` (current project value)
2. `API Key` = active API key generated in panel
3. `Custom Field Name for Panel Server ID` = `Panel Server ID` (fallback only)
4. `Auto power on when unsuspend` = `Checked`
5. `Timeout (seconds)` = `25`
6. `Default IPMI IP` = empty
7. `Default IPMI User` = `bthoster`
8. `Default IPMI Password` = `PhVbWJkMbntDZ7aM`

Then click `Save Changes`.

Important:
1. Latest codebase includes these additional advanced fields:
   1. `Allow Private Panel Host (Advanced)`
   2. `Allow Insecure HTTP (Advanced)`
   3. `Allow Insecure TLS (Advanced)`
2. If these 3 fields are missing in WHMCS UI, WHMCS is still using an older deployed `ipmipanel.php`.
3. In that case:
   1. Re-upload `/var/www/html/WHMCS Module/ipmipanel.php` to `/httpdocs/modules/servers/ipmipanel/ipmipanel.php`
   2. Run `Utilities -> System Cleanup -> Empty Template Cache`
   3. Hard refresh browser (Ctrl+F5)
4. For current project URL (`http://213.177.179.84`), set:
   1. `Allow Private Panel Host (Advanced)` = OFF (public IP)
   2. `Allow Insecure HTTP (Advanced)` = ON (because URL is `http`, not `https`)
   3. `Allow Insecure TLS (Advanced)` = OFF
5. Keep these exact values for current environment. Change them only when panel URL changes to HTTPS domain.

### D4. Set Provisioning Behavior (critical)
Still in product edit page:
1. Go to `Module Settings` tab (or `Details` tab, depending WHMCS version/template).
2. Find section `Automation Settings`.
3. Set Auto Setup to:
   `Automatically setup the product when you manually accept a pending order`
4. Click `Save Changes`.

Why this exact option:
1. Client requested provisioning on admin `Accept Order`.
2. Not only on invoice-paid event.

### D5. Confirm Product Is Really Using This Module
Quick check:
1. Open the same product again.
2. `Module Settings` tab must still show `IPMI Panel (API)`.
3. Field values (`Panel Base URL`, `API Key`) must be populated.
4. Auto setup option must remain `manually accept a pending order`.

---

## E) Required Product Custom Fields (Service-Level)

### E1. Open Custom Fields Tab
1. Go to `Configuration` -> `System Settings` -> `Products/Services`.
2. Open the same dedicated product.
3. Click tab: `Custom Fields`.

### E2. Add Fields One-by-One (exact)
In `Add New Custom Field`, add these 6 rows exactly.  
Do not edit/delete existing `sshKey|SSH Public Key` field.

1. Field: `hostname`
   1. `Field Name` = `hostname`
   2. `Field Type` = `Text Box`
   3. `Description` = `Server hostname. Must match panel server_name exactly.`
   4. `Validation` = *(empty)*
   5. `Select Options` = *(empty)*
   6. `Display Order` = `0`
   7. Checkboxes:
      1. `Admin Only` = ON
      2. `Required Field` = ON
      3. `Show on Order Form` = OFF
      4. `Show on Invoice` = OFF
2. Field: `ipmi_ip`
   1. `Field Name` = `ipmi_ip`
   2. `Field Type` = `Text Box`
   3. `Description` = `Per-service IPMI IP address used for panel/API actions.`
   4. `Validation` = *(empty)*
   5. `Select Options` = *(empty)*
   6. `Display Order` = `0`
   7. Checkboxes:
      1. `Admin Only` = ON
      2. `Required Field` = ON
      3. `Show on Order Form` = OFF
      4. `Show on Invoice` = OFF
3. Field: `ipmi_user`
   1. `Field Name` = `ipmi_user`
   2. `Field Type` = `Text Box`
   3. `Description` = `Per-service IPMI username.`
   4. `Validation` = *(empty)*
   5. `Select Options` = *(empty)*
   6. `Display Order` = `0`
   7. Checkboxes:
      1. `Admin Only` = ON
      2. `Required Field` = ON
      3. `Show on Order Form` = OFF
      4. `Show on Invoice` = OFF
4. Field: `ipmi_pass`image.png
   1. `Field Name` = `ipmi_pass`
   2. `Field Type` = `Text Box`
   3. `Description` = `Per-service IPMI password.`
   4. `Validation` = *(empty)*
   5. `Select Options` = *(empty)*
   6. `Display Order` = `0`
   7. Checkboxes:
      1. `Admin Only` = ON
      2. `Required Field` = ON
      3. `Show on Order Form` = OFF
      4. `Show on Invoice` = OFF
5. Field: `server_ip`
   1. `Field Name` = `server_ip`
   2. `Field Type` = `Text Box`
   3. `Description` = `Dedicated/public server IP (optional metadata).`
   4. `Validation` = *(empty)*
   5. `Select Options` = *(empty)*
   6. `Display Order` = `0`
   7. Checkboxes:
      1. `Admin Only` = ON
      2. `Required Field` = OFF
      3. `Show on Order Form` = OFF
      4. `Show on Invoice` = OFF
6. Field: `Panel Server ID`
   1. `Field Name` = `Panel Server ID`
   2. `Field Type` = `Text Box`
   3. `Description` = `Legacy fallback only. Leave empty in normal flow.`
   4. `Validation` = *(empty)*
   5. `Select Options` = *(empty)*
   6. `Display Order` = `0`
   7. Checkboxes:
      1. `Admin Only` = ON
      2. `Required Field` = OFF
      3. `Show on Order Form` = OFF
      4. `Show on Invoice` = OFF

After each field:
1. Click `Save Changes`
2. Wait page reload
3. Continue with next field

Note:
1. WHMCS saves and reloads the page after adding fields.
2. Repeat until all required fields exist.

### E3. Verify Field Names Exactly
1. Ensure raw field names are exactly:
   1. `hostname`
   2. `ipmi_ip`
   3. `ipmi_user`
   4. `ipmi_pass`
2. Do not rename these keys in a way that changes the raw identifier used by module logic.

Important:
1. `ipmi_ip` is service-level and must be different per client/service when needed.
2. Do not rely on one global module IPMI IP for all clients.

---

## F) Accept Order Provision Flow (Main Test, Click-by-Click)

### F-RESET. Clean Restart Rule (use this now)
1. Do not reconfigure sections `D` and `E` again unless broken.
2. Create a fresh order (new order id). Do not reuse old failed/partial order.
3. Use this exact service test data in the new order:
   1. `hostname` = `whmcs-test-smc1`
   2. `ipmi_ip` = `10.30.251.132`
   3. `ipmi_user` = `bthoster`
   4. `ipmi_pass` = `PhVbWJkMbntDZ7aM`
4. After restart, follow only this sequence:
   1. `F0` -> `F1` -> `F2/F3` -> `F4` -> `F5` -> `G`

### F0. Precheck IPMI Endpoint Before Order Test (mandatory)
Run this on panel SSH first:
```bash
timeout 10 ipmitool -I lanplus -H 10.30.251.132 -U bthoster -P 'PhVbWJkMbntDZ7aM' chassis power status
timeout 10 ipmitool -I lanplus -C 3 -H 10.30.251.132 -U bthoster -P 'PhVbWJkMbntDZ7aM' chassis power status
```
Pass rule:
1. At least one command must return `Chassis Power is on/off`.
2. Use a test IPMI endpoint that is not already reused by another active test row, to avoid mixed/stale row perception during validation.

Fail rule:
1. If both commands fail, do not continue command validation with this IP.
2. Use another known-working IPMI endpoint in service fields (`ipmi_ip`, `ipmi_user`, `ipmi_pass`) and repeat F0.

### F1. Create New Order
1. Open `https://test.btcloud.ro/admin`
2. Top menu -> `Orders` -> `Add New Order`
3. Wait until `Loading...` under Product/Service disappears.
4. Fill `Client` = `elliot carey - #1` (email: `ssh_zone@yahoo.com`)
5. Fill `Payment Method` = `PayPal`
6. Fill `Promotion Code` = `None`
7. Fill `Order Status` = `Pending`
8. Keep these checked:
   1. `Order Confirmation` = checked
   2. `Generate Invoice` = checked
   3. `Send Email` = checked
9. In `Product/Service` section:
   1. `Product/Service` = `KVM1`
   2. `Domain` = empty
   3. `Billing Cycle` = `Monthly`
   4. `Quantity` = `1`
   5. `Price Override` = empty
   6. Do not click `Add Another Product`
10. In `Configurable Options` section:
   1. `OS / Application` = `AlmaLinux 9.4`
11. In `Custom Fields` section on the same page:
   1. `SSH Public Key` = empty
   2. `hostname` = `whmcs-test-smc1`
   3. `ipmi_ip` = `10.30.251.132`
   4. `ipmi_user` = `bthoster`
   5. `ipmi_pass` = `PhVbWJkMbntDZ7aM`
   6. `server_ip` = empty
   7. `Panel Server ID` = empty
12. In `Domain Registration` section:
   1. `Registration Type` = `None`
   2. Do not click `Add Another Domain`
13. Confirm right-side `Order Summary` shows:
   1. `1 x Cloud KVM VPS - KVM1`
   2. non-zero total (for your screen: `$15.00 USD`)
14. Click `Submit Order`.

### F2. Fallback (only if Custom Fields are not visible on Add Order page)
1. Open created order -> open related service details page.
2. Fill exact values:
   1. `hostname` = `whmcs-test-smc1`
   2. `ipmi_ip` = `10.30.251.132`
   3. `ipmi_user` = `bthoster`
   4. `ipmi_pass` = `PhVbWJkMbntDZ7aM`
   5. `server_ip` = empty
   6. `Panel Server ID` = empty
3. Click `Save Changes`.

### F3. Accept Order
1. Top menu -> `Orders` -> `List All Orders`
2. Open the pending order you created.
3. Click `Accept Order`.
4. Wait for success banner.
5. On success page (like your screenshot), verify immediately:
   1. Green message: `Order Accepted`
   2. Top-right `Status` = `Active`
   3. In `Order Items`, service `Status` = `Active`
6. If `Accept Order` button is now grey/disabled, this is correct (already accepted).
7. Next action from this page: click order number link near top (example: `Order # ...`) OR open client profile from `Client` name.

Expected result:
1. WHMCS module `CreateAccount` runs.
2. Panel API provisions:
   1. panel user created/reused by client email
   2. server created/reused by hostname
   3. assignment added in `user_servers`
3. WHMCS service fields update:
   1. `Username` should match client email (or already-existing mapped panel username)
   2. `Password` should show generated value only when a new panel user is auto-created in this run
   3. If panel user already existed, password may remain unchanged/blank in admin module output (this is normal)

### F4. Validate Client-Side Panel Access Block
1. WHMCS Admin -> top menu `Clients` -> `View/Search Clients`.
2. Open client used in order (`elliot carey - #1`, email `ssh_zone@yahoo.com`).
3. Open tab `Products/Services`.
4. In service dropdown (top row, left of `Go`):
   1. If you see only `KVM1`, this is normal when client has one relevant service.
   2. Select `KVM1` and click `Go`.
   3. If page looks the same after `Go`, that is also normal (already on same service).
5. Confirm you are on the correct service by checking:
   1. `Order #` line in the service form (example from your screen: `Order # 45`),
   2. custom fields near bottom:
      1. `hostname = whmcs-test-smc1`
      2. `ipmi_ip = 10.30.251.132`
6. Scroll to `Module Commands` + module output area.
7. Verify in module output block:
   1. `Open Panel Login` link is visible
   2. panel username is visible and email-based
   3. panel password is visible (new user case)
8. Also verify service custom fields are still correct:
   1. `hostname` = `whmcs-test-smc1`
   2. `ipmi_ip` = `10.30.251.132`
   3. `ipmi_user` = `bthoster`
   4. `ipmi_pass` = `PhVbWJkMbntDZ7aM`
   5. `server_ip` = empty

### F5. Validate In Panel DB (SSH)
Run on panel SSH:
```bash
php -r 'require "/var/www/html/config.php"; $h="whmcs-test-smc1"; $r=$mysqli->query("SELECT id,server_name,ipmi_ip,server_ip FROM servers WHERE server_name=\"".$mysqli->real_escape_string($h)."\""); while($x=$r->fetch_assoc()){echo implode("\t",$x).PHP_EOL;}'
php -r 'require "/var/www/html/config.php"; $e="ssh_zone@yahoo.com"; $u=$mysqli->query("SELECT id,username,email FROM users WHERE email=\"".$mysqli->real_escape_string($e)."\" LIMIT 1"); $x=$u->fetch_assoc(); if($x){echo "USER\t".$x["id"]."\t".$x["username"]."\t".$x["email"].PHP_EOL; $uid=(int)$x["id"]; $m=$mysqli->query("SELECT us.user_id,us.server_id,s.server_name FROM user_servers us JOIN servers s ON s.id=us.server_id WHERE us.user_id=".$uid." ORDER BY us.server_id DESC LIMIT 20"); while($y=$m->fetch_assoc()){echo "MAP\t".$y["user_id"]."\t".$y["server_id"]."\t".$y["server_name"].PHP_EOL;}}'
```

Client email fixed for this guide: `ssh_zone@yahoo.com`.
Pass criteria:
1. First command prints one row with `server_name = whmcs-test-smc1`.
2. Second command prints `USER ...` row.
3. Second command prints at least one `MAP ... whmcs-test-smc1` row.

---

## G) Module Commands Test (Existing Service, Click-by-Click)

### G1. Open Service Command Area
1. WHMCS Admin -> top menu `Clients` -> `View/Search Clients`
2. Open the same test client.
3. Click tab `Products/Services`.
4. Choose tested service in dropdown and click `Go`.
   1. If dropdown has only `KVM1`, select it and continue.
   2. If no visible page change after `Go`, continue anyway (same service remains loaded).
5. Scroll to `Module Commands`.

### G2. Run Commands In Exact Order
1. Click `Get Status` -> expect success banner.
   1. Confirm `Panel Power State` value updates on the same page.
   1. If panel row becomes `UNREACHABLE/UNKNOWN`, stop and follow `H8`.
2. Click `Power Off` -> confirm popup if shown.
3. Wait 5-20 seconds.
4. Open panel dashboard: `http://213.177.179.84/index.php`
5. Find `whmcs-test-smc1` row and click `REFRESH` -> expect `OFF`.
6. Back to WHMCS service page, click `Power On`.
7. Wait 5-20 seconds, refresh panel row -> expect `ON`.
8. Click `Reboot`, wait, then refresh panel row.
9. Click `Suspend` -> WHMCS service status should become `Suspended`.
10. Click `Unsuspend` -> WHMCS service status should become `Active`.
11. If the same `ipmi_ip` is assigned to multiple panel rows, refresh/check each row before concluding mismatch.

Expected:
1. All commands return success banners.
2. WHMCS status changes correctly for suspend/unsuspend.
3. Panel power state reflects changes after short delay.

---

## Q5) Legacy Step Name (Exact Navigation You Asked)

If you are following the old label `Q5`, use this exact flow now:

1. Open `https://test.btcloud.ro/admin`.
2. Click `Clients` -> `View/Search Clients`.
3. Find client row with:
   1. first name `elliot`
   2. last name `carey`
   3. email `ssh_zone@yahoo.com`
4. Click the client name to open profile.
5. Click tab `Products/Services`.
6. In the small dropdown near top-left of service panel:
   1. select `KVM1`
   2. click `Go`
7. If nothing visibly changes after `Go`, do not stop. Confirm this loaded service by checking field values at bottom:
   1. `hostname = whmcs-test-smc1`
   2. `ipmi_ip = 10.30.251.132`
   3. `ipmi_user = bthoster`
8. In `Module Commands`, run:
   1. `Get Status`
   2. `Power Off`
   3. wait 5-20 seconds
   4. open panel dashboard `http://213.177.179.84/index.php`
   5. find `whmcs-test-smc1` row and click `REFRESH`
   6. confirm `OFF`
   7. return to WHMCS service page and click `Power On`
   8. wait 5-20 seconds, refresh panel row again, confirm `ON`
   9. click `Reboot`
9. On WHMCS service page, also test:
   1. `Suspend` (status should become `Suspended`)
   2. `Unsuspend` (status should return `Active`)
10. If any command returns success but panel state is unchanged, run section `H8` and `H9`.

---

## H) Troubleshooting

### H1. “Missing service ipmi_ip custom field”
Cause:
1. `ipmi_ip` is not filled in the specific service.
Fix:
1. Open client service and fill `ipmi_ip`.

### H1b. “Server not found for hostname”
Cause:
1. Service hostname does not exist in panel mapping yet.
Fix:
1. Ensure service fields are filled (`hostname`, `ipmi_ip`, `ipmi_user`, `ipmi_pass`).
2. Click `Create` in `Module Commands` once.
3. Retry `Get Status`.
4. If latest `ipmipanel.php` is uploaded, module will auto-provision once and retry command automatically.

### H2. “Server not found for hostname”
Cause:
1. Hostname mismatch between WHMCS service and panel server name.
Fix:
1. Use exact same hostname string.

### H3. “Duplicate hostname in panel”
Cause:
1. More than one panel server row has same `server_name`.
Fix:
1. Keep hostname unique in panel.

### H4. “Panel Base URL must use HTTPS”
Cause:
1. HTTP configured while security setting blocks insecure HTTP.
Fix:
1. For current environment, keep `Panel Base URL = http://213.177.179.84` and set `Allow Insecure HTTP (Advanced) = ON`.

### H5. `System Cleanup` open_basedir / ticket_attachments error
Cause:
1. WHMCS Storage Settings points to wrong attachments path (often old domain path).
2. PHP `open_basedir` allows only current site path, so cleanup fails when WHMCS tries old path.
Fix:
1. WHMCS Admin -> `Configuration` -> `System Settings` -> `Storage Settings`
2. Update `Ticket Attachments` path to current site root path.
3. Retry `System Cleanup`.
4. If still blocked, clear template cache manually via SSH:
```bash
rm -f /var/www/vhosts/test.btcloud.ro/httpdocs/templates_c/*
```

### H6. “Panel username conflict for client email”
Cause:
1. Another panel user already uses the same username string as the client email.
Fix:
1. In panel `users` table/admin, rename or remove conflicting username.
2. Retry WHMCS `CreateAccount` / `Accept Order`.

### H7. Supermicro shows status but power commands fail
Cause:
1. Legacy compatibility mismatch (cipher/privilege/timeout path).
2. Environment-specific IPMI policy difference.
Fix:
1. Ensure live panel has latest code in `/var/www/html`, especially `lib/ipmi_service.php` and `api/api.php`.
2. Test again with one known Supermicro server using panel buttons `ON/OFF/RESET`.
3. If still failing, run one direct test command from server shell and compare output:
```bash
ipmitool -I lanplus -H <IPMI_IP> -U <IPMI_USER> -P '<IPMI_PASS>' chassis power off
ipmitool -I lanplus -C 3 -H <IPMI_IP> -U <IPMI_USER> -P '<IPMI_PASS>' chassis power off
```
4. Share exact output for final per-environment tuning.

### H8. WHMCS shows success but panel shows `UNKNOWN`/`UNREACHABLE`
Cause:
1. WHMCS call path is working, but target IPMI endpoint credentials/session are failing.
2. Common signals:
   1. `Unable to establish IPMI v2 / RMCP+ session`
   2. `Authentication type NONE not supported`

Fix:
1. Confirm saved service fields exactly:
   1. `ipmi_ip`
   2. `ipmi_user`
   3. `ipmi_pass`
2. Run direct SSH precheck (same values) with `ipmitool -I lanplus` and `-C 3`.
3. If both fail, replace service IPMI endpoint with a known-working one and retest.

### H9. Exact Recovery Steps For Current Case (`whmcs-test-smc1`)
Current confirmed state:
1. Old test endpoint had IPMI session failure from panel host.
2. Typical errors:
   1. `Unable to establish IPMI v2 / RMCP+ session`
   2. `Authentication type NONE not supported`

Do this now:
1. In WHMCS admin, open client service edit page for this test service.
2. Set `hostname` = `whmcs-test-smc1`.
3. Set IPMI fields to known-working endpoint:
   1. `ipmi_ip` = `10.30.251.132`
   2. `ipmi_user` = `bthoster`
   3. `ipmi_pass` = `PhVbWJkMbntDZ7aM`
4. Click `Save Changes`.
5. Click `Get Status` in `Module Commands`.
6. Open panel dashboard and click `REFRESH` on the same hostname row.
7. If status now shows `ON/OFF`, continue power command tests.

---

## I) Constraints (Do Not Break)

1. Do not edit `ilo.php` (client explicitly requested).
2. Do not run destructive power tests on client production servers without confirmation.
3. Keep WHMCS module security toggles strict by default.
4. Keep per-service mapping logic (no one-IP-for-all behavior).

---

## J) New Changes Implemented (This Patch)

1. Client list now supports direct "client -> only this client servers" flow:
   1. In `admin_clients.php`, server-count column is clickable.
   2. Click opens `admin_assign.php?client_id=<id>` filtered to that client.
2. Bulk assignment with search is implemented in `admin_assign.php`:
   1. Search by `server_name` or `ipmi_ip`
   2. Multi-select servers
   3. One-click bulk assign to selected client
3. Reassignment safety flow is implemented:
   1. If selected servers are already assigned, system requires move confirmation.
   2. UI asks confirmation before submit.
   3. Backend also enforces confirmation.
4. Reseller permission safety is enforced:
   1. Reseller can assign only to own clients.
   2. Reseller cannot move servers assigned to clients outside reseller scope.

---

## K) Manual Actions Required Right Now (Live Server)

### K1. Panel deploy step (current status)
1. Do nothing here now.
2. Panel deploy is not required in current live path (`/var/www/html`).

### K2. WHMCS module deploy checklist (must do)
Ensure live WHMCS still has latest files:
1. `/httpdocs/modules/servers/ipmipanel/ipmipanel.php`
2. `/httpdocs/modules/servers/ipmipanel/templates/clientarea-controls.tpl`
3. `/httpdocs/includes/hooks/ipmipanel_button_colors.php`

Then:
1. WHMCS Admin -> `Utilities` -> `System` -> `System Cleanup`
2. Clear template cache
3. Hard refresh browser (Ctrl+F5)

### K3. Manual WHMCS setting required for "Accept Order only"
To match client request "create after Accept Order, not after invoice paid":
1. Open each dedicated product using this module.
2. Set WHMCS Auto Setup to:
   1. `Automatically setup the product as soon as you manually accept a pending order`
3. Do not use "setup after first payment" for these products.

---

## L) How To Use New Assign Flow (Step-by-step)

### L1. View only one client’s servers
1. Open `admin_clients.php`
2. In `Servers` column, click the number for a client.
3. You will land on `admin_assign.php?client_id=<that client>`.
4. `Current Assignments` now shows only that client.

### L2. Bulk assign with search
1. Open `admin_assign.php`
2. Select target client in `Target Client`.
3. In search box, type server name or IPMI IP.
4. Select one or many matching servers.
5. Click `Assign Selected Servers`.

### L3. Move assignment to another client
1. Select server(s) that are already assigned.
2. Submit.
3. Confirm popup when asked to move.
4. System moves assignment to selected client (with reseller permission checks).

---

## M) Supermicro / BMC Validation (Keep As Ongoing Ops)

### M1. Pick One Validation Target First
1. Use one server only per run.
2. Prefer known-working endpoint first (current example: `10.30.251.132`).
3. Do not mix multiple failing servers in one test cycle.

### M2. Confirm Current DB State
Run:
```bash
php -r 'require "/var/www/html/config.php"; $ip="10.30.251.132"; $r=$mysqli->query("SELECT id,server_name,ipmi_ip,bmc_type FROM servers WHERE ipmi_ip=\"".$mysqli->real_escape_string($ip)."\" ORDER BY id"); while($x=$r->fetch_assoc()){echo implode("\t",$x).PHP_EOL;}'
```
Pass:
1. You can clearly identify the row(s) being tested.
2. `bmc_type` is not empty.

### M3. Verify Raw IPMI Reachability From Panel Host
Run:
```bash
timeout 10 ipmitool -I lanplus -H 10.30.251.132 -U bthoster -P 'PhVbWJkMbntDZ7aM' chassis power status
timeout 10 ipmitool -I lanplus -C 3 -H 10.30.251.132 -U bthoster -P 'PhVbWJkMbntDZ7aM' chassis power status
```
Pass:
1. At least one command returns `Chassis Power is on` or `Chassis Power is off`.
Fail:
1. Both fail -> endpoint/credential/policy issue, not WHMCS UI issue.

### M4. Force BMC Type Re-Detect (when needed)
For one server:
```bash
php /var/www/html/jobs/detect_bmc_types.php --ids=418
```
For all servers:
```bash
php /var/www/html/jobs/detect_bmc_types.php --ids="$(php -r 'require "/var/www/html/config.php"; $r=$mysqli->query("SELECT GROUP_CONCAT(id) ids FROM servers"); $x=$r->fetch_assoc(); echo $x["ids"] ?? "";')"
```
Then verify:
```bash
php -r 'require "/var/www/html/config.php"; $id=418; $r=$mysqli->query("SELECT id,server_name,bmc_type FROM servers WHERE id=".$id); var_export($r->fetch_assoc());'
```

### M5. Validate Panel Command + Status Sync
1. Open panel dashboard (`index.php`).
2. On the same test row:
   1. Click `REFRESH` (record state).
   2. Click one power action (`OFF` or `ON`).
   3. Row should keep `WORKING...` until transition is confirmed (no immediate fallback to stale old label).
   4. Wait up to 20-30 seconds (auto live polling is running in background).
   4. If needed, click `REFRESH` once manually at the end.
3. Confirm state changed as expected.
4. If same `ipmi_ip` appears in multiple rows, refresh all related rows before concluding mismatch.

### M6. Validate WHMCS Command Path
1. Open WHMCS service page.
2. Run `Get Status`, then one power command.
3. Confirm success banner in WHMCS.
4. Confirm matching state in panel after refresh.

### M7. If It Fails, Collect Exact Evidence
1. Server id/name
2. `ipmi_ip`
3. Button clicked
4. Timestamp
5. Last action logs:
```bash
php -r 'require "/var/www/html/config.php"; $id=418; $r=$mysqli->query("SELECT id,action,result,created_at FROM action_logs WHERE server_id=".$id." ORDER BY id DESC LIMIT 20"); while($x=$r->fetch_assoc()){echo implode("\t",[$x["id"],$x["action"],$x["result"],$x["created_at"]]).PHP_EOL;}'
```

---

## N) Remaining Tasks (Not Implemented Yet)

1. IPMI session flow requested after WHMCS phase.
2. Modern UI redesign phase.

---

## O) Client-Requested Next Phase (Explicit Scope)

This section is the direct reference for the two items you mentioned.

### O1. IPMI Session (Requested, not done yet)
Client direction:
1. "make just ipmi session"
2. do not prioritize KVM proxy in this phase
3. client should access IPMI login/session flow from panel workflow

Current status:
1. Not implemented yet in production-ready flow.
2. Existing `kvm_proxy.php` is not the finalized "IPMI session" feature requested in latest chat.

### O2. UI Redesign (Requested, not done yet)
Client direction:
1. modern/newer panel design

Current status:
1. Not implemented yet.
2. Current UI is functional/admin-focused, not the redesign phase output.

### O3. Delivery order for next phase
1. IPMI session flow first
2. UI redesign second

---

## P) Current Complaint Handling (Before Next Phase)

### P1. What is already fixed in codebase
1. WHMCS module supports:
   1. Suspend/Unsuspend
   2. Power On/Power Off/Reboot/Get Status
   3. service-level IPMI fields (not one global IP for all clients)
2. Accept-order provisioning API flow exists:
   1. create/reuse panel user
   2. create/reuse server
   3. assign server to client
3. Panel side improvements already coded:
   1. client -> filtered server assignments
   2. bulk assign + search + move confirmation
4. BMC handling already improved:
   1. `supermiscro` typo normalization
   2. vendor-aware command order
   3. background BMC re-detect support

### P2. What you must do manually now
1. Complete WHMCS-side sync and settings (section K2 + K3).
2. Run smoke tests yourself first:
   1. Module commands from WHMCS service page
   2. status sync in panel
   3. bulk assign flow in panel
3. For each complaint, verify directly by yourself and collect evidence:
   1. server name
   2. exact button/action
   3. exact timestamp
   4. exact error text/screenshot
   5. latest `action_logs` rows for that server

### P3. Copy-paste client reply (use now, no questions)
```text
Thanks for the report. I am rechecking all previous issues directly on my side now and validating each action on live.

I will finish previous issue fixes first, then move to IPMI session and redesign.

I will send you a confirmed update after retest.
```

### P4. Ask client only if blocked
Only ask client for input if one of these blocks happens:
1. missing/invalid IPMI credentials for a specific server
2. network ACL or firewall block from panel IP
3. server is production-critical and needs explicit safe test window

---

## Q) Current Priority Runbook (Do This Now)

### Q1. Start Point (where you start now)
Start from here now:
1. Re-upload WHMCS module file + clear template cache (Section `B`).
2. WHMCS panel-login username/email mismatch fix for client screenshot case (Q5).
3. Then `s393` panel power-command failure check (Q2 -> Q3 -> Q4).
4. Then autosuspend validation (Q6).

### Q2. Reproduce `s393` Failure From Panel
1. Open panel dashboard (`http://213.177.179.84/index.php`).
2. Find row `s393`.
3. Click `REFRESH`.
4. Click `OFF` once.
5. Capture:
   1. exact timestamp,
   2. top message text,
   3. state shown after refresh.

### Q3. Check `s393` in DB + Logs
Run on panel SSH:
```bash
php -r 'require "/var/www/html/config.php"; $r=$mysqli->query("SELECT id,server_name,ipmi_ip,bmc_type FROM servers WHERE server_name=\"s393\" ORDER BY id DESC LIMIT 1"); var_export($r->fetch_assoc());'
php -r 'require "/var/www/html/config.php"; $sid=(int)($mysqli->query("SELECT id FROM servers WHERE server_name=\"s393\" ORDER BY id DESC LIMIT 1")->fetch_assoc()["id"] ?? 0); $r=$mysqli->query("SELECT id,action,result,created_at FROM action_logs WHERE server_id=".$sid." ORDER BY id DESC LIMIT 20"); while($x=$r->fetch_assoc()){echo implode("\t",[$x["id"],$x["action"],$x["result"],$x["created_at"]]).PHP_EOL;}'
```
Pass:
1. `action_logs` contains latest `chassis power off/on/reset` entries with clear result text.

### Q4. Raw IPMI Check for `s393` Endpoint
Get exact `ipmi_ip`, `ipmi_user`, `ipmi_pass` from DB first (do not assume defaults):
```bash
php -r 'require_once "/var/www/html/config.php"; if (!class_exists("Encryption")) { require_once "/var/www/html/lib/encryption.php"; } $q=$mysqli->query("SELECT id,server_name,ipmi_ip,ipmi_user,ipmi_pass FROM servers WHERE server_name=\"s393\" ORDER BY id DESC LIMIT 1"); $x=$q->fetch_assoc(); if(!$x){exit("not found\n");} try{$u=Encryption::decrypt($x["ipmi_user"]);}catch(Throwable $e){$u=$x["ipmi_user"];} try{$p=Encryption::decrypt($x["ipmi_pass"]);}catch(Throwable $e){$p=$x["ipmi_pass"];} echo "ID=".$x["id"].PHP_EOL; echo "IPMI_IP=".$x["ipmi_ip"].PHP_EOL; echo "IPMI_USER=".$u.PHP_EOL; echo "IPMI_PASS=".$p.PHP_EOL;'
```
Then run raw checks with those exact values:
```bash
timeout 10 ipmitool -I lanplus -H <IPMI_IP> -U '<IPMI_USER>' -P '<IPMI_PASS>' chassis power status
timeout 10 ipmitool -I lanplus -C 3 -H <IPMI_IP> -U '<IPMI_USER>' -P '<IPMI_PASS>' chassis power status
timeout 10 ipmitool -I lan -H <IPMI_IP> -U '<IPMI_USER>' -P '<IPMI_PASS>' chassis power status
```
Interpretation:
1. If both fail, issue is endpoint policy/credential/network path for this server.
2. If one succeeds, issue is panel runtime mapping/bmc_type for this server.

### Q5. WHMCS Login Username Must Match Client Email
1. Open WHMCS admin URL: `https://test.btcloud.ro/admin`
2. Login values:
   1. Username: `uid0`
   2. Password: `Bthoster12!@`
3. Open left menu path: `Clients` -> `View/Search Clients`
4. On `View/Search Clients` page, use this exact target row from current run:
   1. `First Name`: `elliot`
   2. `Last Name`: `carey`
   3. `Email Address`: `ssh_zone@yahoo.com`
5. Click the client row (`elliot carey`) to open `Client Profile`.
6. In `Client Profile`, click tab `Products/Services`.
7. In the top service dropdown (next to `Go`), select the service item (example label: `KVM1`) and click `Go`.
8. Confirm you are on the correct service by checking service fields:
   1. `hostname` custom field = `whmcs-test-smc1`
   2. `ipmi_ip` custom field = `10.30.251.132`
   3. `ipmi_user` custom field = `bthoster`
9. In `Module Commands`, click `Create` once.
10. Wait for `Module Command Success`.
11. Click `Save Changes`.
12. Hard refresh (`Ctrl+F5`).
13. Verify exact service fields:
   1. `Username` field value = `ssh_zone@yahoo.com`
   2. `Hostname` stays same as step 8
   3. `ipmi_ip`, `ipmi_user`, `ipmi_pass` remain unchanged
14. Verify client-area module block:
   1. `Panel Access` username shows `ssh_zone@yahoo.com`
   2. It must not show old username like `bthoste3`
15. Run SSH verification on panel DB:
```bash
php -r 'require "/var/www/html/config.php"; $email="ssh_zone@yahoo.com"; $q=$mysqli->prepare("SELECT id,username,email FROM users WHERE email=? LIMIT 1"); $q->bind_param("s",$email); $q->execute(); $r=$q->get_result(); var_export($r->fetch_assoc());'
```
16. If username is still not email after step 9:
   1. Re-upload module file:
      1. Source: `/var/www/html/WHMCS Module/ipmipanel.php`
      2. Destination: `/httpdocs/modules/servers/ipmipanel/ipmipanel.php`
   2. In WHMCS: `Utilities` -> `System Cleanup` -> `Empty Template Cache` -> `Go`
   3. Hard refresh (`Ctrl+F5`) and repeat steps 9-15
17. If still wrong after step 16, check collision user row:
```bash
php -r 'require "/var/www/html/config.php"; $u="ssh_zone@yahoo.com"; $q=$mysqli->prepare("SELECT id,username,email FROM users WHERE username=?"); $q->bind_param("s",$u); $q->execute(); $r=$q->get_result(); while($x=$r->fetch_assoc()){echo implode("\t",$x).PHP_EOL;}'
```
18. If collision exists with another account, fix collision first, then run `Create` again on service.
19. After `whmcs-test-smc1` passes, repeat steps 7-15 for every client-reported affected service (example: service with hostname `s942`).
20. Mark Q5 done only when all affected services show:
   1. service `Username` = client email
   2. `Panel Access` username = client email

### Q6. Autosuspend Validation
1. WHMCS product must be using module `IPMI Panel (API)`.
2. Simulate suspend from service page by clicking `Suspend`.
3. Confirm:
   1. WHMCS service status becomes `Suspended`.
   2. panel shows `SUSPENDED` state and client power-on is blocked.
4. Click `Unsuspend`.
5. Confirm:
   1. WHMCS service status returns `Active`.
   2. panel allows power actions again.

### Q7. Exit Criteria (before moving to IPMI session feature)
You can move forward only when all are true:
1. `s393` root cause identified with evidence (panel log + raw ipmitool output).
2. WHMCS service username sync is email-based.
3. Suspend/Unsuspend flow is verified end-to-end.

---

## S) IPMI Session Feature (Now Implemented On Panel)

### S1. What is implemented
Current implementation is panel-side only:
1. a new temporary `IPMI Session` button on the panel dashboard
2. a panel-controlled temporary session URL on the panel domain
3. backend session storage with expiry
4. session blocked for suspended servers for non-admin users
5. vendor web UI opens through the panel proxy

Not implemented in this step:
1. noVNC / KVM proxy
2. WHMCS-side IPMI session button
3. redesign changes to WHMCS for this feature

### S2. Start here now for IPMI session test
Use this exact page first:
1. open panel URL: `http://213.177.179.84/index.php`
2. log in with your panel user
3. in the server table, check that there is now a column named `IPMI Session`
4. in that column, the button label should be `Open`

### S3. Admin test path
Use this exact safe test target first:
1. row `whmcs-test-smc1`
2. `IPMI IP` should be `10.30.251.132`

Then do this:
1. click `Open` in the `IPMI Session` column for `whmcs-test-smc1`
2. a new tab should open and directly redirect into proxied IPMI session page (one-click flow)
3. expected URL path starts with `/ipmi_proxy.php/<token>/...`
4. expected result:
   1. you stay on panel domain path beginning with `/ipmi_proxy.php/`
   2. you do not see raw IPMI credentials in normal panel UI
   3. ASRockRack/Supermicro should open session through proxy without requiring clients to know raw IPMI user/pass

Pass criteria:
1. no PHP fatal error page
2. no redirect to panel `/login.php`
3. no redirect to direct raw `https://<ipmi_ip>/...` in browser address bar
4. session opens on panel domain `/ipmi_proxy.php/...`

### S4. Check session storage in DB
After one `Open` click, run on panel SSH:
```bash
php -r 'require "/var/www/html/config.php"; $r=$mysqli->query("SELECT id,token,user_id,server_id,created_ip,expires_at,revoked_at FROM ipmi_web_sessions ORDER BY id DESC LIMIT 10"); while($x=$r->fetch_assoc()){echo implode("\t",$x).PHP_EOL;}'
```
Expected:
1. a new row exists
2. `server_id` matches the clicked server
3. `revoked_at` is empty
4. `expires_at` is about 2 hours ahead

### S5. Verify exact server mapping before session test
Before reporting success, confirm server row:
```bash
php -r 'require "/var/www/html/config.php"; $r=$mysqli->query("SELECT id,server_name,ipmi_ip,bmc_type FROM servers WHERE server_name=\"whmcs-test-smc1\" ORDER BY id DESC LIMIT 1"); var_export($r->fetch_assoc());'
```
Expected values:
1. `server_name` = `whmcs-test-smc1`
2. `ipmi_ip` = `10.30.251.132`

### S6. Suspended-server blocking test
This test must be done with a non-admin panel user that owns the server.

Preparation:
1. make sure the client user has the server assigned
2. log in as that client user in a separate browser/private window

Then:
1. as admin, suspend the same test server from panel or WHMCS
2. as client user, open panel dashboard
3. in `IPMI Session` column for that suspended server:
   1. if button shows `Blocked`, this is acceptable
   2. if `Open` is still visible, click it
4. expected result:
   1. access must be denied
   2. page should show message similar to `Server is suspended`
   3. session must not continue

### S7. Expiry / cleanup check
You do not need to wait 2 hours manually.

To verify cleanup logic exists:
```bash
php -r 'require "/var/www/html/config.php"; $mysqli->query("UPDATE ipmi_web_sessions SET expires_at=DATE_SUB(NOW(), INTERVAL 1 MINUTE) ORDER BY id DESC LIMIT 1"); echo "expired-last-session\n";'
php /var/www/html/ipmi_session.php >/dev/null 2>&1 || true
php -r 'require "/var/www/html/config.php"; $r=$mysqli->query("SELECT id,expires_at,revoked_at FROM ipmi_web_sessions ORDER BY id DESC LIMIT 10"); while($x=$r->fetch_assoc()){echo implode("\t",$x).PHP_EOL;}'
```
Expected:
1. expired rows are removed on next session request, or
2. expired rows are no longer usable

### S8. What to report internally after panel IPMI session test
You can say panel-side IPMI session is working only if all are true:
1. dashboard shows `IPMI Session` column with `Open`
2. click creates DB-backed temporary session
3. session opens on panel domain `/ipmi_proxy.php/...`
4. vendor page loads through proxy
5. suspended client access is blocked

### S9. What is next after S8
Only after S8 passes:
1. wire same session launch into WHMCS module client area
2. then continue redesign or remaining validation
