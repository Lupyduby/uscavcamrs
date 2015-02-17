<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>University of San Carlos AVC Reservation System</title>
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- DataTables CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/dataTables.tableTools.css">
    <!-- jQuery -->
    <script type="text/javascript" charset="utf8" src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
   <!-- DataTables -->
    <script type="text/javascript" charset="utf8" src=" <?php echo base_url(); ?>assets/js/jquery.dataTables.js"></script>
    <script type="text/javascript" charset="utf8" src=" <?php echo base_url(); ?>assets/js/dataTables.tableTools.js"></script>
     <script type="text/javascript" charset="utf8" src=" <?php echo base_url(); ?>assets/js/dataTables.tableTools.min.js"></script>
  
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

$(document).ready(function() {
    $('#table_dept').DataTable( {
        dom: 'T<"clear">lfrtip',
        tableTools: {
            "aButtons": [
                {
                    "sExtends": "xls",
                    "mColumns": [0,1,2,3,4,5,6,7,8,9,10,11,12],
                },
                {
                    "sExtends": "pdf",
                    "sPdfOrientation": "landscape",
                    "mColumns": [0,1,2,3,4,5,6,7,8,9,10,11,12],
                },
                
            ],
            "sSwfPath": "<?php echo base_url(); ?>assets/js/swf/copy_csv_xls_pdf.swf"
        }
    } );
} );



$(document).ready(function() {
    $('#table_soft').DataTable( {
        dom: 'T<"clear">lfrtip',
        tableTools: {
            "aButtons": [
                {
                    "sExtends": "xls",
                    "mColumns": [0,1,2,3,4,5,6],
                    "bHeader": true,
                },
                {
                    "sExtends": "pdf",
                    "sPdfOrientation": "landscape",
                    "mColumns": [0,1,2,3,4,5,6],                    
                    "bHeader": true,
                },
                
            ],
            "sSwfPath": "<?php echo base_url(); ?>assets/js/swf/copy_csv_xls_pdf.swf"
        }
    } );
} );


    </script>   

          <!--  "sSwfPath": "<?php echo base_url(); ?>assets/js/swf/copy_csv_xls_pdf.swf"
-->
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
                  <a href="<?php echo base_url(); ?>user/calendar">Calendar</a>
                </li>
                <li class="">
                  <a href="<?php echo base_url(); ?>user/queryReservationList">Block</a>
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
                            <li><a tabindex="-1" href="<?php echo base_url(); ?>StaffWS/hall">AV Hall</a></li>
                            <li class="divider"></li>
                            <li><a tabindex="-1" href="<?php echo base_url(); ?>StaffWS/reservationOK">Reservation</a></li>
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