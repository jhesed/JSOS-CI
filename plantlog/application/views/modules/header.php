<!DOCTYPE html>
<html lang="en">
	
	<head>
	    <meta charset="UTF-8">
	    <title>MWCI Prototype</title>
      
      <!-- Custom Fonts (Needs to be downloaded) -->
      <link href="<?php echo $this->config->item('static_url').'/css/lib/font-awesome.min.css'; ?>" rel="stylesheet" type="text/css">
      <!--
      <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
      <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
      <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
      <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
      -->

	    <!-- Load CSS Files -->
	    <link rel="stylesheet" href="<?php echo $this->config->item('static_url').'/css/lib/jquery-ui.min.css'; ?>"/>
	    <link rel="stylesheet" href="<?php echo $this->config->item('static_url').'/css/lib/bootstrap.min.css'; ?>"/>
	    <link rel="stylesheet" href="<?php echo $this->config->item('static_url').'/css/lib/lobilist.min.css'; ?>"/>
	    <link rel="stylesheet" href="<?php echo $this->config->item('static_url').'/css/lib/lobibox.min.css'; ?>"/>
      <link rel="stylesheet" href="<?php echo $this->config->item('static_url').'/css/lib/ie10-viewport-bug-workaround.css'; ?>"/>
	    <link rel="stylesheet" href="<?php echo $this->config->item('static_url').'/css/lib/bootstrap-sortable.css'; ?>"/>
	    <link rel="stylesheet" href="<?php echo $this->config->item('static_url').'/css/style.css'; ?>"/>


	    <!-- Load Javascript Files -->
  		<script src="<?php echo $this->config->item('static_url').'/js/lib/jquery.min.js'; ?>"></script>
  		<script src="<?php echo $this->config->item('static_url').'/js/lib/jquery-ui.min.js'; ?>"></script>
  		<script src="<?php echo $this->config->item('static_url').'/js/lib/jquery.ui.touch-punch-improved.js'; ?>"></script>
  		<script src="<?php echo $this->config->item('static_url').'/js/lib/bootstrap.min.js'; ?>"></script>
  		<script src="<?php echo $this->config->item('static_url').'/js/lib/lobilist.js'; ?>"></script>
  		<script src="<?php echo $this->config->item('static_url').'/js/lib/lobibox.min.js'; ?>"></script>
      <script src="<?php echo $this->config->item('static_url').'/js/lib/highlight.pack.js'; ?>"></script>
      <script src="<?php echo $this->config->item('static_url').'/js/lib/bootstrap-sortable.js'; ?>"></script>
  		<script src="<?php echo $this->config->item('static_url').'/js/lib/moment.min.js'; ?>"></script>
      		
	</head>

	<body>


    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">MWCI Logs</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">

          	<!-- Dashboard -->
            <li><a href="#">Dashboard</a></li>
            
            <!-- Log Management -->            
            <li class="dropdown active">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Log Management <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo $this->config->item('base_url').'/log_management/all'; ?>">All</a></li>
                <li><a href="<?php echo $this->config->item('base_url').'/log_management/chiller'; ?>">Chiller</a></li>
                <li><a href="#">Electrical</a></li>
                <li><a href="#">Mechanical</a></li>
                <li><a href="#">Pumps</a></li>
              </ul>
            </li>

            <!-- User Management -->
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">User Management <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Add User</a></li>
                <li><a href="#">Update User</a></li>
              </ul>
            </li>

     	    	<!-- Plant Management -->
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Plant Management <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Add Plant</a></li>
                <li><a href="#">Update Plant</a></li>
                <li><a href="#">Delete Plant</a></li>
              </ul>
            </li>

          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">About</a></li>
            <li class="active"><a href="#">Login <span class="sr-only">(current)</span></a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>


