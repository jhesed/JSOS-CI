<?php echo $header; ?>
<link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('static_url').'css/lib/tabs.css'; ?>"/>
<script type="text/javascript" src="<?php echo $this->config->item('static_url').'js/lib/tabs.js'; ?>"></script>
<div class="content_box">
	<div class="float-left left w-40 bold">
    <h2 class="text-left" style="float:left;">Jesus Art Festival</h2> <div class="fb-share-button" data-href="<?php echo $this->config->item('base_url').'transde/jaf'; ?>" data-type="button_count"></div>
		<div class="line_brown w-100 top-30 bottom-20"></div>

        description description description description description description description description description description description description description description description description description description description description description description description description description description description description description description description description description description description description description description description description description description description description description description description description description description description description description description description description description description description description description description description description description description description description description description description description
	</div>
	<div class="float-left right w-53" style="margin:35px 0 20px 0;">
     <ul class="tabs">
           <li><a href="#tab_a">Videos</a></li>
           <li><a href="#tab_b">Photos</a></li>
        </ul>
        <div class="tabContainer">
            <div id="tab_a" class="tabContent">
                <p>
                    <?php
                        for($i=0; $i<count($videos); $i++) {
                            echo "<h3>".$videos[$i]['title']."</h3>";
                            echo "<p>Video Presentation by: ".$videos[$i]['video_presentation']."</p>";
                            ?>

                            <?php $link = "//www.youtube.com/embed/".$videos[$i]['youtube_code'];?>
                            <div class="stretch_contain">
                                <iframe class="bottom-20" width="500" height="300" src="<?php echo $link; ?>" frameborder="0" allowfullscreen></iframe>
                            </div>
                            <?php
                        }
                    ?>
                </p>
            </div>
            <!-- / END #events tab -->
            <div id="tab_b" class="tabContent">
                <p>
                    pictures here
                </p>
           </div>
           <!-- / END #tab_b tab -->
        </div><!-- / END .tabContainer -->


   </div>
</div>
<?php echo $footer; ?>