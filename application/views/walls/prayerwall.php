<?php echo $header; ?>
<script type="text/javascript" src="<?php echo $this->config->item('static_url').'js/prayer_wall.js'; ?>"></script>

	<div class="wall content_box center">
		<div class="float-left w-30">
			<img src="<?php echo $this->config->item('static_url').'img/home/prayerwall_title.png'; ?>"></img>
			<br/>
			<form method="post" action="" class="left-30p transparent_bg" style="margin-top:0;">
				<input name="wall_title" placeholder="My Title" id="wall_title" class="w-90 top-10"/><br/>
				<div class="error" id="error_title">title is required.</div>
				<textarea name="message" placeholder="Your Prayer Item" id="message" rows=8></textarea>
				<div class="error" id="error_content">content is required.</div>

                <?php if (!$this->input->cookie('sns_id', TRUE) ? true: false)  { ?>
                    <a href="<?php echo $this->config->item('base_url').'utils/facebook/login/prayerwall'; ?>"><div class="fb-button" style="margin:10px 15px 10px 0;float:right;"></div></a>
                <?php } else {?>
                    <table width=95 style="float:right; margin-right:10px;" class="top-10">
                        <tr>
                            <td style="vertical-align: middle;">
                                <div class="fb-checkbox img_shadow tooltip pic_circle" title="If this button is enabled, your Prayer Item will also be posted to your Facebook Account">
                                </div>
                            </td>
                            <td style="vertical-align: middle;">
                                <input class="form_feed btn" type="submit" value="Post"/>
                            </td>
                        </tr>
                    </table>
                <?php }?>

				<!--<input type="submit" name ="submit" value="" class="fb-button" style="margin:10px 15px 10px 0;float:right;"/>-->
			</form><br/><br/>
		</div>
		<?php echo $prayerwall_content; ?>

        <form autocomplete="off">
            <input type="hidden" id="prayerwall-last-updated" value="<?php echo $prayerwall_last_updated; ?>" />
        </form>
	</div>

<?php echo $footer; ?>
