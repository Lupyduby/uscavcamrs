<!DOCTYPE html>
<?xml version="1.0" encoding="UTF-8"?>
<configuration>
    <system.webServer>
        <staticContent>
            <mimeMap fileExtension=".woff" mimeType="application/font-woff" />
        </staticContent>
    </system.webServer>
</configuration>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>University of San Carlos AVC Reservation System</title>
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
  
   <!-- DataTables CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/jquery.dataTables.css">
    <!-- jQuery -->
    <script type="text/javascript" charset="utf8" src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
   <!-- DataTables -->
    <script type="text/javascript" charset="utf8" src=" <?php echo base_url(); ?>assets/js/jquery.dataTables.js"></script>
    
    <link rel='stylesheet' href='<?php echo base_url(); ?>assets/js/calendar/lib/cupertino/jquery-ui.min.css' />
<link href='<?php echo base_url(); ?>assets/css/fullcalendar.css' rel='stylesheet' />
<link href='<?php echo base_url(); ?>assets/css/fullcalendar.print.css' rel='stylesheet' media='print' />
<script src='<?php echo base_url(); ?>assets/js/calendar/lib/moment.min.js'></script>
<script src='<?php echo base_url(); ?>assets/js/calendar/fullcalendar.min.js'></script>


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
               <li class="dropdown">
                  <a href="#Calendar" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="false">
                  Calendar<b class="caret"></b>
                  </a>
                     <ul class="dropdown-menu">
                            <li><a tabindex="-1" href="<?php echo base_url(); ?>user/RigneyCal">Rigney Hall</a></li>
                            <li class="divider"></li>
                            <li><a tabindex="-1" href="<?php echo base_url(); ?>user/PhlpCal">Philip Van Engelen Hall</a></li>
                            <li class="divider"></li>
                            <li><a tabindex="-1" href="<?php echo base_url(); ?>user/HoepCal">Hoeppener Hall</a></li>
                            <li class="divider"></li>
                            <li><a tabindex="-1" href="<?php echo base_url(); ?>user/ButtenCal">Buttenbruch Hall</a></li>
                            <li class="divider"></li>
                            <li><a tabindex="-1" href="<?php echo base_url(); ?>user/GanseCal">Gansewinkel Hall</a></li>
                            <li class="divider"></li>
                            <li><a tabindex="-1" href="<?php echo base_url(); ?>user/BuchCal">Buchick Hall</a></li>
                    
                    </ul>
                </li>
                 <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="false">
                      Manage<b class="caret"></b>
                    </a>
                        <ul class="dropdown-menu">
                            <li><a tabindex="-1" href="<?php echo base_url(); ?>StaffWS/client">Client</a></li>
                            <li class="divider"></li>
                            <li><a tabindex="-1" href="<?php echo base_url(); ?>StaffWS/equipment">Equipment</a></li>
                            <li class="divider"></li>
                            <li><a tabindex="-1" href="<?php echo base_url(); ?>StaffWS/statistics">Statistics</a></li>
                            <li class="divider"></li>
                            <li><a tabindex="-1" href="<?php echo base_url(); ?>StaffWS/software">Software</a></li>
                        </ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="false">
                  <?php echo "Hi ".$this->session->userdata('fname'); ?> <b class="caret"></b>
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