<!DOCTYPE html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?php echo ucfirst($current); ?> | JSOS Church</title>
    <link rel="shortcut icon" href="<?php echo $this->config->item('favicon_url'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('static_url').'css/theme.css'; ?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('static_url').'css/style.css'; ?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('static_url').'css/lib/tooltipster.css'; ?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('static_url').'css/lib/pics.css'; ?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('static_url').'css/devices/small.css'; ?>" media="only screen and (max-device-width: 767px)"/>
    <link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('static_url').'css/lib/rmm-css/responsivemobilemenu.css'; ?>" media="only screen and (max-device-width: 767px)"/>
    <script src="<?php echo $this->config->item('static_url').'js/lib/jquery1.8.3.js'; ?>"></script>
    <script src="<?php echo $this->config->item('static_url').'js/lib/jquery.tooltipster.min.js'; ?>"></script>

    <!-- Google Analytics -->
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-68589612-1', 'auto');
            ga('require', 'linkid');
            ga('send', 'pageview');

        </script>
    <!-- End Google Analytics -->

</head>

<body>
    <?php echo $fb_sdk; ?>
    <div class="center max-size">

        <?php
            if ($picture != "") {
                echo '
                    <div id="welcome">
                        <div style="vertical-align:center;">
                            <img width=55 height=50 class="img_shadow smaller_border_round bottom-5 top-5" src="'.$picture.'"></img>
                            <a href="'.$this->config->item('base_url').'utils/facebook/logout'.'"><div class="btn">Logout</div></a>
                        </div>
                    </div>
                ';
            }
        ?>

        <div class="banner-stretch">
            <img id="banner_img" src="<?php echo $this->config->item('static_url').'img/banner.jpg' ?>" height="165" width="1024"/>
        </div>
        <!-- <div id="banner"></div> -->

            <div id="mobile_nav">
    		    <ul id="nav">
                    <li <?php ($current == 'home') ? print 'class="current"': ''?>><a href="<?php echo $this->config->item('base_url').'home'; ?>">HOME</a></li>
    				<li <?php ($current == 'aboutus') ? print 'class="current"': ''?>><a href="<?php echo $this->config->item('base_url').'aboutus'; ?>">ABOUT US</a>
    					<ul>
                            <li><a href="<?php echo $this->config->item('base_url').'aboutus/location'; ?>">Location</a></li>
                            <li><a href="<?php echo $this->config->item('base_url').'aboutus/history'; ?>">History</a></li>
                            <li><a href="<?php echo $this->config->item('base_url').'aboutus/truth'; ?>">Truth Behind Its Name</a></li>
                            <li><a href="<?php echo $this->config->item('base_url').'aboutus/mission'; ?>">Mission Statement</a></li>
                            <li><a href="<?php echo $this->config->item('base_url').'aboutus/mo'; ?>">Ministerial Objectives</a></li>
                            <li><a href="<?php echo $this->config->item('base_url').'aboutus/doctrinal'; ?>">Doctrinal Statement</a></li>
                            <li><a href="<?php echo $this->config->item('base_url').'aboutus/themesong'; ?>">Theme Song</a></li>
                            <li><a href="<?php echo $this->config->item('base_url').'aboutus/standards'; ?>">Standard For Leaders</a></li>
                        </ul>
    				</li>
                    <li <?php ($current == 'departments') ? print 'class="current"': ''?>><a href="<?php echo $this->config->item('base_url').'departments'; ?>">DEPARTMENTS</a>
    					<ul>
                            <li><a href="<?php echo $this->config->item('base_url').'departments/children'; ?>">Children</a></li>
                            <li><a href="<?php echo $this->config->item('base_url').'departments/youngpeople'; ?>">Young People</a></li>
                            <li><a href="<?php echo $this->config->item('base_url').'departments/youngadult'; ?>">Young Adult</a></li>
                            <li><a href="<?php echo $this->config->item('base_url').'departments/wam'; ?>">WAM</a></li>
                            <li><a href="<?php echo $this->config->item('base_url').'departments/dad'; ?>">DAD</a></li>
                            <li><a href="<?php echo $this->config->item('www_worship'); ?>" target="blank_">Worship</a></li>
                            <li><a href="<?php echo $this->config->item('base_url').'departments/prayer'; ?>">Intercession</a></li>
                            <li><a href="<?php echo $this->config->item('base_url').'departments/ushering'; ?>">Ushering</a></li>
                            <li><a href="<?php echo $this->config->item('base_url').'departments/bod'; ?>">BOD</a></li>
                            <li><a href="<?php echo $this->config->item('base_url').'departments/office'; ?>">Office</a></li>
                            <li><a href="<?php echo $this->config->item('base_url').'departments/media'; ?>">Media Arts</a></li>
    					</ul>
    				</li>
                    <li <?php ($current == 'c8') ? print 'class="current"': ''?>><a href="<?php echo $this->config->item('base_url').'c8' ?>">C8</a>

    					<ul>
                            <li><a href="<?php echo $this->config->item('base_url').'c8/description'; ?>">Basic Definition and Description </a></li>
                            <li><a href="<?php echo $this->config->item('base_url').'c8/cmeaning'; ?>">Meaning of C in C8 Campaign </a></li>
                            <li><a href="<?php echo $this->config->item('base_url').'c8/8meaning'; ?>">Meaning of 8 in C8 Campaign </a></li>
                            <li><a href="<?php echo $this->config->item('base_url').'c8/goals'; ?>">Goals and Objectives for 2014 </a></li>
                            <li><a href="<?php echo $this->config->item('base_url').'c8/projects'; ?>">Projects </a></li>
                            <li><a href="<?php echo $this->config->item('base_url').'c8/curriculum'; ?>">Curriculum </a></li>
    					</ul>

    				</li>

                    <li <?php ($current == 'transde') ? print 'class="current"': ''?>><a href="<?php echo $this->config->item('base_url').'transde' ?>">TRANSDENOMINATIONAL</a>
                        <ul>
                            <li><a href="<?php echo $this->config->item('base_url').'transde/ribaf'; ?>">RiBAF</a></li>
                            <li><a href="<?php echo $this->config->item('base_url').'transde/jaf'; ?>">JAF</a></li>
                        </ul>
                    </li>
                    <li <?php ($current == 'track') ? print 'class="current"': ''?>><a href="<?php echo $this->config->item('base_url').'track'; ?>">TRACK</a>
                        <ul>
                            <li><a href="<?php echo $this->config->item('base_url').'track/historicalglimpse'; ?>">Historical Glimpse</a></li>
                        </ul>
                    </li>
                    <li <?php ($current == 'gallery') ? print 'class="current"': ''?>><a href="<?php echo $this->config->item('base_url').'gallery/index'; ?>">GALLERY</a>
                        <ul>
                            <li><a href="<?php echo $this->config->item('www_worship').'songs/original'; ?>" target="_blank">Songs</a></li>
                            <li><a href="<?php echo $this->config->item('base_url').'albums'; ?>">Photos</a></li>
                        </ul>
                    </li>
                    <li <?php ($current == 'contactus') ? print 'class="current"': ''?>><a href="<?php echo $this->config->item('base_url').'contactus'; ?>">CONTACT US</a></li>
                </ul>
        </div>
		<input type="hidden" id="sns_id" value="<?php echo $sns_id; ?>"/>
		<input type="hidden" id="sns_username" value="<?php echo $sns_username; ?>"/>
		<input type="hidden" id="display_name" value="<?php echo $display_name; ?>"/>

