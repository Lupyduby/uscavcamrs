<div id="contentMargin">
<div class="container content equipments-container">
<div class="row">

 <div class="panel panel-default">
  <div class="panel-body">
    <div class="panel panel-success">
  <div class="col-md-12 panel-heading">
  <div class="col-md-9 title-content">
  <h3 class="panel-title"><span class="glyphicon glyphicon-list" aria-hidden="true"></span>  Reservation List for Endorsement</h3>
  </div>
  
  </div> <!-- panel heading-->
  <div class="panel-body">  
    <div class="equipments-content">
    <div class="table-responsive"> 
     <table id="table_id" class="display">
                            <thead class="theader-contents">
                             <tr>
                                <th>Requested by</th>
                                <th>Campus</th>
                                <th>Hall</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Purpose</th>
                                <th>Activity</th>
                                <th>Endorse</th>
                              
                            </tr>
                        </thead>
                        <tbody>
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
                                <td id="oneLineTd"><?php echo $result[$i]->Reservation_Purpose; ?></td>
                                <td id="oneLineTd"><?php echo $result[$i]->Activity_Name; ?></td>
                               
                                 <td id="oneLineTd2">
                  <div class="col-md-1">
                                     <form method="post" action="<?php echo base_url(); ?>EndorseApprove/endorseStatus">
                                         <input type="hidden" name="id" value="<?php echo $result[$i]->Reservation_ID; ?>" >
                                          <button type="submit" class="btn btn-success btn-xs"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></button>
                                      </form>
                    </div>
                    <div class="col-md-1">
                                        <a href="<?php echo "#removeModal".$i; ?>" role="button" class="btn btn-danger btn-xs" data-toggle="modal">
                                         <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                        </a>
                    </div>
                    

                                         <div id="<?php echo "removeModal".$i; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" id="deleteModalSize">
                                              <div class="modal-content">
                                                <div class="modal-header">
                                                  <form method="post" action="<?php echo base_url(); ?>EndorseApprove/emailDisEndorseApprove">
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
  </div> <!-- panelsuccess-->
  </div> <!-- panelbody-->
</div> <!-- paneldefault-->
   

    </div>
    </div> <!-- End of Container -->
  </div>
  
  <script>
  $(document).ready(function() {
    $('#example').dataTable();
} );
  </script>