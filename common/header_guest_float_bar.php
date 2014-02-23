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
				<button class="sbtn"><a class="no-text-decoration" href="member.php?mod=logging&action=login&referer={echo rawurlencode($dreferer)}" onclick="showWindow('login', this.href);return false;">{lang login}</a></button>
				<button class="sbtn"><a class="no-text-decoration" href="member.php?mod={$_G[setting][regname]}">$_G['setting']['reglinkname']</a></button>
			</div>
		</div>
		<div class="vdvidr y"></div>
		<div id="items" class="un y">
			<div id="upcb" onmouseover="showMenu({'ctrlid':'upcb','menuid':'upc','ctrlclass':'dropmenu','pos':'34!'});" intialized="true" class="">
				<a class="unbtn z" href="member.php?mod=logging&action=login&referer={echo rawurlencode($dreferer)}">{lang guest}</a>
				<a class="unavt y" href="member.php?mod=logging&action=login&referer={echo rawurlencode($dreferer)}"><!--{avatar($_G[uid],small)}--></a>
			</div>
		</div>
	</div>
</div>

<!--{template common/header_hfb_menu}-->