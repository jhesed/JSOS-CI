<!DOCTYPE html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>JSOS Worship Ministry - <?php echo ucfirst($current); ?></title>
    <link rel="shortcut icon" href="<?php echo $this->config->item('favicon_url'); ?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('static_url').'css/theme.css'; ?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('static_url').'css/style.css'; ?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('static_url').'css/lib/slider.css'; ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('static_url').'css/devices/small.css'; ?>" media="only screen and (max-device-width: 767px)"/>
    <link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('static_url').'css/lib/rmm-css/responsivemobilemenu.css'; ?>" media="only screen and (max-device-width: 767px)"/>

    <script type="text/javascript" src="<?php echo $this->config->item('static_url').'js/lib/jquery1.8.3.js'; ?>"></script>
    <script type="text/javascript" src="<?php echo $this->config->item('static_url').'js/lib/jquery.tablesorter.min.js'; ?>"></script>
</head>

<body>
    <img class="bg_image" src="<?php echo $this->config->item('static_url').'images/web/background.jpg'; ?>" alt="" />

    <div class="center_box">
        <div id="banner">
            <a href="<?php echo $this->config->item('base_url').'home/give'; ?>" class="give">Give</a>

            <div id="pc-nav">
                <ul id="nav">
                    <li <?php ($current == 'home') ? print 'class="current"': ''?>><a href="<?php echo $this->config->item('base_url').'home'; ?>">Home</a></li>
                    <li <?php ($current == 'songs') ? print 'class="current"': ''?>><a href="<?php echo $this->config->item('base_url').'songs/original'; ?>">Songs</a></li>
                    <li <?php ($current == 'testimonies') ? print 'class="current"': ''?>><a href="<?php echo $this->config->item('base_url').'testimonies'; ?>">Testimonies</a>
                        <ul>
                            <li><a href="<?php echo $this->config->item('base_url').'testimonies/chest'; ?>">Praise Chest</a></li>
                            <li><a href="<?php echo $this->config->item('base_url').'testimonies/graffiti'; ?>">Praise Graffiti</a></li>
    						<li><a href="<?php echo $this->config->item('base_url').'testimonies/bursts'; ?>">Praise Bursts</a></li>
    						<li><a href="<?php echo $this->config->item('base_url').'testimonies/salvation'; ?>">Salvation</a></li>
                        </ul>
                    </li>
    				<li <?php ($current == 'aboutus') ? print 'class="current"': ''?>><a href="<?php echo $this->config->item('base_url').'aboutus'; ?>">About Us</a></li>
                    <li <?php ($current == 'contact us') ? print 'class="current"': ''?>><a href="<?php echo $this->config->item('base_url').'contactus'; ?>">Contact us</a></li>
                </ul>
            </div>
        </div>

        <div id="mobile_nav">
            <ul>
                <li <?php ($current == 'home') ? print 'class="current"': ''?>><a href="<?php echo $this->config->item('base_url').'home'; ?>">Home</a></li>
                <li <?php ($current == 'songs') ? print 'class="current"': ''?>><a href="<?php echo $this->config->item('base_url').'songs/original'; ?>">Songs</a></li>
                <li <?php ($current == 'testimonies') ? print 'class="current"': ''?>><a href="<?php echo $this->config->item('base_url').'testimonies'; ?>">Testimonies</a>
                    <ul>
                        <li><a href="<?php echo $this->config->item('base_url').'testimonies/chest'; ?>">Praise Chest</a></li>
                        <li><a href="<?php echo $this->config->item('base_url').'testimonies/graffiti'; ?>">Praise Graffiti</a></li>
                        <li><a href="<?php echo $this->config->item('base_url').'testimonies/bursts'; ?>">Praise Bursts</a></li>
                        <li><a href="<?php echo $this->config->item('base_url').'testimonies/salvation'; ?>">Salvation</a></li>
                    </ul>
                </li>
                <li <?php ($current == 'aboutus') ? print 'class="current"': ''?>><a href="<?php echo $this->config->item('base_url').'aboutus'; ?>">About Us</a></li>
                <li <?php ($current == 'contact us') ? print 'class="current"': ''?>><a href="<?php echo $this->config->item('base_url').'contactus'; ?>">Contact us</a></li>
            </ul>
        </div>

