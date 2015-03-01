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
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css">
 <!-- DataTables CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/jquery.dataTables.css">
    <!-- jQuery -->
    <script type="text/javascript" charset="utf8" src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
   <!-- DataTables -->
    <script type="text/javascript" charset="utf8" src=" <?php echo base_url(); ?>assets/js/jquery.dataTables.js"></script>
    <script type="text/javascript" charset="utf8" src=" <?php echo base_url(); ?>assets/js/dataTables.bootstrap.js"></script>

 <script type="text/javascript">
$(document).ready(function() {
    $('#table_id').DataTable( {
        dom: 'T<"clear">lfrtip',
        tableTools: {
            "aButtons": [
                {
                    "sExtends": "xls",
                    "mColumns": [0,1,2,3,4],
                },
                {
                    "sExtends": "pdf",
                    "sPdfOrientation": "landscape",
                    "mColumns": [0,1,2,3,4],
                },
                
            ],
            "sSwfPath": "<?php echo base_url(); ?>assets/js/swf/copy_csv_xls_pdf.swf"
        }
    } );
} );

</script>

<!--
calendar 
!-->

<link rel='stylesheet' href='<?php echo base_url(); ?>assets/js/calendar/lib/cupertino/jquery-ui.min.css' />
<link href='<?php echo base_url(); ?>assets/css/fullcalendar.css' rel='stylesheet' />
<link href='<?php echo base_url(); ?>assets/css/fullcalendar.print.css' rel='stylesheet' media='print' />
<script src='<?php echo base_url(); ?>assets/js/calendar/lib/moment.min.js'></script>
<script src='<?php echo base_url(); ?>assets/js/calendar/fullcalendar.min.js'></script>
  </head>
  
  
   <body data-target=".navigation" data-spy="scroll">
    <div class="container-fluid">
      <div class="row">

       <header><!-- Header -->
          <div class="header-container"> 
                <div id="navbar-green" class="navbar navbar-default navbar-fixed-top" role="navigation">
                    <div class="container-fluid">
                        <div class="navbar-header  col-sm-4 col-md-5">
                            <img src="<?php echo base_url(); ?>assets/img/header-title.png" class="img-responsive" alt="Responsive image">
                            
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                            </button>
                        </div>
                    </div>
        <div class="collapse navbar-collapse navbar-menubuilder">
                            <ul class="nav navbar-nav navbar-left">
                                <li ><a id="home" href="<?php echo base_url(); ?>main/home"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>  Home</a></li>
                                <li><a href="<?php echo base_url(); ?>user/guideline"><span class="glyphicon glyphicon-list" aria-hidden="true"></span>  Guidelines</a></li>
                                <li class="dropdown">
                  <a href="#Calendar" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="false"> <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                  Calendar <b class="caret"></b></a>
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
                                <li><a href="<?php echo base_url(); ?>user/reservationList"><span class="glyphicon glyphicon-hand-up" aria-hidden="true"></span>  Reservation</a></li>
                            </ul>
        
      <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="false"> <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                  <?php echo "Hi ".$this->session->userdata('fname'); ?> <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a tabindex="-1" href="<?php echo base_url(); ?>user/ChangePass">Change Password</a></li>
          <li class="divider"></li>
          <li><a tabindex="-1" href="<?php echo base_url(); ?>main/logOut"><span class="glyphicon glyphicon-off" aria-hidden="true"></span> Logout</a></li>
        </ul>
        </li>  
            </ul>
      </div>
        </div>
      </div> <!-- Header -->
    </header>