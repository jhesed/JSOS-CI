<script type="text/javascript" src="<?php echo $this->config->item('static_url').'js/lib/slider.js?z='.rand(); ?>"></script><!--[if lte IE 7]><style type="text/css">ul li{	display:inline;	/*float:left;*/}</style><![endif]--><div id="main">  <div id="gallery">    <div id="slides">        <script type="text/javascript">            if (window.matchMedia("(max-device-width : 767px)").matches)  {                document.write(                    '<div class="slide"><img src="<?php echo $this->config->item("static_url")."images/web/slider/home/1.jpg"; ?>" width="" height="" alt="side" /></div> \                    <div class="slide"><img src="<?php echo $this->config->item("static_url")."images/web/slider/home/2.jpg"; ?>" width="" height="" alt="side" /></div> \                    <div class="slide"><img src="<?php echo $this->config->item("static_url")."images/web/slider/home/3.jpg"; ?>" width="" height="" alt="side" /></div> \                    <div class="slide"><img src="<?php echo $this->config->item("static_url")."images/web/slider/home/4.jpg"; ?>" width="" height="" alt="side" /></div> \                    <div class="slide"><img src="<?php echo $this->config->item("static_url")."images/web/slider/home/5.jpg"; ?>" width="" height="" alt="side" /></div>'                );            }            else {                document.write(                    '<div class="slide"><img src="<?php echo $this->config->item("static_url")."images/web/slider/home/1.jpg"; ?>" width="500" height="300" alt="side" /></div> \                    <div class="slide"><img src="<?php echo $this->config->item("static_url")."images/web/slider/home/2.jpg"; ?>" width="500" height="300" alt="side" /></div> \                    <div class="slide"><img src="<?php echo $this->config->item("static_url")."images/web/slider/home/3.jpg"; ?>" width="500" height="300" alt="side" /></div> \                    <div class="slide"><img src="<?php echo $this->config->item("static_url")."images/web/slider/home/4.jpg"; ?>" width="500" height="300" alt="side" /></div> \                    <div class="slide"><img src="<?php echo $this->config->item("static_url")."images/web/slider/home/5.jpg"; ?>" width="500" height="300" alt="side" /></div>'                );            }        </script>    </div>    <div id="menu">        <ul>            <li class="fbar">&nbsp;</li>            <li class="menuItem"><a href=""><img src="<?php echo $this->config->item('static_url').'images/web/slider/home/1_thumb.jpg'; ?>" alt="thumbnail" /></a></li>            <li class="menuItem"><a href=""><img src="<?php echo $this->config->item('static_url').'images/web/slider/home/2_thumb.jpg'; ?>" alt="thumbnail" /></a></li>            <li class="menuItem"><a href=""><img src="<?php echo $this->config->item('static_url').'images/web/slider/home/3_thumb.jpg'; ?>" alt="thumbnail" /></a></li>            <li class="menuItem"><a href=""><img src="<?php echo $this->config->item('static_url').'images/web/slider/home/4_thumb.jpg'; ?>" alt="thumbnail" /></a></li>            <li class="menuItem"><a href=""><img src="<?php echo $this->config->item('static_url').'images/web/slider/home/5_thumb.jpg'; ?>" alt="thumbnail" /></a></li>        </ul>    </div>  </div></div>