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

     <!-- DataTables CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/jquery.dataTables.css">
    <!-- jQuery -->
    <script type="text/javascript" charset="utf8" src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
   <!-- DataTables -->
    <script type="text/javascript" charset="utf8" src=" <?php echo base_url(); ?>assets/js/jquery.dataTables.js"></script>
    
  </head>
  <div id="contentMargin">
<div class="container content equipments-container">
<div class="row">

 <div class="panel panel-default">
  <div class="panel-body">
    <div class="panel panel-success">
  <div class="col-md-12 panel-heading">
  <div class="col-md-9 title-content">
  <h3 class="panel-title"><span class="glyphicon glyphicon-list" aria-hidden="true"></span>  Reservation List for Approval</h3>
  </div>
  
  </div> <!-- panel heading-->
  <div class="panel-body">  
    <div class="equipments-content">
    <div class="table-responsive"> 
     <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead class="theader-contents">
                             <tr>
                                <th>Requested by</th>
                                <th>Campus</th>
                                <th>Hall</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Purpose</th>
                                <th>Activity</th>
                                <th>Endorsed by</th>
                                <th>Approve</th>
                              
                            </tr>
                        </thead>
                        <tbody class="table-contents">
                         <?php $i=0; 
                            while($i<$num)
                            {
                              
                          ?>
                            <tr>
                                <td id="oneLineTd"><?php echo $result[$i]->Person_FName; ?> <?php echo $result[$i]->Person_LName; ?></td>
                                <td id="oneLineTd"><?php echo $result[$i]->Campus_Name; ?></td>
                                <td id="oneLineTd"><?php echo $result[$i]->Hall_Name; ?></td>
                                <td id="oneLineTd"><?php echo date_format(date_create($result[$i]->Reservation_Date), "F d, Y"); ?></td>
                                <td id="oneLineTd"><?php echo date_format(date_create($result[$i]->Reservation_timeStart), " g:i A")." - "; ?> <?php echo date_format(date_create($result[$i]->Reservation_timeEnd), " g:i A"); ?></td>
                                <td><?php echo $result[$i]->Reservation_Purpose; ?></td>
                                <td><?php echo $result[$i]->Activity_Name; ?></td>
                                <td><?php echo $result[$i]->Reservation__Endorse_Status; ?></td>
                               
                                 <td id="oneLineTd"> 
                                     <form method="post" action="<?php echo base_url(); ?>EndorseApprove/approveStatus">
                                         <input type="hidden" name="id" value="<?php echo $result[$i]->Reservation_ID; ?>" >
                                          <button type="submit" class="btn btn-success btn-xs"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></button>
                                      </form>

                                     
                                        <a href="<?php echo "#removeModal".$i; ?>" role="button" class="btn btn-danger btn-xs" data-toggle="modal">
                                         <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                        </a>

                                         <div id="<?php echo "removeModal".$i; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" id="deleteModalSize">
                                              <div class="modal-content">
                        
                                                <div class="modal-header">
                                                  <form method="post" action="<?php echo base_url(); ?>StaffWS/deleteClient">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                          <h4 class="modal-title">Are you sure you want to delete?</h4>
                        </div>
                        
                        <div class="modal-footer">
                                                    <input type="hidden" name="id" value="<?php echo $result[$i]->Reservation_ID; ?>" >
                          <button type="button" id="deleteModalNo" class="btn btn-default" data-dismiss="modal" aria-hidden="true">NO</button>
                          <button type="submit" id="deleteModalYes" class="btn btn-success" value="YES">YES</button>
                                                    
                                                 </form>
                        </div>
                                              </div>
                                            </div>
                                          </div>
                                        
                </td>
                            </tr>
                            
                         <?php $i++; } ?>
                        </tbody>
         </table>
     </div>
    </div>
    </div>
    </div> <!-- panel-success -->
  </div> <!-- panel-body -->
  </div> <!-- panel-default -->
  </div>
</div>
</div><!-- contentMargin -->

<script>
  $(document).ready(function() {
    $('#example').dataTable();
} );
  </script>

  



            