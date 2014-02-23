<?php echo 'We hate copycat.';exit;?>
<script type="text/javascript">
var msgstr = '$defaultstr';
function handlePrompt(type) {
	var msgObj = $('message');
	if(type) {
		if(msgObj.value == msgstr) {
			msgObj.value = '';
			msgObj.className = 'xg2';
		}
		if($('message_menu')) {
			if($('message_menu').style.display == 'block') {
				showFace('message', 'message', msgstr);
			}
		}
		if(BROWSER.firefox || BROWSER.chrome) {
			showFace('message', 'message', msgstr);
		}
	} else {
		if(msgObj.value == ''){
			msgObj.value = msgstr;
			msgObj.className = 'xg1';
		}
	}
}
</script>
<div id="mdfm">
	<form method="post" autocomplete="off" id="md_addform" action="home.php?mod=spacecp&ac=doing&view=$_GET[view]" onsubmit="if($('message').value == msgstr){return false;}">
		<table cellspacing="0" cellpadding="0">
			<tr>
				<td id="md_statusinput" class="mdfm_input">
					<textarea name="message" id="message" onkeydown="ctrlEnter(event, 'add');" rows="4" autocomplete="off"></textarea>
				</td>
			</tr>
			<tr>
				<td class="mdfm_btn">
					<button type="submit" name="add" id="add" class="m-click">發表微博</button>
					<button class="m-click mdfm_btn_view" onclick="javascript:location.href='home.php?mod=space&do=doing'">微博牆</button>
				</td>
			</tr>
		</table>
		<input type="hidden" name="addsubmit" value="true" />
		<input type="hidden" name="refer" value="$theurl" />
		<input type="hidden" name="topicid" value="$topicid" />
		<input type="hidden" name="formhash" value="{FORMHASH}" />
	</form>
</div>