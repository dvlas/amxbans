<?php /* Smarty version 2.6.25, created on 2019-12-25 01:05:51
         compiled from layer_comadd.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'lang', 'layer_comadd.tpl', 15, false),)), $this); ?>
<td colspan=10>
	<table width="90%" class="table_details">
		<tr>
			<td colspan="2">
				<table width="100%" class="table_details" border="1">
					<form method="post">
						<input type="hidden" name="bid" value="<?php echo $this->_tpl_vars['ban_detail']['bid']; ?>
" />
						<input type="hidden" name="site" value="<?php echo $this->_tpl_vars['site']; ?>
" />
						<input type="hidden" name="details_x" value="1" />
						<div id="add_comment" class="post">
							<form method="post">
								<table frame="box" rules="groups" summary=""> 
									<thead> 
										<tr> 
											<th colspan="2"><?php echo ((is_array($_tmp='_NEWCOMMENT')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</th> 
										</tr>
									</thead> 
									<tfoot> 
										<tr> 
											<th colspan="2" class="_center"><input class="button" type="submit" name="add_comment" value="<?php echo ((is_array($_tmp='_ADD')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
" /></th> 
										</tr>
									</tfoot> 
									<tbody> 
										<tr> 
											<td class="vtop fat" style="width: 150px;"><?php echo ((is_array($_tmp='_NAME')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td> 
											<td class="vtop">
												<input type="text" size="30" name="name" value="<?php if ($this->_supers['session']['loggedin'] == 'true'): ?><?php echo $this->_supers['session']['uname']; ?>
" disabled<?php else: ?>"<?php endif; ?>/>
												<?php if ($this->_supers['session']['loggedin'] == 'true'): ?><input type="hidden" name="name" value="<?php echo $this->_supers['session']['uname']; ?>
" /><?php endif; ?>
											</td>
										</tr>
										<tr> 
											<td class="vtop fat"><?php echo ((is_array($_tmp='_EMAIL')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td> 
											<td class="vtop">
												<input type="text" size="30" name="email" value="<?php if ($this->_supers['session']['loggedin'] == 'true' && $this->_supers['session']['email'] != ""): ?><?php echo $this->_supers['session']['email']; ?>
" disabled<?php else: ?>"<?php endif; ?>/>
												<?php if ($this->_supers['session']['loggedin'] == 'true' && $this->_supers['session']['email'] != ""): ?><input type="hidden" name="email" value="<?php echo $this->_supers['session']['email']; ?>
" /><?php endif; ?> 
											</td>
										</tr>
										<tr>
											<td class="vtop fat"><?php echo ((is_array($_tmp='_COMMENT')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
:</td>
											<td>
												<?php $_from = $this->_tpl_vars['bbcodes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['bbcodes']):
?>
													<a href="javascript:insertAtCaret('commentc', '<?php echo $this->_tpl_vars['bbcodes']['0']; ?>
 <?php echo $this->_tpl_vars['bbcodes']['1']; ?>
');"><img border="0" src="images/icons/bbcode/<?php echo $this->_tpl_vars['bbcodes']['2']; ?>
" title="<?php echo $this->_tpl_vars['bbcodes']['3']; ?>
" /></a>
												<?php endforeach; endif; unset($_from); ?>
												<br />
													<textarea name="comment" id="commentc" cols="50" rows="3" wrap="soft"></textarea>
												<br />
												<?php $_from = $this->_tpl_vars['smilies']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['smilies']):
?>
													<a href="javascript:insertAtCaret('commentc', ' <?php echo $this->_tpl_vars['smilies']['0']; ?>
 ');"><img border="0" src="images/icons/<?php echo $this->_tpl_vars['smilies']['1']; ?>
" title="<?php echo $this->_tpl_vars['smilies']['2']; ?>
" /></a>
												<?php endforeach; endif; unset($_from); ?>
											</td>
										</tr>
										<?php if ($this->_supers['session']['loggedin'] != true): ?>
										<tr> 
											<td class="vtop fat"><?php echo ((is_array($_tmp='_SCODE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td> 
											<td><?php echo ((is_array($_tmp='_SCODEENTER')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
<br />
												<img src="include/captcha.php" alt="Security code" style="border: 1px #000000 solid;"><br />
												<input type='text' size="30" name='verify' id="verify_code">
											</td> 
										</tr>
										<?php endif; ?>
									</tbody> 
								</table> 
							</form>
						</div>
					</form>
				</table>
			</td></tr>
		</table>
</td>