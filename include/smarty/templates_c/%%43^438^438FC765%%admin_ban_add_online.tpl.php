<?php /* Smarty version 2.6.25, created on 2019-12-25 00:07:49
         compiled from admin_ban_add_online.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'lang', 'admin_ban_add_online.tpl', 4, false),array('function', 'html_options', 'admin_ban_add_online.tpl', 129, false),array('function', 'counter', 'admin_ban_add_online.tpl', 165, false),)), $this); ?>
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

<div class="main">
	<div class="post">
		<table frame="box" rules="groups" summary=""> 
			<thead> 
				<tr> 
					<th style="width:30px;">&nbsp;</th>
					<th style="width:20px;"><?php echo ((is_array($_tmp='_MOD')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</th> 
					<th style="width:20px;"><?php echo ((is_array($_tmp='_OS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</th> 
					<th style="width:20px;"><?php echo ((is_array($_tmp='_VAC')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</th> 
					<th><?php echo ((is_array($_tmp='_HOSTNAME')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</th> 
					<th style="width:30px;"><?php echo ((is_array($_tmp='_PLAYER')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</th> 
					<th style="width:130px;"><?php echo ((is_array($_tmp='_MAP')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</th> 
				</tr> 
			</thead> 
			<tbody>
				<?php $_from = $this->_tpl_vars['servers']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['servers']):
?>
					<form method="post">
						<input type="hidden" name="server" value="<?php echo $this->_tpl_vars['servers']['id']; ?>
" />
						<?php if ($this->_tpl_vars['servers']['mod']): ?>
							<tr> 
								<td><form method="post"><input type="hidden" name="server" value="<?php echo $this->_tpl_vars['servers']['id']; ?>
"/><input class="button" type="submit" value="<?php echo ((is_array($_tmp='_VIEWSETTINGS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
"/></form></td>
								<td class="_center"><img alt="<?php echo $this->_tpl_vars['servers']['mod']; ?>
" title="<?php echo $this->_tpl_vars['servers']['mod']; ?>
" src="templates/<?php echo $this->_tpl_vars['design']; ?>
_gfx/games/<?php echo $this->_tpl_vars['servers']['mod']; ?>
.gif" /></td> 
								<td class="_center"><img alt="<?php echo $this->_tpl_vars['servers']['os']; ?>
" title="<?php echo $this->_tpl_vars['servers']['os']; ?>
" src="templates/<?php echo $this->_tpl_vars['design']; ?>
_gfx/os/<?php echo $this->_tpl_vars['servers']['os']; ?>
.png" /></td> 
								<td class="_center"><img alt="<?php echo ((is_array($_tmp='_VAC_ALT')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
" title="<?php echo ((is_array($_tmp='_VAC_ALT')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
" src="templates/<?php echo $this->_tpl_vars['design']; ?>
_gfx/acheat/vac.png" /></td> 
								<td><?php echo $this->_tpl_vars['servers']['hostname']; ?>
</td> 
								<td class="_center">
									<?php if ($this->_tpl_vars['servers']['bot_players']): ?>
										<?php echo $this->_tpl_vars['servers']['cur_players']-$this->_tpl_vars['servers']['bot_players']; ?>
 (<?php echo $this->_tpl_vars['servers']['cur_players']; ?>
)
									<?php else: ?>
										<?php echo $this->_tpl_vars['servers']['cur_players']; ?>

									<?php endif; ?> 
									 / <?php echo $this->_tpl_vars['servers']['max_players']; ?>
</td> 
								<td><?php echo $this->_tpl_vars['servers']['map']; ?>
</td> 
							</tr>						
						<?php else: ?>
							<tr class="offline"> 
								<td><form method="post"><input type="hidden" name="server" value="0"/><input class="button" type="submit" value="<?php echo ((is_array($_tmp='_VIEWSETTINGS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
" disabled="disabled"/></form></td>
								<td class="_center"><?php echo ((is_array($_tmp='_NA')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td> 
								<td class="_center"><?php echo ((is_array($_tmp='_NA')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td> 
								<td class="_center"><?php echo ((is_array($_tmp='_NA')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td> 
								<td><?php echo $this->_tpl_vars['servers']['hostname']; ?>
</td> 
								<td class="_center"><?php echo ((is_array($_tmp='_NA')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td> 
								<td><?php echo ((is_array($_tmp='_NA')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td> 
							</tr>
						<?php endif; ?>
					</form>
				<?php endforeach; endif; unset($_from); ?>
			</tbody> 
		</table> 
		<div class="clearer">&nbsp;</div>
	</div>
	
	<form name="frm" method="post">
	<?php if ($this->_tpl_vars['playerscount']): ?>
		<div class="post">
			<table frame="box" rules="groups" summary=""> 
				<thead> 
					<tr>
						<th style="width:250px;"><?php echo ((is_array($_tmp='_ADDBAN')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</th> 
						<th>&nbsp;</th>
					</tr>
				</thead> 
				<tbody> 
					<tr> 
						<td class="fat"><?php echo ((is_array($_tmp='_BANTYPE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td> 
						<td>
							<select name="ban_type">
								<option label="Steamid" value="S"><?php echo ((is_array($_tmp='_STEAMID')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</option>
								<option label="Steamid &amp; IP" value="SI"><?php echo ((is_array($_tmp='_STEAMID')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
 &amp; <?php echo ((is_array($_tmp='_IP')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</option>
							</select>
						</td> 
					</tr> 
					<tr> 
						<td class="fat"><?php echo ((is_array($_tmp='_REASON')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td> 
						<td>
							<select name="ban_reason">
								<?php echo smarty_function_html_options(array('output' => $this->_tpl_vars['reasons'],'values' => $this->_tpl_vars['reasons']), $this);?>

							</select> 
							<?php echo ((is_array($_tmp='_OR')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
 <?php echo ((is_array($_tmp='_NEWREASON')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
: <input type="text" size="30" name="user_reason" onkeyup="document.frm.ban_reason.disabled=(this.value!='');" />
						</td> 
					</tr> 
					<tr> 
						<td class="fat"><?php echo ((is_array($_tmp='_BANLENGHT')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td> 
						<td>
							<input type="text" size="8" name="ban_length" disabled="disabled" /> <?php echo ((is_array($_tmp='_MIN_OR')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
 <input type="checkbox" name="perm" checked="checked" onclick="document.frm.ban_length.disabled=this.checked;" /> <?php echo ((is_array($_tmp='_PERMANENT')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>

						</td> 
					</tr> 
				</tbody> 
			</table> 
			<div class="clearer">&nbsp;</div>
		</div>
	<?php endif; ?>
	
		<div class="post">
			<table frame="box" rules="groups" summary="">
				<thead> 
					<tr> 
						<th style="width:5px;"><?php echo ((is_array($_tmp='_NUMBER')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</th>
						<th><?php echo ((is_array($_tmp='_NAME')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</th> 
						<th style="width:150px;"><?php echo ((is_array($_tmp='_STEAMID')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</th> 
						<th style="width:150px;"><?php echo ((is_array($_tmp='_IP')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</th>
						<th style="width:50px;"><?php echo ((is_array($_tmp='_USERID')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</th>
						<th style="width:50px;"><?php echo ((is_array($_tmp='_STATUSNAME')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</th>
						<th style="width:50px;">&nbsp;</th> 
						<th style="width:50px;">&nbsp;</th> 
					</tr> 
				</thead>
				<tbody> 
					<!-- Users Online -->
					<?php if ($this->_tpl_vars['playerscount']): ?>
						<?php $_from = $this->_tpl_vars['players']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['players']):
?>
							<tr <?php if ($this->_supers['session']['bans_add'] != 'yes' || $this->_tpl_vars['players']['status'] == 1 || $this->_tpl_vars['players']['immunity'] != 0): ?>class="offline"<?php endif; ?>> 
								<td class="_center"><?php echo smarty_function_counter(array(), $this);?>
.</td> 
								<td><?php echo $this->_tpl_vars['players']['name']; ?>
</td> 
								<td><?php echo $this->_tpl_vars['players']['steamid']; ?>
</td> 
								<td><?php echo $this->_tpl_vars['players']['ip']; ?>
</td> 
								<td class="_center">#<?php echo $this->_tpl_vars['players']['userid']; ?>
</td> 
								<td class="_center"><?php echo ((is_array($_tmp=$this->_tpl_vars['players']['statusname'])) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td> 
								<td class="_center">
									<input type="submit" class="button" name="ban" onclick="LiveBanCopyVars('<?php echo $this->_tpl_vars['players']['name']; ?>
','<?php echo $this->_tpl_vars['players']['steamid']; ?>
','<?php echo $this->_tpl_vars['players']['ip']; ?>
','<?php echo $this->_tpl_vars['players']['userid']; ?>
');
									return confirm('<?php echo ((is_array($_tmp='_BANPLAYER')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
');"
									value="<?php echo ((is_array($_tmp='_BAN')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
" <?php if ($this->_supers['session']['bans_add'] != 'yes' || $this->_tpl_vars['players']['status'] == 1 || $this->_tpl_vars['players']['immunity'] != 0): ?>disabled="disabled"<?php endif; ?> />
								</td> 
								<td class="_center">
									<input type="submit" class="button" name="kick" onclick="LiveBanCopyVars('<?php echo $this->_tpl_vars['players']['name']; ?>
','<?php echo $this->_tpl_vars['players']['steamid']; ?>
','<?php echo $this->_tpl_vars['players']['ip']; ?>
','<?php echo $this->_tpl_vars['players']['userid']; ?>
');
									return confirm('<?php echo ((is_array($_tmp='_KICKPLAYER')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
');"
									value="<?php echo ((is_array($_tmp='_KICK')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
" <?php if ($this->_tpl_vars['players']['immunity'] != 0): ?>disabled="disabled"<?php endif; ?> />
								</td> 
							</tr>
						<?php endforeach; endif; unset($_from); ?>
					<?php else: ?>
						<tr> 
							<td class="error _center" colspan="8"><?php if ($this->_tpl_vars['smsg'] != ""): ?><b class="error"><?php echo ((is_array($_tmp=$this->_tpl_vars['smsg'])) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
<?php else: ?><b><?php echo ((is_array($_tmp='_NOPLAYERS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
<?php endif; ?></td> 
						</tr>
					<?php endif; ?>
					<!-- Users Online -->
				</tbody> 
			</table> 
			<div class="clearer">&nbsp;</div>
		</div>
	
		<input type="hidden" name="server" value="0" /> 
		<input type="hidden" name="player_name" id="player_name" value="" /> 
		<input type="hidden" name="player_uid" id="player_uid" value="" /> 
		<input type="hidden" name="player_steamid" id="player_steamid" value="" /> 
		<input type="hidden" name="player_ip" id="player_ip" value="" /> 
		
	</form>
	<div class="clearer">&nbsp;</div>
</div>