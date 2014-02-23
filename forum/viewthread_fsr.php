<?php echo 'We hate copycat.';exit;?>
<!--{if $_G['setting']['allowfastreply'] && $post['first'] && $fastpost && $allowpostreply && !$_G['forum_thread']['archiveid'] && $_GET['from'] != 'preview'}-->
<div id="fstrply" class="style">
	<div class="controller">
		<div class="user-avatar z">
			<!--{avatar($_G[uid],small)}-->
		</div>
		<div class="user-reply y">
			<form method="post" autocomplete="off" id="vfastpostform" action="forum.php?mod=post&action=reply&fid=$_G[fid]&tid=$_G[tid]&fromvf=1&extra=$_G[gp_extra]&replysubmit=yes{if $_G['gp_ordertype'] != 1}&infloat=yes&handlekey=vfastpost{/if}{if $_G[gp_from]}&from=$_G[gp_from]{/if}" onsubmit="this.message.value = parseurl(this.message.value);ajaxpost('vfastpostform', 'return_reply', 'return_reply', 'onerror');return false;">
				<div id="vfastpost" class="fullvfastpost">				
					<input type="hidden" name="formhash" value="{FORMHASH}" />
					<table cellspacing="0" cellpadding="0" id="vfastposttb">
						<tr>
							<td id="vf_m"><input type="text" name="message" id="vmessage" onKeyDown="seditor_ctlent(event, '$(\'vfastpostform\').submit()');"/></td>								
						</tr>
					</table>				
				</div>
				<div id="vfastpostseccheck"></div>				
			</form>
		<script type="text/javascript">vmessage();</script>
		</div>
	</div>
</div>
<!--{/if}-->