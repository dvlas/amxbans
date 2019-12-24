<?php /* Smarty version 2.6.25, created on 2019-12-25 00:49:04
         compiled from admin_um.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'lang', 'admin_um.tpl', 4, false),)), $this); ?>
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
		<div id="menu_3" style="display: block;">
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
		<?php if ($this->_supers['session']['websettings_view'] == 'yes'): ?>
			<span class="title"><?php echo ((is_array($_tmp='_USERMENUSETTINGS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</span>
			<table width="95%" align="center"><tr><td>
				<table border="1" width="100%">
					<tr align="center" class="htabletop"><td colspan="7"><b><?php echo ((is_array($_tmp='_USERMENU')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</b></td></tr>
					<tr class="htablebottom">
						<td width="1%" colspan="2">&nbsp;</td>
						<td align="center" colspan="2"><?php echo ((is_array($_tmp='_MENULOGGEDOUT')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>
						<td align="center" colspan="2"><?php echo ((is_array($_tmp='_MENULOGGEDIN')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>
						<td width="1%">&nbsp;</td>
					</tr>
					<tr align="center">
						<td width="1%"><?php echo ((is_array($_tmp='_POSITION')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>
						<td width="1%"><?php echo ((is_array($_tmp='_ACTIV')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>
						<td align="center"><?php echo ((is_array($_tmp='_LANGKEY1')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>
						<td width="1%"align="center"><?php echo ((is_array($_tmp='_URL1')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>
						<td align="center"><?php echo ((is_array($_tmp='_LANGKEY2')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>
						<td width="1%" align="center"><?php echo ((is_array($_tmp='_URL2')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>
						<td width="1%">&nbsp;</td>
					</tr>
					<?php unset($this->_sections['menu']);
$this->_sections['menu']['name'] = 'menu';
$this->_sections['menu']['loop'] = is_array($_loop=$this->_tpl_vars['menu2']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['menu']['start'] = (int)0;
$this->_sections['menu']['step'] = ((int)1) == 0 ? 1 : (int)1;
$this->_sections['menu']['show'] = true;
$this->_sections['menu']['max'] = $this->_sections['menu']['loop'];
if ($this->_sections['menu']['start'] < 0)
    $this->_sections['menu']['start'] = max($this->_sections['menu']['step'] > 0 ? 0 : -1, $this->_sections['menu']['loop'] + $this->_sections['menu']['start']);
else
    $this->_sections['menu']['start'] = min($this->_sections['menu']['start'], $this->_sections['menu']['step'] > 0 ? $this->_sections['menu']['loop'] : $this->_sections['menu']['loop']-1);
if ($this->_sections['menu']['show']) {
    $this->_sections['menu']['total'] = min(ceil(($this->_sections['menu']['step'] > 0 ? $this->_sections['menu']['loop'] - $this->_sections['menu']['start'] : $this->_sections['menu']['start']+1)/abs($this->_sections['menu']['step'])), $this->_sections['menu']['max']);
    if ($this->_sections['menu']['total'] == 0)
        $this->_sections['menu']['show'] = false;
} else
    $this->_sections['menu']['total'] = 0;
if ($this->_sections['menu']['show']):

            for ($this->_sections['menu']['index'] = $this->_sections['menu']['start'], $this->_sections['menu']['iteration'] = 1;
                 $this->_sections['menu']['iteration'] <= $this->_sections['menu']['total'];
                 $this->_sections['menu']['index'] += $this->_sections['menu']['step'], $this->_sections['menu']['iteration']++):
$this->_sections['menu']['rownum'] = $this->_sections['menu']['iteration'];
$this->_sections['menu']['index_prev'] = $this->_sections['menu']['index'] - $this->_sections['menu']['step'];
$this->_sections['menu']['index_next'] = $this->_sections['menu']['index'] + $this->_sections['menu']['step'];
$this->_sections['menu']['first']      = ($this->_sections['menu']['iteration'] == 1);
$this->_sections['menu']['last']       = ($this->_sections['menu']['iteration'] == $this->_sections['menu']['total']);
?>
						<form name="form" method="POST">
							<input type="hidden" name="mid" value="<?php echo $this->_tpl_vars['menu2'][$this->_sections['menu']['index']]['id']; ?>
" />
							<input type="hidden" name="pos" value="<?php echo $this->_sections['menu']['index']; ?>
" />
							<tr>
								<td class="settings_line">
									<nobr>
										<?php if ($this->_tpl_vars['menu2'][$this->_sections['menu']['index']]['pos'] >= 1): ?>
										<input type="image" src="images/pfeilo.gif" name="pos_up" border="0" width="9px" height="8px" />
										<?php endif; ?>
										<?php if ($this->_sections['menu']['index_next'] !== $this->_tpl_vars['menu_count']): ?>
										<input type="image" src="images/pfeilu.gif" name="pos_dn" border="0" width="9px" height="8px" 
											<?php if ($this->_tpl_vars['menu2'][$this->_sections['menu']['index']]['pos'] == 1): ?>style="margin-left:11px;"<?php endif; ?> />
										<?php endif; ?>
									</nobr>
								</td>
								<td><input type="checkbox" name="activ" value="<?php echo $this->_tpl_vars['menu2'][$this->_sections['menu']['index']]['id']; ?>
" <?php if ($this->_tpl_vars['menu2'][$this->_sections['menu']['index']]['activ'] == 1): ?>checked<?php endif; ?> />
								<td><nobr><input size="8" type="text" name="lang_key" value="<?php echo $this->_tpl_vars['menu2'][$this->_sections['menu']['index']]['lang_key']; ?>
" /><?php if ($this->_tpl_vars['menu2'][$this->_sections['menu']['index']]['lang_key']): ?> ("<?php echo ((is_array($_tmp=$this->_tpl_vars['menu2'][$this->_sections['menu']['index']]['lang_key'])) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
")<?php endif; ?></nobr></td>
								<td><input size="15" type="text" name="url" value="<?php echo $this->_tpl_vars['menu2'][$this->_sections['menu']['index']]['url']; ?>
" /></td>
								<td><nobr><input size="8" type="text" name="lang_key2" value="<?php echo $this->_tpl_vars['menu2'][$this->_sections['menu']['index']]['lang_key2']; ?>
" /><?php if ($this->_tpl_vars['menu2'][$this->_sections['menu']['index']]['lang_key2']): ?> ("<?php echo ((is_array($_tmp=$this->_tpl_vars['menu2'][$this->_sections['menu']['index']]['lang_key2'])) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
")<?php endif; ?></nobr></td>
								<td><input size="15" type="text" name="url2" value="<?php echo $this->_tpl_vars['menu2'][$this->_sections['menu']['index']]['url2']; ?>
" /></td>
								<td><nobr>
									<input type="submit" class="button" name="save" value="<?php echo ((is_array($_tmp='_SAVE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
" <?php if ($this->_supers['session']['websettings_edit'] !== 'yes'): ?>disabled<?php endif; ?> />
									<input type="submit" class="button" name="del" value="<?php echo ((is_array($_tmp='_DELETE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
" <?php if ($this->_supers['session']['websettings_edit'] !== 'yes'): ?>disabled<?php endif; ?> /></nobr>
								</td>
							</tr>
							
						</form>
					<?php endfor; endif; ?>
					
				</table>
				<?php if ($this->_supers['session']['websettings_edit'] == 'yes'): ?>
					<form method="POST">
						<input type="hidden" name="pos" value="<?php echo $this->_tpl_vars['menu_count']; ?>
" />
						<table width="50%" align="center">
							<tr class="htable">
								<td colspan="3"><b><?php echo ((is_array($_tmp='_USERMENUADD')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</b></td>
							</tr>
							<tr>
								<tr class="settings_line"><td><b><?php echo ((is_array($_tmp='_LANGKEY1')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
:</b></td><td><input type="text" name="lang_key" /></td></tr>
								<tr class="settings_line"><td><b><?php echo ((is_array($_tmp='_URL1')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
:</b></td><td><input type="text" name="url" /></td></tr>
								<tr class="settings_line"><td><b><?php echo ((is_array($_tmp='_LANGKEY2')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
:</b></td><td><input type="text" name="lang_key2" /></td></tr>
								<tr class="settings_line"><td><b><?php echo ((is_array($_tmp='_URL2')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
:</b></td><td><input type="text" name="url2" /></td>
								<td>
										<input type="submit" class="button" name="new" value="<?php echo ((is_array($_tmp='_ADD')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
" <?php if ($this->_supers['session']['websettings_edit'] !== 'yes'): ?>disabled<?php endif; ?> >
									</td>
								</tr>
							</tr>
						</table>
					</form>
				<?php endif; ?>
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