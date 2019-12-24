<?php /* Smarty version 2.6.25, created on 2019-12-25 00:25:17
         compiled from ban_list.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'lang', 'ban_list.tpl', 13, false),array('modifier', 'date_format', 'ban_list.tpl', 127, false),array('modifier', 'date2word', 'ban_list.tpl', 136, false),)), $this); ?>
<div class="main">



	<div class="post">



<!-- Pagenation -->

    <div class="pager" style="text-align:right">

        <span class="first"><?php echo ((is_array($_tmp='_SITE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
 <?php echo $this->_tpl_vars['ban_page']['current']; ?>
 <?php echo ((is_array($_tmp='_OF')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
 <?php echo $this->_tpl_vars['ban_page']['max_page']; ?>
:</span>

        <?php if ($this->_tpl_vars['pagenav']['first']): ?>

            <a href="?site=<?php echo $this->_tpl_vars['pagenav']['first']; ?>
"><img src="images/page_start.png" title="<?php echo ((is_array($_tmp='_FIRST_PAGE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
" alt="<?php echo ((is_array($_tmp='_FIRST_PAGE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
"></a>

        <?php endif; ?>

        <?php if ($this->_tpl_vars['pagenav']['prev']): ?>

            <a href="?site=<?php echo $this->_tpl_vars['pagenav']['prev']; ?>
"><img src="images/page_back.png" title="<?php echo ((is_array($_tmp='_PREVIOUS_PAGE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
" alt="<?php echo ((is_array($_tmp='_PREVIOUS_PAGE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
"></a>

        <?php endif; ?>

        <?php $_from = $this->_tpl_vars['pagenav']['pages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['page']):
?>

            <?php if ($this->_tpl_vars['page']['current']): ?>

                <span><?php echo $this->_tpl_vars['page']['number']; ?>
</span>

            <?php else: ?>

                <a href="?site=<?php echo $this->_tpl_vars['page']['number']; ?>
"><?php echo $this->_tpl_vars['page']['number']; ?>
</a>

            <?php endif; ?>

        <?php endforeach; endif; unset($_from); ?>

        <?php if ($this->_tpl_vars['pagenav']['next']): ?>

            <a href="?site=<?php echo $this->_tpl_vars['pagenav']['next']; ?>
"><img src="images/page_next.png" title="<?php echo ((is_array($_tmp='_NEXT_PAGE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
" alt="<?php echo ((is_array($_tmp='_NEXT_PAGE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
"></a>

        <?php endif; ?>

        <?php if ($this->_tpl_vars['pagenav']['last']): ?>

            <a href="?site=<?php echo $this->_tpl_vars['pagenav']['last']; ?>
"><img src="images/page_end.png" title="<?php echo ((is_array($_tmp='_LAST_PAGE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
" alt="<?php echo ((is_array($_tmp='_LAST_PAGE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
"></a>

        <?php endif; ?>

    </div>

    <br /><br />

<!-- Pagenation --> 



		<table frame="box" rules="groups" summary="">



			<thead>

				<tr>

					<th style="width:20px;"></th>

					<th><?php echo ((is_array($_tmp='_DATE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</th>

					<th><?php echo ((is_array($_tmp='_PLAYER')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</th>

					<th><?php echo ((is_array($_tmp='_ADMIN')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</th>

					<th><?php echo ((is_array($_tmp='_REASON')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</th>

					<th><?php echo ((is_array($_tmp='_LENGHT')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</th>

					<?php if ($this->_tpl_vars['ban_page']['show_comments'] == 1 && $this->_tpl_vars['vars']['use_comment'] == 1): ?><th style="width: 30px;"><?php echo ((is_array($_tmp='_BL_COMMENTS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</th><?php endif; ?>

					<?php if ($this->_tpl_vars['ban_page']['show_demos'] == 1 && $this->_tpl_vars['vars']['use_demo'] == 1): ?><th style="width: 30px;"><?php echo ((is_array($_tmp='_BL_FILES')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</th><?php endif; ?>

					<?php if ($this->_tpl_vars['ban_page']['show_kicks'] == 1): ?><th style="width: 30px;"><?php echo ((is_array($_tmp='_BL_KICKS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</th><?php endif; ?>

				</tr>

			</thead>



			<tbody>

				<!-- No Bans -->

				<?php if ($this->_tpl_vars['error']): ?>

					<tr>

						<td class="_center" colspan="9"><?php echo ((is_array($_tmp='_NO_BANS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>

					</tr>

				<?php else: ?>

				<!-- No Bans -->



				<!-- Banlist -->

					<?php $_from = $this->_tpl_vars['ban_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ban_list']):
?>

						<?php if ($this->_tpl_vars['ban_list']['ban_length'] > 0 && $this->_tpl_vars['ban_list']['ban_end'] < time()): ?>

							<tr onclick="NewToggleLayer('layer_<?php echo $this->_tpl_vars['ban_list']['bid']; ?>
')" style="background: #DBF4D7" class='list'>

						<?php else: ?>

							<tr onclick="NewToggleLayer('layer_<?php echo $this->_tpl_vars['ban_list']['bid']; ?>
')" class="list">

						<?php endif; ?>

						<td class="_center"><img alt="<?php if ($this->_tpl_vars['ban_list']['mod'] == 'html'): ?><?php echo ((is_array($_tmp='_WEB')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['ban_list']['mod'])) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
<?php endif; ?>" title="<?php if ($this->_tpl_vars['ban_list']['mod'] == 'html'): ?><?php echo ((is_array($_tmp='_WEB')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['ban_list']['mod'])) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
<?php endif; ?>" src="templates/<?php echo $this->_tpl_vars['design']; ?>
_gfx/games/<?php echo $this->_tpl_vars['ban_list']['mod']; ?>
.gif" /></td>

						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['ban_list']['ban_created'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
</td>

						<td> <?php echo $this->_tpl_vars['ban_list']['player_nick']; ?>
</td>

						<td><?php echo $this->_tpl_vars['ban_list']['admin_nick']; ?>
</td>

						<td><?php echo $this->_tpl_vars['ban_list']['ban_reason']; ?>
</td>

						<td><?php if ($this->_tpl_vars['ban_list']['ban_length'] > 0): ?>
								<?php echo ((is_array($_tmp=$this->_tpl_vars['ban_list']['ban_length']*60)) ? $this->_run_mod_handler('date2word', true, $_tmp, true) : smarty_modifier_date2word($_tmp, true)); ?>

							<?php else: ?>
								<?php echo ((is_array($_tmp='_PERMANENT')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>

							<?php endif; ?>
						</td>

						<?php if ($this->_tpl_vars['ban_page']['show_comments'] == 1 && $this->_tpl_vars['vars']['use_comment'] == 1): ?><td class="_center"><?php echo $this->_tpl_vars['ban_list']['comment_count']; ?>
</td><?php endif; ?>

						<?php if ($this->_tpl_vars['ban_page']['show_demos'] == 1 && $this->_tpl_vars['vars']['use_demo'] == 1): ?><td class="_center"><?php echo $this->_tpl_vars['ban_list']['demo_count']; ?>
</td><?php endif; ?>

						<?php if ($this->_tpl_vars['ban_page']['show_kicks'] == 1): ?><td class="_center"><?php echo $this->_tpl_vars['ban_list']['kick_count']; ?>
</td><?php endif; ?>

					</tr>



					<tr id="layer_<?php echo $this->_tpl_vars['ban_list']['bid']; ?>
" style="display:none;">



						<td class="server-info" colspan="9"><div style="display:none;">

							<table frame="box" rules="groups" summary="">

								<thead>

									<tr>

										<th style="width:150px;"><?php echo ((is_array($_tmp='_BANDETAILS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</th>



										<th class="_right">

											<form method="post" action="" style="display:inline;">

												<input type="hidden" name="bid" value="<?php echo $this->_tpl_vars['ban_list']['bid']; ?>
" />

												<input type="hidden" name="site" value="<?php echo $this->_tpl_vars['ban_page']['current']; ?>
" />

												<input class="img_input" name="details" type="image" src="templates/<?php echo $this->_tpl_vars['design']; ?>
_gfx/page.png" title="<?php echo ((is_array($_tmp='_DETAILS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
"/>

											</form>
											<?php if ($this->_supers['session']['bans_delete'] == 'yes' || ( $this->_supers['session']['bans_delete'] == 'own' && $this->_supers['session']['uname'] == $this->_tpl_vars['ban_detail']['username'] )): ?>

											<form method="post" action="" style="display:inline;">

												<input class="img_input" name="del_ban" type="image" src="templates/<?php echo $this->_tpl_vars['design']; ?>
_gfx/page_delete.png" onclick="return confirm('<?php echo ((is_array($_tmp='_DELBAN')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
<?php echo ((is_array($_tmp='_DATALOSS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
');" border="0" title="<?php echo ((is_array($_tmp='_TIP_DEL')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
" />

												<input type="hidden" name="site" value="<?php echo $this->_tpl_vars['site']; ?>
" />

												<input type="hidden" name="bid" value="<?php echo $this->_tpl_vars['ban_list']['bid']; ?>
" />

												<input type="hidden" name="details_x" value="1" />

											</form>
											<?php endif; ?>

										</th>



									</tr>

								</thead>

								<tbody>

									<tr>

										<td class="fat"><?php echo ((is_array($_tmp='_NICKNAME')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>

										<td><?php echo $this->_tpl_vars['ban_list']['player_nick']; ?>
</td>

									</tr>

									<tr>

										<td class="fat"><?php echo ((is_array($_tmp='_STEAMID')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>

										<td><?php if ($this->_tpl_vars['ban_list']['player_id'] <> ""): ?><?php echo $this->_tpl_vars['ban_list']['player_id']; ?>
<?php else: ?><span style='font-style:italic;font-weight:bold;'><?php echo ((is_array($_tmp='_NOSTEAMID')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</span><?php endif; ?></td>

									</tr>

									<tr>

										<td class="fat"><?php echo ((is_array($_tmp='_STEAMCOMID')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>

										<td>

											<?php if ($this->_tpl_vars['ban_list']['player_id'] <> ""): ?>

												<a target="_blank" href="http://steamcommunity.com/profiles/<?php echo $this->_tpl_vars['ban_list']['player_comid']; ?>
"><?php echo $this->_tpl_vars['ban_list']['player_comid']; ?>
</a>

											<?php else: ?>

												<?php echo ((is_array($_tmp='_NOTAVAILABLE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>


											<?php endif; ?>

										</td>

									</tr>

									<tr>

										<td class="fat"><?php echo ((is_array($_tmp='_IP')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>

										<td>

											<?php if ($this->_supers['session']['ip_view'] == 'yes'): ?>

												<?php if ($this->_tpl_vars['ban_list']['player_ip']): ?>

													<?php echo $this->_tpl_vars['ban_list']['player_ip']; ?>


												<?php else: ?>

													<i><?php echo ((is_array($_tmp='_NOTAVAILABLE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</i>

												<?php endif; ?>

											<?php else: ?>

												<span style='font-style:italic;font-weight:bold'><?php echo ((is_array($_tmp='_HIDDEN')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</span>

											<?php endif; ?>

										</td>

									</tr>

									<tr>

										<td class="fat"><?php echo ((is_array($_tmp='_BANTYPE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>

										<td>

											<?php if ($this->_tpl_vars['ban_list']['ban_type'] == 'S'): ?>

												<?php echo ((is_array($_tmp='_STEAMID')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>


											<?php elseif ($this->_tpl_vars['ban_list']['ban_type'] == 'SI'): ?>

												<?php echo ((is_array($_tmp="_STEAMID&IP")) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>


											<?php else: ?>

												<?php echo ((is_array($_tmp='_NOTAVAILABLE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>


											<?php endif; ?>

										</td>

									</tr>

									<tr>

										<td class="fat"><?php echo ((is_array($_tmp='_REASON')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>

										<td><?php echo $this->_tpl_vars['ban_list']['ban_reason']; ?>
</td>

									</tr>

									<tr>

										<td class="fat"><?php echo ((is_array($_tmp='_INVOKED')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>

										<td><?php echo ((is_array($_tmp=$this->_tpl_vars['ban_list']['ban_created'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d %b %Y - %T") : smarty_modifier_date_format($_tmp, "%d %b %Y - %T")); ?>
</td>

									</tr>

									<tr>

										<td class="fat"><?php echo ((is_array($_tmp='_EXPIRES')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>

										<td>

											<?php if ($this->_tpl_vars['ban_list']['ban_length'] == 0): ?>

												<span style='font-style:italic;font-weight:bold;color:red'><?php echo ((is_array($_tmp='_NOTAPPLICABLE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</span>

											<?php else: ?>

												<?php echo ((is_array($_tmp=$this->_tpl_vars['ban_list']['ban_end'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d %b %Y - %T") : smarty_modifier_date_format($_tmp, "%d %b %Y - %T")); ?>


												<?php if ($this->_tpl_vars['ban_list']['ban_end'] < time()): ?>

													(<?php echo ((is_array($_tmp='_ALREADYEXP')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
)

												<?php else: ?>

													<i>(<?php echo ((is_array($_tmp=$this->_tpl_vars['ban_list']['ban_end']-time())) ? $this->_run_mod_handler('date2word', true, $_tmp) : smarty_modifier_date2word($_tmp)); ?>
 <?php echo ((is_array($_tmp='_REMAINING')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
)</i>

												<?php endif; ?>

											<?php endif; ?>

										</td>

									</tr>

									<tr>

										<td class="fat"><?php echo ((is_array($_tmp='_BANBY')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>

										<td><?php echo $this->_tpl_vars['ban_list']['admin_nick']; ?>
<?php if ($this->_tpl_vars['ban_list']['nickname']): ?><i>(<?php echo $this->_tpl_vars['ban_list']['nickname']; ?>
)</i><?php endif; ?></td>

									</tr>

									<tr>

										<td class="fat"><?php echo ((is_array($_tmp='_BANON')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>

										<td><?php if ($this->_tpl_vars['ban_list']['server_name'] == 'website'): ?><?php echo ((is_array($_tmp='_WEB')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
<?php else: ?><?php echo $this->_tpl_vars['ban_list']['server_name']; ?>
<?php endif; ?></td>

									</tr>

									<tr>

										<td class="fat"><?php echo ((is_array($_tmp='_TOTALEXPBANS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>

										<td><?php echo $this->_tpl_vars['ban_list']['bancount']-1; ?>
</td>

									</tr>

								</tbody>

							</table> </div>

						</td>

					</tr>

					<?php endforeach; endif; unset($_from); ?>

				<?php endif; ?>

				<!-- Banlist -->

			</tbody>

		</table>



		<div class="clearer">&nbsp;</div>



	</div>

	<div class="clearer">&nbsp;</div>

<!-- Pagenation -->

    <div class="pager" style="text-align:right">

        <span class="first"><?php echo ((is_array($_tmp='_SITE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
 <?php echo $this->_tpl_vars['ban_page']['current']; ?>
 <?php echo ((is_array($_tmp='_OF')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
 <?php echo $this->_tpl_vars['ban_page']['max_page']; ?>
:</span>

        <?php if ($this->_tpl_vars['pagenav']['first']): ?>

            <a href="?site=<?php echo $this->_tpl_vars['pagenav']['first']; ?>
"><img src="images/page_start.png" title="<?php echo ((is_array($_tmp='_FIRST_PAGE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
" alt="<?php echo ((is_array($_tmp='_FIRST_PAGE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
"></a>

        <?php endif; ?>

        <?php if ($this->_tpl_vars['pagenav']['prev']): ?>

            <a href="?site=<?php echo $this->_tpl_vars['pagenav']['prev']; ?>
"><img src="images/page_back.png" title="<?php echo ((is_array($_tmp='_PREVIOUS_PAGE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
" alt="<?php echo ((is_array($_tmp='_PREVIOUS_PAGE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
"></a>

        <?php endif; ?>

        <?php $_from = $this->_tpl_vars['pagenav']['pages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['page']):
?>

            <?php if ($this->_tpl_vars['page']['current']): ?>

                <span><?php echo $this->_tpl_vars['page']['number']; ?>
</span>

            <?php else: ?>

                <a href="?site=<?php echo $this->_tpl_vars['page']['number']; ?>
"><?php echo $this->_tpl_vars['page']['number']; ?>
</a>

            <?php endif; ?>

        <?php endforeach; endif; unset($_from); ?>

        <?php if ($this->_tpl_vars['pagenav']['next']): ?>

            <a href="?site=<?php echo $this->_tpl_vars['pagenav']['next']; ?>
"><img src="images/page_next.png" title="<?php echo ((is_array($_tmp='_NEXT_PAGE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
" alt="<?php echo ((is_array($_tmp='_NEXT_PAGE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
"></a>

        <?php endif; ?>

        <?php if ($this->_tpl_vars['pagenav']['last']): ?>

            <a href="?site=<?php echo $this->_tpl_vars['pagenav']['last']; ?>
"><img src="images/page_end.png" title="<?php echo ((is_array($_tmp='_LAST_PAGE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
" alt="<?php echo ((is_array($_tmp='_LAST_PAGE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
"></a>

        <?php endif; ?>

    </div>

    <div class="clearer"></div>

<!-- Pagenation -->  

</div>