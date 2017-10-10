<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>NxDen - Admin Panel</title>
    <?php include('files-css.php'); ?>
    <link rel="stylesheet" type="text/css" href="assets/stylesheets/styles-admin.css">
    
</head>
<body class="index">
    <!-- Start Off=Canvas Navigation Section -->
    
    <div class="container fixed" data-animation-effect="fadeIn">
    	
        <div class="row admin-menu">
        	<?php spacer(10); ?>
        	<div class="container">
                <div class="col-sm-8 col-xs-12 main-link">
                    <ul>
                        <li><a href="./" class="page-scroll waves-effect"><i class="fa fa-fw fa-home"></i><span>NxDen.com</span></a></li>
                        <li><a href="#about-us" class="page-scroll waves-effect"><i class="fa fa-fw fa-user"></i><span>About Us</span></a></li>
                        <li><a href="#service" class="page-scroll waves-effect"><i class="fa fa-fw fa-bar-chart-o"></i><span>Services</span></a></li>
                        <li><a href="#portfolio" class="page-scroll waves-effect"><i class="fa fa-fw fa-bell-o"></i><span>Projects</span></a></li>
                        <li><a href="#contact" class="page-scroll waves-effect"><i class="fa fa-fw fa-envelope-o"></i><span>Contact</span></a></li>        
                    </ul>
                </div>
                <div class="col-sm-4 col-xs-12 login-profile"><?php include('login-form.php'); ?></div>
            </div>
            <?php spacer(10); ?>
    	</div>
        
    </div>
    <!-- End Off-Canvas Navigation Section -->
    