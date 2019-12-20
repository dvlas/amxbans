<?php /* Smarty version 2.6.25, created on 2019-12-21 01:49:37
         compiled from admin_list.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'lang', 'admin_list.tpl', 7, false),array('modifier', 'date_format', 'admin_list.tpl', 22, false),)), $this); ?>
<div class="main">
	<div class="post">
		<table frame="box" rules="groups" summary=""> 
			<thead> 
				<tr>
					<th style="width:18px;">&nbsp;</th>
					<th><?php echo ((is_array($_tmp='_NICKNAME')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</th> 
					<th style="width:150px;"><?php echo ((is_array($_tmp='_STEAMID')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</th>
					<th style="width:150px;"><?php echo ((is_array($_tmp='_ACCESS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</th>
					<th style="width:150px;"><?php echo ((is_array($_tmp='_ADMINSINCE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</th>
					<th style="width:150px;"><?php echo ((is_array($_tmp='_ADMINTO')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</th>
				</tr> 
			</thead> 
			<tbody> 
				<!-- Start Loop -->
				<?php $_from = $this->_tpl_vars['admins']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['admins']):
?>
					<tr class="list"> 
						<td><a href="http://steamcommunity.com/profiles/<?php echo $this->_tpl_vars['admins']['comid']; ?>
" target="_blank"><img src="templates/<?php echo $this->_tpl_vars['design']; ?>
_gfx/Steam.png" alt="<?php echo ((is_array($_tmp='_OPENSTEAMCOMSITE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
"/></a>&nbsp;</td>
						<td><?php echo $this->_tpl_vars['admins']['nickname']; ?>
</td> 
						<td><?php echo $this->_tpl_vars['admins']['steamid']; ?>
</td> 
						<td><?php echo $this->_tpl_vars['admins']['access']; ?>
</td> 
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['admins']['created'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d. %b %Y - %T") : smarty_modifier_date_format($_tmp, "%d. %b %Y - %T")); ?>
</td> 
						<td><em>
							<?php if ($this->_tpl_vars['admins']['expired'] == '0'): ?>
								<i><?php echo ((is_array($_tmp='_UNLIMITED')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</i>
							<?php else: ?>
								<?php echo ((is_array($_tmp=$this->_tpl_vars['admins']['expired'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d. %b %Y - %T") : smarty_modifier_date_format($_tmp, "%d. %b %Y - %T")); ?>

							<?php endif; ?>
						</em></td> 
					</tr> 
				<?php endforeach; endif; unset($_from); ?>
				<!-- Stop Loop -->
			</tbody> 
		</table> 
	</div>

	<div class="post _center">
		<form method="post" action="">
			<input type="button" class="button" name="showflags" value="<?php echo ((is_array($_tmp='_INFO_ACCESS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
" onclick="$('#info_access').slideToggle('slow');"/><br/><br/>
		</form>
		<!--<a href="javascript:void(0);" class="button" onclick="ToggleLayer('info_access');"><?php echo ((is_array($_tmp='_INFO_ACCESS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</a>-->
	</div>

	<div id="info_access" class="post" style="display:none;">
		<table frame="box" rules="groups"> 
			<thead> 
				<tr> 
					<th><?php echo ((is_array($_tmp='_ACCESSPERMS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</th> 
					<th style="width:350px;"><?php echo ((is_array($_tmp='_ACCESSFLAGS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</th>
				</tr> 
			</thead> 
			<tbody> 
				<tr> 
					<td>
						<?php echo ((is_array($_tmp='_ACCESS_FLAGS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>

					</td> 
					<td class="vtop">
						<?php echo ((is_array($_tmp='_FLAG_FLAGS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>

					</td> 
				</tr>
			</tbody> 
		</table> 
	</div>
	<div class="clearer">&nbsp;</div>
</div>