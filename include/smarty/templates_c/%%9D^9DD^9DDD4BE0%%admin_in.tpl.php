<?php /* Smarty version 2.6.25, created on 2019-12-25 00:05:56
         compiled from admin_in.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'lang', 'admin_in.tpl', 7, false),)), $this); ?>
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

<div class="main" id="main-two-columns">

	<div class="left" id="main-left">

		<table frame="box" rules="groups" summary=""> 

			<thead> 

				<tr>

					<th colspan="2"><?php echo ((is_array($_tmp='_SERVERSETUP')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</th> 

				</tr> 

			</thead> 

			<tbody> 

				<tr class="settings_line">

					<td class="fat" style="width:200px;">AMXBans <?php echo ((is_array($_tmp='_WEB_VERSION')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td> 

					<td><?php echo $this->_tpl_vars['php_settings']['version_amxbans_web']; ?>
</td>

				</tr>

				<tr class="settings_line">

					<td class="fat" style="width:200px;"><?php echo ((is_array($_tmp='_WEBSERVER')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td> 

					<td><?php echo $this->_tpl_vars['php_settings']['server_software']; ?>
</td>

				</tr>

				<tr class="settings_line">

					<td class="fat" style="width:200px;">PHP <?php echo ((is_array($_tmp='_VERSION')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td> 

					<td><?php echo $this->_tpl_vars['php_settings']['version_php']; ?>
</td>

				</tr>

				<tr class="settings_line">

					<td class="fat" style="width:200px;">MySQL <?php echo ((is_array($_tmp='_VERSION')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td> 

					<td><?php echo $this->_tpl_vars['php_settings']['mysql_version']; ?>
 <img alt="" src="templates/<?php echo $this->_tpl_vars['design']; ?>
_gfx/generic/<?php if ($this->_tpl_vars['php_settings']['mysql_version'] >= 4.1): ?>accept<?php else: ?>exclamation<?php endif; ?>.png" /></td>

				</tr>

				<tr class="settings_line">

					<td class="fat" style="width:200px;">safe_mode</td> 

					<td><?php echo ((is_array($_tmp=$this->_tpl_vars['php_settings']['safe_mode'])) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
 <img alt="" src="templates/<?php echo $this->_tpl_vars['design']; ?>
_gfx/generic/accept.png" /></td>

				</tr>

				<tr class="settings_line">

					<td class="fat" style="width:200px;">register_globals</td> 

					<td><?php echo ((is_array($_tmp=$this->_tpl_vars['php_settings']['register_globals'])) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
 <img src="templates/<?php echo $this->_tpl_vars['design']; ?>
_gfx/generic/<?php if ($this->_tpl_vars['php_settings']['register_globals'] == '_OFF'): ?>accept<?php else: ?>exclamation<?php endif; ?>.png" /></td>

				</tr>

				<tr class="settings_line">

					<td class="fat" style="width:200px;">magic_quotes_gpc</td> 

					<td><?php echo ((is_array($_tmp=$this->_tpl_vars['php_settings']['magic_quotes_gpc'])) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
 <img src="templates/<?php echo $this->_tpl_vars['design']; ?>
_gfx/generic/<?php if ($this->_tpl_vars['php_settings']['magic_quotes_gpc'] == '_OFF'): ?>accept<?php else: ?>exclamation<?php endif; ?>.png" /></td>

				</tr>

				<tr class="settings_line">

					<td class="fat" style="width:200px;">display_errors</td> 

					<td><?php echo $this->_tpl_vars['php_settings']['display_errors']; ?>
</td>

				</tr>

				<tr class="settings_line">

					<td class="fat" style="width:200px;">post_max_size</td> 

					<td><?php echo $this->_tpl_vars['php_settings']['post_max_size']; ?>
</td>

				</tr>

				<tr class="settings_line">

					<td class="fat" style="width:200px;">upload_max_filesize</td> 

					<td><?php echo $this->_tpl_vars['php_settings']['upload_max_filesize']; ?>
</td>

				</tr>

				<tr class="settings_line">

					<td class="fat" style="width:200px;">max_execution_time</td> 

					<td><?php echo $this->_tpl_vars['php_settings']['max_execution_time']; ?>
</td>

				</tr>

			</tbody> 

		</table>



		<div class="spacer">&nbsp;</div>



		<table frame="box" rules="groups" summary=""> 

			<thead> 

				<tr class="settings_line">

					<th colspan="3"><?php echo ((is_array($_tmp='_PHPMODULES')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</th> 

				</tr> 

			</thead> 

			<tbody> 

				<tr>

					<td class="fat" style="width:200px;">bcmath</td> 

					<td style="width:15px;"><?php echo ((is_array($_tmp=$this->_tpl_vars['php_settings']['bcmath'])) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>

					<td rowspan="2"><img alt="" src="templates/<?php echo $this->_tpl_vars['design']; ?>
_gfx/generic/<?php if ($this->_tpl_vars['php_settings']['gmp'] == '_YES' || $this->_tpl_vars['php_settings']['bcmath'] == '_YES'): ?>accept<?php else: ?>exclamation<?php endif; ?>.png"/></td>

				</tr>

				<tr>

					<td class="fat" style="width:200px;">gmp</td> 

					<td><?php echo ((is_array($_tmp=$this->_tpl_vars['php_settings']['gmp'])) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>

				</tr>

				<tr class="settings_line">

					<td class="fat" style="width:200px;">GD</td> 

					<td colspan="2"> <?php echo ((is_array($_tmp=$this->_tpl_vars['php_settings']['gd'])) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
<?php if ($this->_tpl_vars['php_settings']['version_gd']): ?> (<?php echo $this->_tpl_vars['php_settings']['version_gd']; ?>
)<?php endif; ?> <img alt="" src="templates/<?php echo $this->_tpl_vars['design']; ?>
_gfx/generic/accept.png"/></td>

				</tr>

			</tbody> 

		</table> 

		<div class="clearer">&nbsp;</div>

	</div>



	<div class="right sidebar" id="sidebar">

		<div class="section">

			<div class="section-title">

				<div class="left"><?php echo ((is_array($_tmp='_STATS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</div>

				<div class="right"><span title="<?php echo ((is_array($_tmp='_STATS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
" class="icons-stats icon-stats"></span></div>

				

				<div class="clearer">&nbsp;</div>



			</div>

			<div class="section-content">

				<ul class="nice-list">

					<li>

						<div class="left"><?php echo ((is_array($_tmp='_DBSIZE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</div>

						<div class="right"><?php if ($this->_tpl_vars['db_size'] == '_NOTAVAILABLE'): ?><?php echo ((is_array($_tmp='_NOTAVAILABLE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
<?php else: ?><?php echo $this->_tpl_vars['db_size']; ?>
<?php endif; ?></div>

						<div class="clearer">&nbsp;</div>

					</li>



					<li>

						<div class="left"><?php echo ((is_array($_tmp='_BANSINDB')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</div>

						<div class="right"><?php echo $this->_tpl_vars['bans']['count']; ?>
</div>

						<div class="clearer">&nbsp;</div>

					</li>



					<li>

						<div class="left"><?php echo ((is_array($_tmp='_ACTIVEBANS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</div>

						<div class="right"><?php echo $this->_tpl_vars['bans']['activ']; ?>
</div>

						<div class="clearer">&nbsp;</div>

					</li>

					

					<li>

						<div class="left"><?php echo ((is_array($_tmp='_COMMENTS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</div>

						<div class="right">

							<?php echo $this->_tpl_vars['comment_count']['count']; ?>


							<?php if ($this->_tpl_vars['comment_count']['fail'] != 0): ?> (<?php echo $this->_tpl_vars['comment_count']['fail']; ?>
 <?php echo ((is_array($_tmp='_ERROR')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
)

								<img src="templates/<?php echo $this->_tpl_vars['design']; ?>
_gfx/generic/exclamation.png" />

								&nbsp;<input type="submit" name="comment_repair" value="<?php echo ((is_array($_tmp='_REPAIR')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
" />

							<?php endif; ?></div>

						<div class="clearer">&nbsp;</div>

					</li>

					

					<li>

						<div class="left"><?php echo ((is_array($_tmp='_BL_FILES')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</div>

						<div class="right">

							<?php echo $this->_tpl_vars['file_count']['count']; ?>


							<?php if ($this->_tpl_vars['file_count']['fail'] != 0): ?> (<?php echo $this->_tpl_vars['file_count']['fail']; ?>
 <?php echo ((is_array($_tmp='_ERROR')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
)

								<img src="templates/<?php echo $this->_tpl_vars['design']; ?>
_gfx/generic/exclamation.png" />

								&nbsp;<input type="submit" name="file_repair" value="<?php echo ((is_array($_tmp='_REPAIR')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
" />

							<?php endif; ?>

						</div>

					</li>

				</ul>

			</div>

		</div>



		<div class="section">

			<div class="section-title">

				<?php echo ((is_array($_tmp='_OTHERFUNCTIONS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>


			</div>

			<div class="section-content">

				<form method="post">

					<ul class="nice-list">

						<li>

							<div class="left"><?php echo ((is_array($_tmp='_CLEARCACHE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</div>

							<div class="right">

								<!--<form method="post" style="display:inline;">-->

									<input type="submit" class="button" name="clear" value="<?php echo ((is_array($_tmp='_DELETE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
" <?php if ($this->_supers['session']['websettings_edit'] != 'yes'): ?>disabled<?php endif; ?>/>

									<!--<input type="submit" name="clear" value="<?php echo ((is_array($_tmp='_DELETE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
" <?php if ($this->_supers['session']['websettings_edit'] != 'yes'): ?>disabled<?php endif; ?>>-->

								<!--</form>-->

							</div>

							<div class="clearer">&nbsp;</div>

						</li>

	

						<li>

							<div class="left"><?php echo ((is_array($_tmp='_DBOPTIMIZE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</div>

							<div class="right">

								<!--<form method="post" style="display:inline;">-->

									<!--<input type="submit" name="optimize" value="<?php echo ((is_array($_tmp='_OPTIMIZE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
" <?php if ($this->_supers['session']['websettings_edit'] != 'yes'): ?>disabled<?php endif; ?>>-->

									<input type="submit" class="button" name="optimize" value="<?php echo ((is_array($_tmp='_OPTIMIZE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
" <?php if ($this->_supers['session']['websettings_edit'] != 'yes'): ?>disabled<?php endif; ?>/>

								<!--</form>-->

							</div>

							<div class="clearer">&nbsp;</div>

						</li>

						<li>

							<div class="left"><?php echo ((is_array($_tmp='_DBPRUNE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</div>

							<div class="right">

								<!--<form method="post" style="display:inline;">-->

									<!--<input type="submit" name="optimize" value="<?php echo ((is_array($_tmp='_PRUNE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
" <?php if ($this->_supers['session']['websettings_edit'] != 'yes'): ?>disabled<?php endif; ?>>-->

									<input type="submit" class="button" name="prunedb" value="<?php echo ((is_array($_tmp='_PRUNE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
" <?php if ($this->_supers['session']['websettings_edit'] != 'yes'): ?>disabled<?php endif; ?>/>

								<!--</form>-->

							</div>

							<div class="clearer">&nbsp;</div>

						</li>

						<?php if ($this->_tpl_vars['msg']): ?><li>

							<br /><div class="notice" style="text-align:center;">

								<?php echo ((is_array($_tmp=$this->_tpl_vars['msg'])) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>


							</div>

							<div class="clearer">&nbsp;</div>

						</li><?php endif; ?>

					</ul>

				</form>

			</div>

		</div>

	</div>

	<div class="clearer">&nbsp;</div>

</div>
