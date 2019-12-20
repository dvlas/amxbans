<?php /* Smarty version 2.6.25, created on 2019-12-21 01:49:51
         compiled from admin_ban_add.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'lang', 'admin_ban_add.tpl', 4, false),array('function', 'html_options', 'admin_ban_add.tpl', 82, false),)), $this); ?>
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
		<div id="menu_1" style="display: block;">
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
		<div id="menu_5" style="display: none;">
			<ul class="tabbed">
				<li><a href="admin.php?modul=iexport"><?php echo ((is_array($_tmp='_MENUIMPORTEXPORT')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</a></li>
			</ul>
		</div>
		<div class="clearer">&nbsp;</div>
	</div>
</div>
<?php if ($this->_tpl_vars['msg'] <> ""): ?>
	<div class="notice"><?php echo ((is_array($_tmp=($this->_tpl_vars['msg']))) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</div>
<?php endif; ?>
<div class="main">
	<div class="post">
	<?php if ($this->_supers['session']['bans_add'] == 'yes'): ?>
	<form method="post">
		<table frame="box" rules="groups" summary=""> 
			<thead> 
				<tr>
					<th style="width:200px;"><?php echo ((is_array($_tmp='_ADDBAN')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</th> 
					<th>&nbsp;</th>
				</tr>
			</thead> 
			<tbody> 
				<tr class="settings_line"> 
					<td class="fat"><?php echo ((is_array($_tmp='_NICKNAME')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td> 
					<td><input type="text" size="40" name="name" <?php if ($this->_tpl_vars['inputs']['name'] != ""): ?>value="<?php echo $this->_tpl_vars['inputs']['name']; ?>
"<?php endif; ?>/></td> 
				</tr> 
				<tr class="settings_line"> 
					<td class="fat"><?php echo ((is_array($_tmp='_STEAMID')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td> 
					<td><input type="text" size="40" name="steamid" <?php if ($this->_tpl_vars['inputs']['steamid'] != ""): ?>value="<?php echo $this->_tpl_vars['inputs']['steamid']; ?>
"<?php else: ?>value="STEAM_0:"<?php endif; ?>/></td> 
				</tr> 
				<tr class="settings_line"> 
					<td class="fat"><?php echo ((is_array($_tmp='_IP')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td> 
					<td><input type="text" size="40" name="ip" <?php if ($this->_tpl_vars['inputs']['ip'] != ""): ?>value="<?php echo $this->_tpl_vars['inputs']['ip']; ?>
"<?php endif; ?>/></td>  
				</tr> 
				<tr class="settings_line"> 
					<td class="fat"><?php echo ((is_array($_tmp='_BANTYPE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td> 
					<td>
						<select name="ban_type"><?php echo smarty_function_html_options(array('output' => $this->_tpl_vars['banby_output'],'values' => $this->_tpl_vars['banby_values'],'selected' => $this->_tpl_vars['inputs']['type']), $this);?>
</select>
					</td> 
				</tr> 
				<tr class="settings_line"> 
					<td class="fat"><?php echo ((is_array($_tmp='_REASON')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td> 
					<td>
						<select name="ban_reason"><?php echo smarty_function_html_options(array('output' => $this->_tpl_vars['reasons'],'values' => $this->_tpl_vars['reasons'],'selected' => $this->_tpl_vars['inputs']['reason']), $this);?>
</select>
							<?php echo ((is_array($_tmp='_OR')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
 <br /><input type="checkbox" name="reasoncheck" <?php if ($this->_tpl_vars['inputs']['reason_custom'] == 1): ?>checked<?php endif; ?>/>
							<?php echo ((is_array($_tmp='_REASON')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
: <input type="text" size="30" name="user_reason" <?php if ($this->_tpl_vars['inputs']['reason_custom'] == 1): ?>value="<?php echo $this->_tpl_vars['inputs']['reason']; ?>
"<?php endif; ?>/>
					</td> 
				</tr> 
				<tr class="settings_line"> 
					<td class="fat"><?php echo ((is_array($_tmp='_BANLENGHT')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td> 
					<td>
						<input type="text" size="8" name="ban_length" <?php if ($this->_tpl_vars['inputs']['length'] > 0): ?>value="<?php echo $this->_tpl_vars['inputs']['length']; ?>
"<?php endif; ?>/> <?php echo ((is_array($_tmp='_MINS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
 
							<?php echo ((is_array($_tmp='_OR')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
 <br /><input type="checkbox" name="perm" <?php if ($this->_tpl_vars['inputs']['length'] == 0): ?>checked<?php endif; ?>/> <?php echo ((is_array($_tmp='_PERMANENT')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>

					</td> 
				</tr> 
			</tbody> 
		</table>
		<div class="_right"><input type="submit" class="button" name="save" value="<?php echo ((is_array($_tmp='_ADD')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
" /></div> 
	</form>
		<?php else: ?>
			<center><div class="admin_msg"><?php echo ((is_array($_tmp='_NOACCESS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</div></center>
		<?php endif; ?>
		</td>
		<div class="clearer">&nbsp;</div>
	</div>

	<div class="clearer">&nbsp;</div>
</div>