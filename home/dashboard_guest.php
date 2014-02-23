<?php echo 'We hate copycat.';exit;?>
<div id="dashboard_control">
	<div id="dashboard">
		<a class="mybtn mybtns icon m-click glyphicon glyphicon-log-in" href="member.php?mod=logging&action=login" onclick="showWindow('login', this.href)">{lang login}</a>
		<a class="mybtn mybtns icon m-click glyphicon glyphicon-user" href="member.php?mod={$_G[setting][regname]}">$_G['setting']['reglinkname']</a>
		<a href="javascript:;" id="navs" class="mybtn mybtns icon m-click glyphicon glyphicon-home showmenu" onmouseover="showMenu(this.id);">{lang return_homepage}</a>
	</div>
</div>