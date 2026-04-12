<style>
.ipmi-controls { margin: 15px 0; }
.ipmi-controls .ipmi-info-row { margin-bottom: 10px; }
.ipmi-controls .ipmi-info-row strong { display: inline-block; min-width: 140px; }
.ipmi-controls .ipmi-power-buttons { margin: 15px 0; display: flex; flex-wrap: wrap; gap: 8px; }
.ipmi-controls .ipmi-access-buttons { margin: 15px 0; display: flex; flex-wrap: wrap; gap: 8px; }
.ipmi-controls .ipmi-status-badge { display: inline-block; padding: 2px 10px; border-radius: 4px; font-weight: 600; font-size: 13px; }
.ipmi-controls .ipmi-status-on { background: #d4edda; color: #155724; }
.ipmi-controls .ipmi-status-off { background: #f8d7da; color: #721c24; }
.ipmi-controls .ipmi-status-unknown { background: #e2e3e5; color: #383d41; }
.ipmi-controls .ipmi-panel-creds { background: #f8f9fa; border: 1px solid #dee2e6; border-radius: 6px; padding: 12px 16px; margin: 12px 0; }
</style>

<div class="ipmi-controls">
    <h3>Server Management</h3>

    {if $ipmipanelIsSuspended}
        <div class="alert alert-warning">
            <strong>Server is suspended.</strong> Power controls and IPMI access are disabled. Please contact support or pay your invoice to restore access.
        </div>
    {else}
        {if $ipmipanelServerId > 0}
            <div class="ipmi-info-row">
                <strong>Hostname:</strong> {$ipmipanelHostname}
            </div>
            <div class="ipmi-info-row">
                <strong>Power Status:</strong>
                {if $ipmipanelPowerState == 'on'}
                    <span class="ipmi-status-badge ipmi-status-on">ON</span>
                {elseif $ipmipanelPowerState == 'off'}
                    <span class="ipmi-status-badge ipmi-status-off">OFF</span>
                {else}
                    <span class="ipmi-status-badge ipmi-status-unknown">{$ipmipanelPowerState|upper}</span>
                {/if}
            </div>

            <h4>Power Controls</h4>
            <div class="ipmi-power-buttons">
                <a href="clientarea.php?action=productdetails&id={$serviceid}&modop=custom&a=poweron" class="btn btn-success" onclick="return confirm('Power On this server?')">Power On</a>
                <a href="clientarea.php?action=productdetails&id={$serviceid}&modop=custom&a=poweroff" class="btn btn-danger" onclick="return confirm('Power Off this server?')">Power Off</a>
                <a href="clientarea.php?action=productdetails&id={$serviceid}&modop=custom&a=reboot" class="btn btn-warning" onclick="return confirm('Reboot this server?')">Reboot</a>
            </div>

            {if $ipmipanelKvmAccessNote}
            <p class="text-muted small" style="margin:10px 0;">{$ipmipanelKvmAccessNote}</p>
            {/if}
            <h4>Remote Access</h4>
            <div class="ipmi-access-buttons">
                {if $ipmipanelIpmiSessionUrl}
                    <a href="{$ipmipanelIpmiSessionUrl}" target="_blank" class="btn btn-primary">
                        Open IPMI Session
                    </a>
                {/if}
                {if $ipmipanelKvmConsoleUrl}
                    <a href="{$ipmipanelKvmConsoleUrl}" target="_blank" class="btn btn-info">
                        KVM Console
                    </a>
                {/if}
            </div>

            {if $ipmipanelPanelLoginUrl}
                <h4>Panel Access</h4>
                <div class="ipmi-panel-creds">
                    <div class="ipmi-info-row">
                        <strong>Panel URL:</strong> <a href="{$ipmipanelPanelLoginUrl}" target="_blank">{$ipmipanelPanelLoginUrl}</a>
                    </div>
                    {if $ipmipanelPanelUsername}
                        <div class="ipmi-info-row">
                            <strong>Username:</strong> {$ipmipanelPanelUsername}
                        </div>
                    {/if}
                    {if $ipmipanelPanelPassword}
                        <div class="ipmi-info-row">
                            <strong>Password:</strong> {$ipmipanelPanelPassword}
                        </div>
                    {/if}
                </div>
            {/if}
        {else}
            <div class="alert alert-info">
                Server is being provisioned. Controls will be available shortly.
            </div>
        {/if}
    {/if}
</div>
