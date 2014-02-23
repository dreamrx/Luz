<?php echo 'We hate copycat.';exit;?>
<ul id="searchbox_menu" class="hfbt_pop scbm" style="display: none;">
<!--{subtemplate common/searchbox}-->
</ul>

<!--{if $_G['uid'] && !empty($_G['style']['extstyle'])}-->
<table cellpadding="0" cellspacing="0" id="dsss" class="animated bounceIn" style="display:none;"><tr><td class="t_l"></td><td class="t_c"></td><td class="t_r"></td></tr><tr><td class="m_l"></td><td class="m_c">
         <h3><span><a href="javascript:;" class="cords" id="cbtn"></a></span>其他佈景主題</h3>
		<!--{if !$_G[style][defaultextstyle]}--><span class="sslct_btn" onClick="extstyle('')" title="{lang default}"><i><em>{lang default}</em></i></span><!--{/if}-->
		<!--{loop $_G['style']['extstyle'] $extstyle}-->
			<span class="sslct_btn" onClick="extstyle('$extstyle[0]')" title="$extstyle[1]"><i style='background:url($extstyle[0]/preview.png) no-repeat 0px 0px'>
            <!--[if IE 6]><a href="#" onclick="history.go(0)"><![endif]--> 
            <em>$extstyle[1]</em>
            <!--[if IE 6]></a><![endif]--> 
            </i></span>
		<!--{/loop}-->
        
     
	</td><td class="m_r"></td></tr><tr><td class="b_l"></td><td class="b_c"></td><td class="b_r"></td></tr></table>
<!--{/if}-->

<ul id="ucp_menu" class="hfbt_pop" style="display: none;">
	<li><div class="title usr-select m-default">個人設定：</div></li>
	<li><a href="home.php?mod=spacecp">{lang setup}</a></li>
	<li><a href="home.php?mod=spacecp&ac=avatar">更換肖像</a>
	<li><!--{subtemplate common/switcher}--></li>
	<!--{if ($_G['group']['allowmanagearticle'] || $_G['group']['allowpostarticle'] || $_G['group']['allowdiy'] || getstatus($_G['member']['allowadmincp'], 4) || getstatus($_G['member']['allowadmincp'], 6) || getstatus($_G['member']['allowadmincp'], 2) || getstatus($_G['member']['allowadmincp'], 3))}-->
		<li class="md"></li>
		<li><div class="title usr-select m-default">管理團隊：</div></li>
		<li><a class="acp" href="portal.php?mod=portalcp"><!--{if $_G['setting']['portalstatus'] }-->{lang portal_manage}<!--{else}-->{lang portal_block_manage}<!--{/if}--></a></li>
	<!--{/if}-->
	<!--{if $_G['uid'] && $_G['group']['radminid'] > 1}-->
		<li><a class="acp" href="forum.php?mod=modcp&fid=$_G[fid]" target="_blank">{lang forum_manager}</a></li>
	<!--{/if}-->
	<!--{if $_G['uid'] && $_G['adminid'] == 1 && $_G['setting']['cloud_status']}-->
		<li><a class="acp" href="admin.php?frames=yes&action=cloud&operation=applist" target="_blank">{lang cloudcp}</a></li>
	<!--{/if}-->
	<!--{if $_G['uid'] && getstatus($_G['member']['allowadmincp'], 1)}-->
		<li><a class="acp" href="admin.php" target="_blank">{lang admincp}</a></li>
	<!--{/if}-->
	<li class="md"></li>
	<li><div class="title usr-select m-default">其他選項：</div></li>
	<li><a class="subitems" href="forum.php?mod=misc&amp;action=nav" onclick="showWindow('nav', this.href, 'get', 0)" initialized="true">網站地圖</a></li>
	<li><!--{if empty($_G['disabledwidthauto']) && $_G['setting']['switchwidthauto']}--><a href="javascript:;" id="switchwidth" onclick="widthauto(this)" title="{if widthauto()}{lang switch_narrow}{else}{lang switch_wide}{/if}" class="no-text-decoration"><!--{if widthauto()}-->{lang switch_narrow}<!--{else}-->{lang switch_wide}<!--{/if}--></a><!--{/if}--></li>
	<li><a href="member.php?mod=logging&action=logout&formhash={FORMHASH}">{lang logout}</a></li>
