<?php echo 'We hate copycat.';exit;?>
<div id="controlpanel" class="cl">
	<div id="controlheader" class="cl">
		<p class="y">
			<span id="navcancel"><a href="javascript:;" onclick="spaceDiy.cancel();return false;">{lang close}</a></span>
			<span id="navsave"><a href="javascript:;" onclick="javascript:spaceDiy.save();return false;">{lang save}</a></span>
			<span id="button_redo" class="unusable"><a href="javascript:;" onclick="spaceDiy.redo();return false;" title="{lang diy_redo}" onfocus="this.blur();">{lang diy_redo}</a></span>
			<span id="button_undo" class="unusable"><a href="javascript:;" onclick="spaceDiy.undo();return false;" title="{lang diy_revocation}" onfocus="this.blur();">{lang diy_revocation}</a></span>
		</p>
		<ul id="controlnav">
			<li id="navstart" class="current"><a href="javascript:" onclick="spaceDiy.getdiy('start');this.blur();return false;">{lang diy_start}</a></li>
			<li id="navlayout"><a href="javascript:;" onclick="spaceDiy.getdiy('layout');this.blur();return false;">{lang diy_layout}</a></li>
			<li id="navstyle"><a href="javascript:;" onclick="spaceDiy.getdiy('style');this.blur();return false;">{lang diy_style}</a></li>
			<li id="navblock"><a href="javascript:;" onclick="spaceDiy.getdiy('block');this.blur();return false;">{lang diy_block}</a></li>
			<li id="navdiy"><a href="javascript:;" onclick="spaceDiy.getdiy('diy');this.blur();return false;">{lang diy_dress}</a></li>
		</ul>
	</div>
	<div id="controlcontent" class="cl inner_scroll">
		<ul id="contentstart" class="content">
		  <li><a href="javascript:;" onclick="spaceDiy.getdiy('layout');return false;"><img src="{STATICURL}image/diy/layout.png" />{lang diy_layout_1}</a></li>
		  <li><a href="javascript:;" onclick="spaceDiy.getdiy('style');return false;"><img src="{STATICURL}image/diy/style.png" />{lang diy_style}</a></li>
		  <li><a href="javascript:;" onclick="spaceDiy.getdiy('block');return false;"><img src="{STATICURL}image/diy/module.png" />{lang diy_add_block}</a></li>
		  <li><a href="javascript:;" onclick="spaceDiy.getdiy('diy', 'topicid', '$topic[topicid]');return false;"><img src="{STATICURL}image/diy/diy.png" />{lang do_it_yourself}</a></li>
		</ul>
	</div>
	<div id="cpfooter"><table cellpadding="0" cellspacing="0" width="100%"><tr><td class="l">&nbsp;</td><td class="c">&nbsp;</td><td class="r">&nbsp;</td></tr></table></div>
</div>
<form method="post" autocomplete="off" name="diyform" action="home.php?mod=spacecp&ac=index">
<input type="hidden" name="spacecss" value="" />
<input type="hidden" name="style" value="$space[theme]" />
<input type="hidden" name="layoutdata" value="" />
<input type="hidden" name="currentlayout" value="{$userdiy['currentlayout']}" />
<input type="hidden" name="formhash" value="{FORMHASH}" />
<input type="hidden" name="diysubmit" value="true"/>
</form>