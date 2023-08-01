<!DOCTYPE HTML>
<html>

<head>
  <title>RS Thakur</title>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="keywords" content="Novus Admin Panel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

  <script
    type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
  <!-- Bootstrap Core CSS -->
  <link href="<?php echo base_url(); ?>css/bootstrap.css" rel='stylesheet' type='text/css' />
  <!-- Custom CSS -->
  <link href="<?php echo base_url(); ?>css/style.css" rel='stylesheet' type='text/css' />
  <!-- font CSS -->
  <!-- font-awesome icons -->
  <link href="<?php echo base_url(); ?>css/font-awesome.css" rel="stylesheet">
  <!-- //font-awesome icons -->
  <!-- js-->
  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>js/jquery-1.11.1.min.js"></script>
  <script src="<?php echo base_url(); ?>js/modernizr.custom.js"></script>
  <!--webfonts-->
  <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic'
    rel='stylesheet' type='text/css'>
  <!--//webfonts-->
  <!--animate-->
  <link href="<?php echo base_url(); ?>css/animate.css" rel="stylesheet" type="text/css" media="all">
  <script src="<?php echo base_url(); ?>js/wow.min.js"></script>
  <script>
    new WOW().init();
  </script>
  <!--//end-animate-->
  <!-- Metis Menu -->
  <script src="<?php echo base_url(); ?>js/metisMenu.min.js"></script>
  <script src="<?php echo base_url(); ?>js/custom.js"></script>
  <link href="<?php echo base_url(); ?>css/custom.css" rel="stylesheet">
  <!--//Metis Menu -->
</head>
<style>
  .footer {
    position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    background-color: whitesmoke;
    color: white;
    text-align: center;
  }

  .icon-bar a:hover {
    background-color: #000;
  }

  .icon-bar a {
    font-size: 20px;
  }

  .facebook {
    background: #3B5998;
    color: white;
  }

  .instagram {
    background: #125688;
    color: white;
  }

  .google {
    background: #dd4b39;
    color: white;
  }

  .linkedin {
    background: #007bb5;
    color: white;
  }

  .youtube {
    background: #bb0000;
    color: white;
  }

  .content {
    margin-left: 75px;
    font-size: 30px;
  }

  .d-flex {
    align: right;
  }
  .group{
    padding-bottom: 5px;
    padding-top: 5px;
  }
</style>

<body class="cbp-spmenu-push">
  <div class="main-content">
    <!--left-fixed -navigation-->
    <div class=" sidebar" role="navigation">
      <div class="navbar-collapse">
        <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1"
          style="overflow-y: scroll !important; width: 260px !important ;">
          <ul class="nav" id="side-menu">
            <li>
              <h1 style="color:Black">&nbsp &nbsp; Dashboard </h1>
            </li>
          
         
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('Student/home') ?>">&nbsp &nbsp;<i class="fa fa-home" style="font-size:20px;color:white"></i>&nbsp &nbsp &nbspHome</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('Student/add_details') ?>">&nbsp &nbsp;<i class="fa fa-user" style="font-size:20px;color:white"></i>&nbsp &nbsp &nbspAdd Student Details</a>
        </li>
       
        <!-- <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('Student/create') ?>">&nbsp &nbsp;<i class="fa fa-book" style="font-size:20px;color:white"></i>&nbsp &nbsp &nbspCreate</a>
        </li> -->
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('Student/fatch_form') ?>">&nbsp &nbsp;<i class="fa fa-table" style="font-size:20px;color:white"></i>&nbsp &nbsp &nbspStudent's Data Table</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('Student/contact_fatch') ?>">&nbsp &nbsp;<i class="fa fa-table" style="font-size:20px;color:white"></i>&nbsp &nbsp &nbspContact Details</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('Welcome/logout') ?>">&nbsp &nbsp;<i class="fa fa-sign-out" style="font-size:20px;color:white"></i>&nbsp &nbsp &nbsplogout</a>
        </li>
       
       
