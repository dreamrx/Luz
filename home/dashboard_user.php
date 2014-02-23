<?php echo 'We hate copycat.';exit;?>
<div id="dashboard_control">
	<div id="dashboard">
		<!--{if $space[self]}-->
			<!--{if $space['self'] && $do == 'index'}-->
			<a class="mybtn mybtns icon m-click glyphicon glyphicon-wrench" href="javascript:openDiy();" title="{lang dress_space}">{lang dress_space}</a>
			<!--{/if}-->
		<!--{else}-->
			<a class="mybtn mybtns mybtn-padding icon m-click glyphicon glyphicon-send" href="home.php?mod=spacecp&ac=pm&op=showmsg&handlekey=showmsg_$space[uid]&touid=$space[uid]&pmid=0&daterange=2" id="a_sendpm_$space[uid]" onclick="showWindow('showMsgBox', this.href, 'get', 0)"></a>
		<!--{/if}-->
		<a href="home.php?mod=space&do=home" id="navs" class="mybtn mybtns icon m-click glyphicon glyphicon-home showmenu" onmouseover="showMenu(this.id);">{lang return_homepage}</a>
	</div>
</div>