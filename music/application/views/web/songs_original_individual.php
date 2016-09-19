<?php echo $headers; ?>

<div class="songs_box">
    <div class="left columns">
        <br/>
        <h1><?php echo $song[0]['title']; ?></h1><br/>
        
        <div class="mobile-stretch">
            <?php $link = "//www.youtube.com/embed/".$song[0]['youtube_code'];?>
            <iframe width="560" height="315" src="<?php echo $link; ?>" frameborder="0" allowfullscreen></iframe>
        </div>

        <br/><br/>
        <h2>Details:</h2>
        <table>
            <tr>
                <td class="title"><p><span class="highlight">Composer: </span></p></td>
                <td><p><?php echo $song[0]['composer']; ?></p></td>   
            </tr>
            <tr>
                <td class="title"><p><span class="highlight">Vocalist(s): </span></p></td>
                <td><p><?php echo $song[0]['vocalist']; ?></p></td>
            </tr>
            
            <?php
                if ($song[0]['arranger']) {
                   ?>
                        <tr>
                            <td class="title"><p><span class="highlight">Arranger: </span></p></td>
                            <td><p><?php echo $song[0]['arranger']; ?></p></td>
                        </tr>
                    <?php
                }
            ?>
            <?php
                if ($song[0]['instrumentalists']) {
                   ?>
                        <tr>
                            <td class="title"><p><span class="highlight">Arranger: </span></p></td>
                            <td><p><?php echo $song[0]['instrumentalists']; ?></p></td>
                        </tr>
                    <?php
                }
            ?>

            <tr>
                <td class="title"><p><span class="highlight">Video Presentation: </span></p></td>
                <td><p><?php echo $song[0]['video_presentation']; ?></p></td>
            </tr>      
            <tr>
                <td class="title"><p><span class="highlight">Category: </span></p></td>
                <td><p><?php echo $song[0]['category']; ?></p></td>
            </tr>
        </table>
        
        <?php echo $fb_like; ?>
    </div>
    <div class="right columns">
        <p class="lyrics">
            <?php echo $song[0]['lyrics']; ?>
        </p>
    </div>
	
	<div style="float:right;clear:both;margin:30px;">
		<?php $tmp = (($song[0]['id'] - 1) == 0 ? -1 : ($song[0]['id'] - 1));  ?>
		<a href="<?php echo $this->config->item('base_url').'songs/original/'.$tmp?>"><div class="highlight">Previous</div></a>
		<a href="<?php echo $this->config->item('base_url').'songs/original/'.($song[0]['id'] + 1)?>"><div class="highlight">Next</div></a>
	</div>
    
	<br/>
</div>


<?php echo $footer; ?>
</div>
</body>