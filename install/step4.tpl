<div>
	<div align="center" class="notice">
		{"_STEP4DESC"|lang}<br>
		{if $msg}
			{if $version > 5.5}
				<b>Your PDO version {$version}:</b> <img src="images/success.gif" />
				{else}
				<b>{"_WARNING_VERSION_PDO"|lang}:</b> <img src="images/cross.png" />
			{/if}
		{/if}
	</div>
	<br />
	<fieldset>
		<legend>{"_DBSETTINGS"|lang}</legend>
			<table width="100%" cellpadding="5">
				<tr>
					<td>{"_HOST"|lang}:</td>
					<td width="1%"><input type="text" name="dbhost" value="{if $db.0 || $smarty.session.dbhost}{$db.0|default:$smarty.session.dbhost}{else}127.0.0.1{/if}" size="20" /></td>
				</tr>
				<tr>
					<td>{"_USER"|lang}:</td>
					<td width="1%"><input type="text" name="dbuser" value="{$db.1|default:$smarty.session.dbuser}" size="20" /></td>
				</tr>
				<tr>
					<td>{"_PASSWORD"|lang}:</td>
					<td width="1%"><input type="password" value="{$db.2|default:$smarty.session.dbpass}" name="dbpass" size="20" /></td>
				</tr>
				<tr>
					<td>{"_DATABASE"|lang}:</td>
					<td width="1%"><input type="text" name="dbdb" value="{if $db.3 || $smarty.session.dbdb}{$db.3|default:$smarty.session.dbdb}{else}amxbans{/if}" size="20" /></td>
				</tr>
				<tr>
					<td>{"_TBLPREFIX"|lang}:</td>
					<td width="1%"><input type="text" name="dbprefix" value="{if $db.4 || $smarty.session.dbprefix}{$db.4|default:$smarty.session.dbprefix}{else}amx{/if}" size="20" /></td>
				</tr>
			</table>
	</fieldset>
	{if $prevs}
		<fieldset>
			<legend>{"_DBPREVILEGES"|lang}</legend>
			<table width="100%" cellpadding="2">
				{foreach from=$prevs item=prevs}
					<tr class="settings_line">
						<td><b>{$prevs.name}</b></td>
						<td width="1%"><img src="images/{if $prevs.value==1}success.gif{else}cross.png{/if}" /></td>
					</tr>
				{/foreach}
			</table>
	{/if}
	<br />
	{if $msg}
		<div class="{if $msg=="_DBOK"}success{else}error{/if}">{$msg|lang}</div>
	{/if}