</nav>
      </div>
    </div>
    <div class="sticky-header header-section ">
			<div class="header-left">
				<!--toggle button start-->
				<button id="showLeftPush"><i class="fa fa-bars"></i></button>
				<!--toggle button end-->
        <div class="logo" >
					<a>
          <img src="<?php echo base_url('assets/image/rs2.jpg');?>">
					<!--</a>-->
					</a>
				</div>  
  	<!--search-box-->
    <!-- <div class="search-box">
					<form class="input">
						<input class="sb-search-input input__field--madoka" placeholder="Search..." type="search" id="input-31" />
						<label class="input__label" for="input-31">
							<svg class="graphic" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
								<path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
							</svg>
						</label>
					</form>
				</div>//end-search-box -->

        <div class="clearfix"> </div>
			</div>
			<div class="header-right">
				<div class="profile_details_left"><!--notifications of menu start -->
					<ul class="nofitications-dropdown">
        <li class="dropdown head-dpdn">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell"></i><span class="badge blue">3</span></a>
							<ul class="dropdown-menu">
								<li>
									<div class="notification_header">
										<h3>You have 3 new notification</h3>
									</div>
								</li>
								<li><a href="#">
									<div class="user_img"><img src="<?php echo base_url('assets/image/2.png');?>" alt=""></div>
								   <div class="notification_desc">
									<p>Lorem ipsum dolor amet</p>
									<p><span>1 hour ago</span></p>
									</div>
								  <div class="clearfix"></div>	
								 </a></li>
								 <li class="odd"><a href="#">
									<div class="user_img"><img src="images/1.png" alt=""></div>
								   <div class="notification_desc">
									<p>Lorem ipsum dolor amet </p>
									<p><span>1 hour ago</span></p>
									</div>
								   <div class="clearfix"></div>	
								 </a></li>
								 <li><a href="#">
									<div class="user_img"><img src="images/3.png" alt=""></div>
								   <div class="notification_desc">
									<p>Lorem ipsum dolor amet </p>
									<p><span>1 hour ago</span></p>
									</div>
								   <div class="clearfix"></div>	
								 </a></li>
								 <li>
									<div class="notification_bottom">
										<a href="#">See all notifications</a>
									</div> 
								</li>
							</ul>
						</li>	
            <li class="dropdown head-dpdn">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tasks"></i><span class="badge blue1">15</span></a>
							<ul class="dropdown-menu">
								<li>
									<div class="notification_header">
										<h3>You have 8 pending task</h3>
									</div>
								</li>
								<li><a href="#">
									<div class="task-info">
										<span class="task-desc">Database update</span><span class="percentage">40%</span>
										<div class="clearfix"></div>	
									</div>
									<div class="progress progress-striped active">
										<div class="bar yellow" style="width:40%;"></div>
									</div>
								</a></li>
								<li><a href="#">
									<div class="task-info">
										<span class="task-desc">Dashboard done</span><span class="percentage">90%</span>
									   <div class="clearfix"></div>	
									</div>
									<div class="progress progress-striped active">
										 <div class="bar green" style="width:90%;"></div>
									</div>
								</a></li>
								<li><a href="#">
									<div class="task-info">
										<span class="task-desc">Mobile App</span><span class="percentage">33%</span>
										<div class="clearfix"></div>	
									</div>
								   <div class="progress progress-striped active">
										 <div class="bar red" style="width: 33%;"></div>
									</div>
								</a></li>
								<li><a href="#">
									<div class="task-info">
										<span class="task-desc">Issues fixed</span><span class="percentage">80%</span>
									   <div class="clearfix"></div>	
									</div>
									<div class="progress progress-striped active">
										 <div class="bar  blue" style="width: 80%;"></div>
									</div>
								</a></li>
								<li>
									<div class="notification_bottom">
										<a href="#">See all pending tasks</a>
									</div> 
								</li>
							</ul>
						</li>	
					</ul>
					<div class="clearfix"> </div>
				</div>
				<!--notification menu end -->
				<div class="profile_details">		
					<ul>
						<li class="dropdown profile_details_drop">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
								<div class="profile_img">	
									<span class="prfil-img"><img src="<?php// echo base_url('assets/image/a.png');?>" class="profile_img" alt=""> </span> 
									<div class="user-name">
										<p>     <?php
                                        foreach ($ram as $data) { ?>
                                            <td>
                                                <?php echo $data->title; ?>
                                                <?php echo $data->fname; ?>
                                                <?php echo $data->mname; ?>
                                                <?php echo $data->lname; ?>
                                            </td>
                                        <?php }
                                        ?></p>
										<!-- <span>Administrator</span> -->
									</div>
									<i class="fa fa-angle-down lnr"></i>
									<i class="fa fa-angle-up lnr"></i>
									<div class="clearfix"></div>	
								</div>	
							</a>
							<ul class="dropdown-menu drp-mnu" id="subMenu">
								<li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li> 
								<li> <a href="<?php echo base_url('Student/profile') ?>"><i class="fa fa-user"></i> Profile</a> </li> 
								<li> <a href="<?php echo base_url('Student/logout') ?>"><i class="fa fa-sign-out"></i> Logout</a> </li>
							</ul>
						</li>
					</ul>
				</div>
        <div class="clearfix"> </div>	
			</div>
			<div class="clearfix"> </div>	
		</div>
   