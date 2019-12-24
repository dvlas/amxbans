<?php /* Smarty version 2.6.25, created on 2019-12-25 01:26:49
         compiled from admin_mo.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'lang', 'admin_mo.tpl', 4, false),)), $this); ?>
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

		<td id="main" valign="top" >
		<?php if ($this->_supers['session']['amxadmins_view'] == 'yes'): ?>
			<span class="title"><?php echo ((is_array($_tmp='_MODULSETTINGS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</span>
			<table width="95%"><tr><td>
				<table border="1" width="100%">
					<tr class="htabletop"><td colspan="8"><b><?php echo ((is_array($_tmp='_MODULSETTINGS2')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</b></td></tr>
					<tr class="htablebottom">
						<td width="1%"><?php echo ((is_array($_tmp='_ACTIV')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>
						<td><?php echo ((is_array($_tmp='_NAMELANGKEY')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>
						<td width="1%"><?php echo ((is_array($_tmp='_INDEXSITE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>
						<td width="1%"><?php echo ((is_array($_tmp='_NAME')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>
						<td width="1%"><nobr><?php echo ((is_array($_tmp='_ADMINSITE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</nobr></td>
						<td width="1%"><?php echo ((is_array($_tmp='_TEMPLATE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>
						<td width="1%"><nobr><?php echo ((is_array($_tmp='_INDEXSITE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</nobr></td>
						<td width="1%">&nbsp;</td>
					</tr>
					<?php unset($this->_sections['modules']);
$this->_sections['modules']['name'] = 'modules';
$this->_sections['modules']['loop'] = is_array($_loop=$this->_tpl_vars['modules2']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['modules']['start'] = (int)0;
$this->_sections['modules']['step'] = ((int)1) == 0 ? 1 : (int)1;
$this->_sections['modules']['show'] = true;
$this->_sections['modules']['max'] = $this->_sections['modules']['loop'];
if ($this->_sections['modules']['start'] < 0)
    $this->_sections['modules']['start'] = max($this->_sections['modules']['step'] > 0 ? 0 : -1, $this->_sections['modules']['loop'] + $this->_sections['modules']['start']);
else
    $this->_sections['modules']['start'] = min($this->_sections['modules']['start'], $this->_sections['modules']['step'] > 0 ? $this->_sections['modules']['loop'] : $this->_sections['modules']['loop']-1);
if ($this->_sections['modules']['show']) {
    $this->_sections['modules']['total'] = min(ceil(($this->_sections['modules']['step'] > 0 ? $this->_sections['modules']['loop'] - $this->_sections['modules']['start'] : $this->_sections['modules']['start']+1)/abs($this->_sections['modules']['step'])), $this->_sections['modules']['max']);
    if ($this->_sections['modules']['total'] == 0)
        $this->_sections['modules']['show'] = false;
} else
    $this->_sections['modules']['total'] = 0;
if ($this->_sections['modules']['show']):

            for ($this->_sections['modules']['index'] = $this->_sections['modules']['start'], $this->_sections['modules']['iteration'] = 1;
                 $this->_sections['modules']['iteration'] <= $this->_sections['modules']['total'];
                 $this->_sections['modules']['index'] += $this->_sections['modules']['step'], $this->_sections['modules']['iteration']++):
$this->_sections['modules']['rownum'] = $this->_sections['modules']['iteration'];
$this->_sections['modules']['index_prev'] = $this->_sections['modules']['index'] - $this->_sections['modules']['step'];
$this->_sections['modules']['index_next'] = $this->_sections['modules']['index'] + $this->_sections['modules']['step'];
$this->_sections['modules']['first']      = ($this->_sections['modules']['iteration'] == 1);
$this->_sections['modules']['last']       = ($this->_sections['modules']['iteration'] == $this->_sections['modules']['total']);
?>
						<form name="form" method="POST">
							<input type="hidden" name="mid" value="<?php echo $this->_tpl_vars['modules2'][$this->_sections['modules']['index']]['id']; ?>
" />
							<input type="hidden" name="mname" value="<?php echo $this->_tpl_vars['modules2'][$this->_sections['modules']['index']]['menuname']; ?>
" />
							<tr class="settings_line">
								
								<td><input type="checkbox" name="activ" value="<?php echo $this->_tpl_vars['modules2'][$this->_sections['modules']['index']]['id']; ?>
" <?php if ($this->_tpl_vars['modules2'][$this->_sections['modules']['index']]['activ'] == 1): ?>checked<?php endif; ?> />
								<td><nobr><input type="text" name="menuname" value="<?php echo $this->_tpl_vars['modules2'][$this->_sections['modules']['index']]['menuname']; ?>
" /> ("<?php echo ((is_array($_tmp=$this->_tpl_vars['modules2'][$this->_sections['modules']['index']]['menuname'])) ? $this->_run_mod_handler('lang', true, $_tmp, 'hlm') : smarty_modifier_lang($_tmp, 'hlm')); ?>
")</nobr></td>
								<td><input type="text" name="index" value="<?php echo $this->_tpl_vars['modules2'][$this->_sections['modules']['index']]['index']; ?>
" /></td>
								<td><input type="text" size="12" name="name" value="<?php echo $this->_tpl_vars['modules2'][$this->_sections['modules']['index']]['name']; ?>
" /></td>
								<td><img src="images/<?php if ($this->_tpl_vars['modules2'][$this->_sections['modules']['index']]['admin_page_exists'] == 0): ?>warning<?php else: ?>success<?php endif; ?>.gif" /></td>
								<td><img src="images/<?php if ($this->_tpl_vars['modules2'][$this->_sections['modules']['index']]['tpl_exists'] == 0): ?>warning<?php else: ?>success<?php endif; ?>.gif" /></td>
								<td>
									<?php if ($this->_tpl_vars['modules2'][$this->_sections['modules']['index']]['index'] == ""): ?><?php echo ((is_array($_tmp='_NO')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
<?php else: ?>
									<img src="images/<?php if ($this->_tpl_vars['modules2'][$this->_sections['modules']['index']]['index_exists'] == 0): ?>warning<?php else: ?>success<?php endif; ?>.gif" /><?php endif; ?>
								</td>
								<td>
									<input type="submit" class="button" name="save" value="<?php echo ((is_array($_tmp='_SAVE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
" <?php if ($this->_supers['session']['websettings_edit'] !== 'yes'): ?>disabled<?php endif; ?> />
								</td>
							</tr>
						</form>
					<?php endfor; endif; ?>
				</table>
				<br />
				<?php if ($this->_tpl_vars['msg']): ?><div class="notice"><?php echo ((is_array($_tmp=$this->_tpl_vars['msg'])) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</div><?php endif; ?>
			<?php else: ?>
				<center><div class="admin_msg"><?php echo ((is_array($_tmp='_NOACCESS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</div></center>
			<?php endif; ?>
			</td></tr></table>
		</td>
	</tr>
</table>