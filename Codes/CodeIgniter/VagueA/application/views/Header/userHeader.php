<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>University of San Carlos AVC Reservation System</title>
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
  </head>
   <body data-target=".navigation" data-spy="scroll">
    <div class="container-fluid">
      <div class="row">

      <header>
      <div class="header-container"> <!-- Header -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <img src="<?php echo base_url(); ?>assets/img/header-title.png" class="img-responsive" alt="Responsive image">
          </div>
          <div class="navigation navbar-collapse collapse">
            <ul class="nav navbar-nav menu-right">
                <li class="">
                  <a href="<?php echo base_url(); ?>main/home">Home</a>
                </li>
                <li class="">
                  <a href="<?php echo base_url(); ?>user/guideline">Guidelines</a>
                </li>
                <li class="">
                  <a href="#reservation">Reservation</a>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="false">
        Account <b class="caret"></b>
    </a>
    <ul class="dropdown-menu">
        <li><a tabindex="-1" href="<?php echo base_url(); ?>user/ChangePass">Change Password</a></li>
        <li class="divider"></li>
        <li><a tabindex="-1" href="<?php echo base_url(); ?>main/logOut">Logout</a></li>
    </ul>
</li>  
            </ul>
          </div>
        </div>
        </nav>
      </div> <!-- Header -->
    </header>