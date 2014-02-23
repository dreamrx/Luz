<?php echo 'We hate copycat.';exit;?>
<div id="hfb" class="style">
	<div class="wp">
		<div id="navigations" class="z">
			<div class="lp" initialized="true">
				<!--{eval $mnid = getcurrentnav();}-->
					<h2><!--{if !isset($_G['setting']['navlogos'][$mnid])}--><a href="{if $_G['setting']['domain']['app']['default']}http://{$_G['setting']['domain']['app']['default']}/{else}./{/if}" title="$_G['setting']['bbname']">{$_G['style']['boardlogo']}</a><!--{else}-->$_G['setting']['navlogos'][$mnid]<!--{/if}--></h2>
			</div>
		</div>
		<div id="items" class="y">
			<div class="sbtn-group un">
				<button class="sbtn"><a href="home.php?mod=space&do=pm"><span id="messages" class="glyphicon glyphicon-envelope ibtns ibtn16 no-text-decoration {if $_G[member][newpm]}new{/if}"></span></a></button>
				<button class="sbtn"><a href="home.php?mod=space&do=notice"><span id="notifications" class="glyphicon glyphicon-bell ibtns ibtn16 no-text-decoration {if $_G[member][newprompt]}new{/if}"></span></a></button>
				<button class="sbtn"><a class="glyphicon glyphicon-comment ibtns ibtn16 no-text-decoration" id="my_status" onclick="showMenu({'ctrlid':this.id,'ctrlclass':'a','pos':'34'})"></a></button>
				<button class="sbtn"><a class="glyphicon glyphicon-list ibtns ibtn16 no-text-decoration" id="qmls" onclick="showMenu({'ctrlid':this.id,'ctrlclass':'a','pos':'34'})"></a></button>
				<button class="sbtn"><a class="glyphicon glyphicon-cog ibtns ibtn16 no-text-decoration" id="ucp" onclick="showMenu({'ctrlid':this.id,'ctrlclass':'a','pos':'34'})"></a></button>
				<!--{if check_diy_perm($topic)}--><button class="sbtn"><a class="glyphicon glyphicon-wrench ibtns ibtn16 no-text-decoration" id="d" onclick="showMenu({'ctrlid':this.id,'ctrlclass':'a','pos':'34'})"></a></button><!--{/if}-->
				<button class="sbtn"><a class="glyphicon glyphicon-search ibtns ibtn16 no-text-decoration" id="searchbox" onclick="showMenu({'ctrlid':this.id,'ctrlclass':'a','pos':'34'})"></a></button>
			</div>
		</div>
		<div class="vdvidr y"></div>
		<div id="items" class="un y">
			<div id="upcb" onmouseover="showMenu({'ctrlid':'upcb','menuid':'upc','ctrlclass':'dropmenu','pos':'34!'});" intialized="true" class="">
				<a class="unbtn z" href="home.php?mod=space&uid=$_G[uid]">{$_G[member][username]}</a>
				<a class="unavt y" href="home.php?mod=space&uid=$_G[uid]"><!--{avatar($_G[uid],small)}--></a>
			</div>
		</div>
	</div>
</div>

<!--{if $_G['uid']}-->
<!--{template common/header_hfb_menu}-->
<!--{/if}-->