</ul>

<ul id="qmls_menu" class="hfbt_pop" style="display: none;">
	<li><div class="title usr-select m-default">{lang myitem}：</div></li>
	<li><a href="forum.php?mod=guide&view=my">{lang mypost}</a></li>
	<li><a href="home.php?mod=space&do=favorite&view=me">{lang favorite}</a></li>
	<li><a href="home.php?mod=space&do=friend">{lang friends}</a></li>
	<!--{hook/global_myitem_extra}-->
	<li class="md"></li>
	<li><div class="title usr-select m-default">{lang my_nav}：</div></li>
	<!--{loop $_G['setting']['mynavs'] $nav}-->
		<!--{if $nav['available'] && (!$nav['level'] || ($nav['level'] == 1 && $_G['uid']) || ($nav['level'] == 2 && $_G['adminid'] > 0) || ($nav['level'] == 3 && $_G['adminid'] == 1))}-->
			{eval $nav[code] = str_replace('style="', '_style="', $nav[code]);}
			<li>$nav[code]</li>
		<!--{/if}-->
	<!--{/loop}-->
	<!--{hook/global_cpnav_extra1}-->
	<!--{hook/global_cpnav_extra2}-->
	<!--{hook/global_usernav_extra3}-->
	<!--{hook/global_usernav_extra4}-->
</ul>

<ul id="my_status_menu" class="hfbt_pop" style="display:none;padding:10px 10px 0px !important;">
	<div id="sdstatus">
		<!--{template common/my_status}-->
	</div>
</ul>

<!--{if check_diy_perm($topic)}-->
<ul id="d_menu" class="hfbt_pop" style="display: none;">
	<li><div class="title usr-select m-default">UI 設計：</div></li>
	<li><a href="javascript:saveUserdata('diy_advance_mode', '');openDiy();">簡潔模式</a></li>
	<li><a href="javascript:saveUserdata('diy_advance_mode', '1');openDiy();">進階模式</a></li>
</ul>
<!--{/if}-->

<!--{if $_G['uid']}-->
<div id="upc" class="header_pop usr-select" style="display: none;">
	<div class="header_poh up">
			<img src="./data/attachment/profile/<!--{eval echo(getuserprofile('field1'));}-->" />
			<div class="action clearfix">
				<p><a class="username" href="home.php?mod=space&uid=$_G[uid]">{$_G[member][username]}</a></p>
				<p>
					<a class="usergroup" href="home.php?mod=spacecp&ac=usergroup">$_G[group][grouptitle]</a>
					<a class="m-default pipe">&middot;</a>
					<a class="usergroup" href="home.php?mod=spacecp&ac=credit&showcredit=1">{lang credits}: $_G[member][credits]</a>
				</p>
			</div>
	</div>
	<div class="header_pof">
		<dl class="name clearfix">
			<dt>
				<a href="home.php?mod=space&uid=$_G[uid]" target="_blank"><!--{avatar($_G[uid],medium)}--></a>
			</dt>
			<dd>
				<button class="sbtn usr-select" style="margin-left:10px;">Theme Is DeVeLopING ...</button>
			</dd>
		</dl>
	</div>
</div>
<!--{else}-->
<div id="upc" class="header_pop usr-select" style="display: none;">
	<div class="header_poh up">
		<div class="overlay"></div>
		<img src="{IMGDIR}/where_is_my_cover.png" />
		<div class="action clearfix">
			<p><a class="username" href="member.php?mod=logging&action=login&referer={echo rawurlencode($dreferer)}">{$_G[member][username]}</a></p>
		</div>
	</div>
	<div class="header_pof">
		<dl class="name clearfix">
			<dt>
				<a href="member.php?mod=logging&action=login&referer={echo rawurlencode($dreferer)}" target="_blank"><!--{avatar($_G[uid],medium)}--></a>
			</dt>
			<dd>
				<button class="sbtn usr-select" style="margin-left:10px;">Theme Is DeVeLopING ...</button>
			</dd>
		</dl>
	</div>
</div>
<!--{/if}-->