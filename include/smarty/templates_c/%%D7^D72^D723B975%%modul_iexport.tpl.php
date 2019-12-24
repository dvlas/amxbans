<?php /* Smarty version 2.6.25, created on 2019-12-25 00:53:43
         compiled from modul_iexport.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'lang', 'modul_iexport.tpl', 5, false),array('modifier', 'date_format', 'modul_iexport.tpl', 112, false),array('function', 'html_options', 'modul_iexport.tpl', 63, false),)), $this); ?>
<script type="text/javascript" src="calendar1.js"></script>
<div id="navigation">
	<div id="main-nav">
		<ul class="tabbed">
			<li id="header_1" onclick="ToggleMenu_open('1');"><a href="#"><?php echo ((is_array($_tmp='_ADMINAREA')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</a></li>
			<li id="header_2" onclick="ToggleMenu_open('2');"><a href="#"><?php echo ((is_array($_tmp='_SERVER')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</a></li>
			<li id="header_3" onclick="ToggleMenu_open('3');"><a href="#"><?php echo ((is_array($_tmp='_WEB')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</a></li>
			<li id="header_4" onclick="ToggleMenu_open('4');"><a href="#"><?php echo ((is_array($_tmp='_OTHER')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</a></li>
			<li id="header_5" onclick="ToggleMenu_open('5');"><a href="#"><?php echo ((is_array($_tmp='_MODULES')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</a></li>
		</ul>
		<div class="clearer">&nbsp;</div>
	</div>

	<div id="sub-nav">
		<div id="menu_1" style="display: none;">
			<ul class="tabbed">
				<li><a href="admin.php"><?php echo ((is_array($_tmp='_MENUINFO')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</a></li>
				<li><a href="admin.php?site=ban_add"><?php echo ((is_array($_tmp='_ADDBAN')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</a></li>
				<li><a href="admin.php?site=ban_add_online"><?php echo ((is_array($_tmp='_ADDBANONLINE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</a></li>
			</ul>
		</div>
		<div id="menu_2" style="display: none;">
			<ul class="tabbed">
				<li><a href="admin.php?site=sm_sv"><?php echo ((is_array($_tmp='_SERVER')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</a></li>
				<li><a href="admin.php?site=sm_bg"><?php echo ((is_array($_tmp='_MENUREASONS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</a></li>
				<li><a href="admin.php?site=sm_av"><?php echo ((is_array($_tmp='_ADMINS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</a></li>
				<li><a href="admin.php?site=sm_sa"><?php echo ((is_array($_tmp='_TITLEADMIN')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</a></li>
			</ul>
		</div>
		<div id="menu_3" style="display: none;">
			<ul class="tabbed">
				<li><a href="admin.php?site=wm_wa"><?php echo ((is_array($_tmp='_ADMINS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</a></li>
				<li><a href="admin.php?site=wm_ul"><?php echo ((is_array($_tmp='_PERM')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</a></li>
				<li><a href="admin.php?site=wm_um"><?php echo ((is_array($_tmp='_MENUUSERMENU')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</a></li>
				<li><a href="admin.php?site=wm_ms"><?php echo ((is_array($_tmp='_SETTINGS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</a></li>
			</ul>
		</div>
		<div id="menu_4" style="display: none;">
			<ul class="tabbed">
				<li><a href="admin.php?site=so_mo"><?php echo ((is_array($_tmp='_MODULES')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</a></li>
				<li><a href="admin.php?site=so_up"><?php echo ((is_array($_tmp='_MENUUPDATE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</a></li>
				<li><a href="admin.php?site=so_lg"><?php echo ((is_array($_tmp='_MENULOGS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</a></li>
			</ul>
		</div>
		<div id="menu_5" style="display: block;">
			<ul class="tabbed">
				<li><a href="admin.php?modul=iexport"><?php echo ((is_array($_tmp='_MENUIMPORTEXPORT')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</a></li>
			</ul>
		</div>
		<div class="clearer">&nbsp;</div>
	</div>
</div>

		<td id="main" valign="top" >
		<?php if ($this->_supers['session']['bans_import'] == 'yes' || $this->_supers['session']['bans_export'] == 'yes'): ?>
			<span class="title"><?php echo ((is_array($_tmp='_DATAIMPORTEXPORT')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</span>
			<table width="50%"><tr><td>
				<?php if ($this->_supers['session']['bans_import'] == 'yes' && $this->_supers['session']['bans_export'] == 'yes'): ?>
				<table border="1" width="100%">
					<tr class="htable"><td colspan="2"><b><?php echo ((is_array($_tmp='_DATABASE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</b></td></tr>
					<form method="POST">
					<tr class="settings_line">
						<td valign="top">&nbsp;<b><?php echo ((is_array($_tmp='_LOCALBACKUPS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
:</b><br /> &nbsp;<select name="localfile" style="width: 200px;"><?php echo smarty_function_html_options(array('values' => $this->_tpl_vars['backups'],'output' => $this->_tpl_vars['backups']), $this);?>
</select></td>
						<td width="1%">
							<input type="submit" class="button" class="button" name="dbdownfile" value="<?php echo ((is_array($_tmp='_DOWNLOAD')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
" <?php if ($this->_tpl_vars['count'] == 0): ?>disabled="disabled"<?php endif; ?> /><br />
							<input type="submit" class="button" class="button" name="delfile" value="<?php echo ((is_array($_tmp='_DELETE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
" onclick="return confirm('<?php echo ((is_array($_tmp='_DELBACKUP')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
<?php echo ((is_array($_tmp='_DATALOSS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
');" <?php if ($this->_tpl_vars['count'] == 0): ?>disabled="disabled"<?php endif; ?> />
						</td>
					</tr>
					</form>
					<tr class="htable">
						<td colspan="2"><b><?php echo ((is_array($_tmp='_BACKUPALL')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</b></td>
					</tr>
					<form method="POST">
					<tr class="settings_line">
						<td>
							<input type="checkbox" name="structur" /> <?php echo ((is_array($_tmp='_ONLYSTRUCTUR')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
<br />
							<input type="checkbox" name="droptable" /> <?php echo ((is_array($_tmp='_INCLUDEDROP')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
<br />
							<input type="checkbox" name="deleteall" /> <?php echo ((is_array($_tmp='_INCLUDEDELETE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
<br />
							<input type="checkbox" name="download" /> <?php echo ((is_array($_tmp='_DOWNLOADAFTER')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>

						</td>
						<td valign="bottom" width="1%"><input type="submit" class="button" name="dbexp" value="<?php echo ((is_array($_tmp='_BACKUP')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
" /></td>
					</tr>
					</form>
					<tr class="htable">
						<td colspan="2"><b><?php echo ((is_array($_tmp='_BACKUPBANS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</b></td>
					</tr>
					<form method="POST">
					<tr class="settings_line">
						<td>
							<input type="checkbox" name="download" /> <?php echo ((is_array($_tmp='_DOWNLOADAFTER')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>

						</td>
						<td valign="bottom" width="1%"><input type="submit" class="button" name="dbbansexp" value="<?php echo ((is_array($_tmp='_BACKUP')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
" /></td>
					</tr>
					</form>
					
				</table>
				<br />
				<?php endif; ?>
				
				<table border="1" width="100%">
					<tr class="htabletop"><td colspan="7"><b><?php echo ((is_array($_tmp='_BANSIEXPORT')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</b></td></tr>
					<?php if ($this->_supers['session']['bans_import'] == 'yes'): ?>
						<tr class="htablebottom">
							<td colspan="2"><?php echo ((is_array($_tmp='_IMP_FILE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>
						</tr>
						<form name="bannedcfg" method="POST" enctype="multipart/form-data">
						<tr class="settings_line">
							<td>
								&nbsp;<input size="32" type="text" name="reason" value="<?php echo ((is_array($_tmp='_IMPORT')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
" /> <?php echo ((is_array($_tmp='_REASON')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
<br />
								&nbsp;<input size="32" type="text" name="player_nick" value="<?php echo ((is_array($_tmp='_UNKNOWN')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
" /> <?php echo ((is_array($_tmp='_NICKNAME')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
<br />
								&nbsp;<input size="32" type="text" name="server_name" value="<?php echo ((is_array($_tmp='_WEB')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
" /> <?php echo ((is_array($_tmp='_SERVER')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
<br />
								&nbsp;<input size="28" type="text" name="ban_created" value="<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d-%m-%Y") : smarty_modifier_date_format($_tmp, "%d-%m-%Y")); ?>
" />
								&nbsp;<a alt="" href="javascript:cal1.popup();"><img alt="" src="images/date.png" width="16" height="16" border="0" title="<?php echo ((is_array($_tmp='_PICK_DATE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
" /></a> <?php echo ((is_array($_tmp='_DATE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
<br />
								&nbsp;<input class="input_file" type="file" size="30" name="filename" />
							</td>
							<td width="1%" valign="bottom"><input type="submit" class="button" name="bancfgupl" onclick="return confirm('<?php echo ((is_array($_tmp='_DATAIMPORT')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
');" value="<?php echo ((is_array($_tmp='_IMPORT')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
" /></td>
							<script language="JavaScript">
							<!--
								var cal1 = new calendar1(document.forms['bannedcfg'].elements['ban_created']);
								cal1.year_scroll = true;
								cal1.time_comp = false;
							-->
							</script>
						</tr>
						<tr class="htable">
							<td colspan="2"><?php echo ((is_array($_tmp='_IMP_DB')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>
						</tr>
						<tr class="settings_line">
							<td><?php if ($this->_tpl_vars['dbcheck'] == 'OK'): ?>
								<input type="hidden" name="impdbhost" value="<?php echo $this->_tpl_vars['dbdata']['host']; ?>
" />
								<input type="hidden" name="impdbuser" value="<?php echo $this->_tpl_vars['dbdata']['user']; ?>
" />
								<input type="hidden" name="impdbpw" value="<?php echo $this->_tpl_vars['dbdata']['pass']; ?>
" />
								<input type="hidden" name="impdbdb" value="<?php echo $this->_tpl_vars['dbdata']['database']; ?>
" />
								<input type="hidden" name="impdbtable" value="<?php echo $this->_tpl_vars['dbdata']['table']; ?>
" />
								<?php endif; ?>
								&nbsp;<input size="32" type="text" name="impdbhost" value="<?php if ($this->_tpl_vars['dbdata']): ?><?php echo $this->_tpl_vars['dbdata']['host']; ?>
<?php else: ?>localhost<?php endif; ?>" <?php if ($this->_tpl_vars['dbcheck'] == 'OK'): ?>disabled="disabled"<?php endif; ?> /> <?php echo ((is_array($_tmp='_DBHOST')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
<br />
								&nbsp;<input size="32" type="text" name="impdbuser" value="<?php if ($this->_tpl_vars['dbdata']): ?><?php echo $this->_tpl_vars['dbdata']['user']; ?>
<?php else: ?>user<?php endif; ?>"  <?php if ($this->_tpl_vars['dbcheck'] == 'OK'): ?>disabled="disabled"<?php endif; ?> /> <?php echo ((is_array($_tmp='_DBUSER')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
<br />
								&nbsp;<input size="32" type="password" name="impdbpw" value="<?php if ($this->_tpl_vars['dbdata']): ?><?php echo $this->_tpl_vars['dbdata']['pass']; ?>
<?php endif; ?>"  <?php if ($this->_tpl_vars['dbcheck'] == 'OK'): ?>disabled="disabled"<?php endif; ?> /> <?php echo ((is_array($_tmp='_DBPASSWORD')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
<br />
								&nbsp;<input size="32" type="text" name="impdbdb" value="<?php if ($this->_tpl_vars['dbdata']): ?><?php echo $this->_tpl_vars['dbdata']['database']; ?>
<?php else: ?>amxbans<?php endif; ?>"  <?php if ($this->_tpl_vars['dbcheck'] == 'OK'): ?>disabled="disabled"<?php endif; ?> /> <?php echo ((is_array($_tmp='_DBDATABASE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
<br />
								&nbsp;<input size="32" type="text" name="impdbtable" value="<?php if ($this->_tpl_vars['dbdata']): ?><?php echo $this->_tpl_vars['dbdata']['table']; ?>
<?php else: ?>amx_bans<?php endif; ?>"  <?php if ($this->_tpl_vars['dbcheck'] == 'OK'): ?>disabled="disabled"<?php endif; ?> /> <?php echo ((is_array($_tmp='_DBTABLE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
<br />
								<input type="checkbox" name="onlyperm" <?php if ($this->_tpl_vars['dbdata']['onlyperm']): ?>checked<?php endif; ?> /> <?php echo ((is_array($_tmp='_ONLYPERMANENT')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
<br />
								<input type="checkbox" name="dellocal" <?php if ($this->_tpl_vars['dbdata']['dellocal']): ?>checked<?php endif; ?> /> <?php echo ((is_array($_tmp='_DELETELOCALTABLE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
<br />
							</td>
							<td width="1%" valign="bottom">
								<?php if ($this->_tpl_vars['dbcheck'] == 'OK'): ?><img src="images/success.gif" /><?php endif; ?>
								<input type="submit" class="button" name="bandbcheck" value="<?php echo ((is_array($_tmp='_CONCHECK')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
" <?php if ($this->_tpl_vars['dbcheck'] == 'OK'): ?>disabled="disabled"<?php endif; ?> />
								<input type="submit" class="button" name="bandbimp" value="<?php echo ((is_array($_tmp='_IMPORT')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
" onclick="return confirm('<?php echo ((is_array($_tmp='_DATAIMPORT')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
');" <?php if ($this->_tpl_vars['dbcheck'] != 'OK'): ?>disabled="disabled"<?php endif; ?> />
							</td>
							
						</tr>
						<tr class="settings_line">
							<td>&nbsp;<?php echo ((is_array($_tmp='_DELALLIMPORTED')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
 <?php if ($this->_tpl_vars['importcount'] >= 0): ?><b>(<?php echo $this->_tpl_vars['importcount']; ?>
)</b><?php endif; ?></td>
							<td width="1%" valign="bottom"><input type="submit" class="button" name="delimport" onclick="return confirm('<?php echo ((is_array($_tmp='_DELIMPORT')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
<?php echo ((is_array($_tmp='_DATALOSS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
');" value="<?php echo ((is_array($_tmp='_DELETE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
" <?php if ($this->_tpl_vars['importcount'] == 0): ?>disabled="disabled"<?php endif; ?>/></td>
						</tr>
						<tr class="settings_line">
							<td>&nbsp;<?php echo ((is_array($_tmp='_SETALLNOTIMPORTED')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>
							<td width="1%" valign="bottom"><input type="submit" class="button" name="setnotimported" onclick="return confirm('<?php echo ((is_array($_tmp='_SETIMPORT')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
');" value="<?php echo ((is_array($_tmp='_SET')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
" /></td>
						</tr>
						</form>
					<?php endif; ?>
					<?php if ($this->_supers['session']['bans_export'] == 'yes'): ?>
					<form method="POST">
					<tr class="htable">
						<td colspan="2"><?php echo ((is_array($_tmp='_EXP_FILE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>
					</tr>
					<tr>
						<td>
							<input type="checkbox" name="onlyperm" /> <?php echo ((is_array($_tmp='_ONLYPERMANENT')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
<br />
							<input type="checkbox" name="increason" /> <?php echo ((is_array($_tmp='_INCLUDEREASON')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
<br />
							<input type="checkbox" name="download" /> <?php echo ((is_array($_tmp='_DOWNLOADAFTER')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>

						</td>
						<td valign="bottom" width="1%"><input type="submit" class="button" name="bancfgexp" value="<?php echo ((is_array($_tmp='_EXPORT')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
" /></td>
					</tr>
					</form>
					<?php endif; ?>
				</table>
				<br />
				<center>
					<?php if ($this->_tpl_vars['msg']): ?><div class="notice"><?php echo ((is_array($_tmp=$this->_tpl_vars['msg'])) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
<br /></div><?php endif; ?>
					<?php if ($this->_tpl_vars['statusexport']['exported'] || $this->_tpl_vars['statusexport']['exported'] === 0): ?><div class="success"><?php echo ((is_array($_tmp='_EXPORTED')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
: <?php echo $this->_tpl_vars['statusexport']['exported']; ?>
<br /></div><?php endif; ?>
					<?php if ($this->_tpl_vars['status']): ?><div class="notice"><?php echo ((is_array($_tmp='_IMPORTED')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
: <b><?php echo $this->_tpl_vars['status']['imported']; ?>
</b> / <?php echo ((is_array($_tmp='_FAILED')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
: <b><?php echo $this->_tpl_vars['status']['failed']; ?>
</b><br /></div><?php endif; ?>
					<?php if ($this->_tpl_vars['delcount'] || $this->_tpl_vars['delcount'] === 0): ?><div class="success"><?php echo ((is_array($_tmp='_DELETEDBANS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
: <?php echo $this->_tpl_vars['delcount']; ?>
<br /></div><?php endif; ?>
					<?php if ($this->_tpl_vars['updatecount'] || $this->_tpl_vars['updatecount'] === 0): ?><div class="success"><?php echo ((is_array($_tmp='_UPDATEDBANSNOTIMPORTED')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
: <?php echo $this->_tpl_vars['updatecount']; ?>
<br /></div><?php endif; ?>
				</center>
			<?php else: ?>
				<center><div class="admin_msg"><?php echo ((is_array($_tmp='_NOACCESS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</div></center>
			<?php endif; ?>
			</td></tr></table>
		</td>
	</tr>
</table>