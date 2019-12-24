<?php /* Smarty version 2.6.25, created on 2019-12-25 01:25:24
         compiled from admin_up.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'lang', 'admin_up.tpl', 4, false),)), $this); ?>
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
		<div id="menu_4" style="display: block;">
			<ul class="tabbed">
				<li><a href="admin.php?site=so_mo"><?php echo ((is_array($_tmp='_MODULES')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</a></li>
				<li><a href="admin.php?site=so_up"><?php echo ((is_array($_tmp='_MENUUPDATE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</a></li>
				<li><a href="admin.php?site=so_lg"><?php echo ((is_array($_tmp='_MENULOGS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</a></li>
			</ul>
		</div>
		<div id="menu_5" style="display: none;">
			<ul class="tabbed">
				<li><a href="admin.php?modul=iexport"><?php echo ((is_array($_tmp='_MENUIMPORTEXPORT')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</a></li>
			</ul>
		</div>
		<div class="clearer">&nbsp;</div>
	</div>
</div>

		<td id="main" valign="top">
		<?php if ($this->_supers['session']['amxadmins_view'] == 'yes'): ?>
			<span class="title"><?php echo ((is_array($_tmp='_VERSION')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</span>
			<table width="95%"><tr><td>
				<table border="1" width="100%">
				<form method="POST">
				<table border="1" width="100%">
					<tr class="htabletop">
						<td colspan="3"><b><?php echo ((is_array($_tmp='_WEBVERSIONINFO')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</b></td>
					</tr>
					<tr class="htablebottom">
						<td><?php echo ((is_array($_tmp='_WEB')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>
						<td width="30%"><?php echo ((is_array($_tmp='_VERSION_CURRENT')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>
						<td width="30%"><?php echo ((is_array($_tmp='_VERSION_RELEASE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>
					</tr>
					<tr class="settings_line">
						<td><b><?php echo ((is_array($_tmp='_YOURWEB')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</b></td>
						<td>
							<?php if ($this->_tpl_vars['latest_version'] > $this->_tpl_vars['version_web']): ?>
								<span style="color:orange;font-weight:bold"><?php echo $this->_tpl_vars['version_web']; ?>
</span>
								<?php $this->assign('web', true); ?>
								<img src="images/warning.gif" title="<?php echo ((is_array($_tmp='_UPDATE_RECOMMENDED')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
" />
							<?php else: ?>
								<span style="color:green;font-weight:bold"><?php echo $this->_tpl_vars['version_web']; ?>
</span>
								<img src="images/success.gif" title="<?php echo ((is_array($_tmp='_UPDATE_NOTNEEDED')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
" />
							<?php endif; ?>
						</td>
						<td><?php echo $this->_tpl_vars['version_latest']; ?>
</td>
					</tr>
				</table>
				<br />
			</table>
			<table width="95%"><tr><td width="49%" valign="top">
				<form method="POST">
				<table border="1" width="100%">
					<tr class="htabletop">
						<td colspan="4"><b><?php echo ((is_array($_tmp='_PLUGINVERSIONINFO')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</b></td>
					</tr>
					<tr class="htablebottom">
						<td><?php echo ((is_array($_tmp='_SERVER')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>
						<td width="30%"><?php echo ((is_array($_tmp='_VERSION_CURRENT')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>
						<td width="30%"><?php echo ((is_array($_tmp='_VERSION_RELEASE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>
					</tr>
					<?php if ($this->_tpl_vars['server_count'] == 0): ?>
						<tr>
							<td align="center" colspan="2">&nbsp;</td>
							<td><?php echo $this->_tpl_vars['version_latest']; ?>
</td>
						</tr>
					<?php else: ?>
						<?php $_from = $this->_tpl_vars['version_server']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['version_server']):
?>
						<tr>
							<td><?php echo $this->_tpl_vars['version_server']['address']; ?>
</td>
							<td>
								<?php if ($this->_tpl_vars['version_latest'] > $this->_tpl_vars['version_server']['version']): ?>
									<span style="color:orange;font-weight:bold"><?php echo $this->_tpl_vars['version_server']['version']; ?>
</span>
									<?php $this->assign('plugin', true); ?>
									<img src="images/warning.gif" title="<?php echo ((is_array($_tmp='_UPDATE_RECOMMENDED')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
" />
								<?php else: ?>
									<span style="color:green;font-weight:bold"><?php echo $this->_tpl_vars['version_server']['version']; ?>
</span>
									<img src="images/success.gif" title="<?php echo ((is_array($_tmp='_UPDATE_NOTNEEDED')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
" />
								<?php endif; ?>
							</td>
							<td><?php echo $this->_tpl_vars['version_latest']; ?>
</td>
						</tr>
						<?php endforeach; endif; unset($_from); ?>
					<?php endif; ?>
				</table>
				<br />
			</table>
			<?php if ($this->_tpl_vars['web'] == true): ?><center><div class="notice"><img src="images/warning.gif" alt="" border="0" /> <a href="http://www.amxbans.net/dl.php?f=<?php echo $this->_tpl_vars['version_latest']; ?>
" target="_blank"><?php echo ((is_array($_tmp='_WEBUPDATE_RECOMMENDED')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</a></div></center><?php endif; ?>
			<?php if ($this->_tpl_vars['plugin'] == true): ?><center><div class="notice"><img src="images/warning.gif" alt="" border="0" /> <a href="http://www.amxbans.net/dl.phpf=<?php echo $this->_tpl_vars['version_latest']; ?>
" target="_blank"><?php echo ((is_array($_tmp='_PLUGINUPDATE_RECOMMENDED')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</a></div></center><?php endif; ?>
			<?php $_from = $this->_tpl_vars['error']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['error']):
?>
				<div class="error"><?php echo ((is_array($_tmp=$this->_tpl_vars['error'])) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</div>
			<?php endforeach; endif; unset($_from); ?>
			<br />
		<?php else: ?>
			<center><div class="admin_msg"><?php echo ((is_array($_tmp='_NOACCESS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</div></center>
		<?php endif; ?>
		</td>
	</tr>
</table>