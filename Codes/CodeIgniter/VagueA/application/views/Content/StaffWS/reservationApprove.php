                                    <div class="modal-header">
<div id="contentMargin">
<div class="container equipments-container content">
<div class="row">
  <ol class="breadcrumb">
        <li><a href="#">Manage</a></li>
        <li class="active">Approved Reservation</li>
      </ol>
    <div class="panel panel-default">
  <div class="panel-body">
  <div class="panel panel-success">
  <div class="col-md-12 panel-heading">
  <div class="col-md-9 title-content">
      <h3 class="panel-title"><span class="glyphicon glyphicon-list" aria-hidden="true"></span>  List of Approved Reservations</h3>
  </div>            

        </div>
    
    <div class="panel-body">
      <div class="equipments-content">
        <div class="table-responsive">
          <table id="table_id" class="display">
            <thead class="theader-contents">
              <tr>
                  <th id="oneLineTd">Requested by</th>
                  <th id="oneLineTd">Campus</th>
                  <th id="oneLineTd">Hall</th>
                  <th id="oneLineTd">Date</th>
                  <th id="oneLineTd">Time</th>
                  <th id="oneLineTd">Purpose</th>
                  <th id="oneLineTd">Activity</th>
                  <th id="oneLineTd">Endorsed by</th>
                  <th id="oneLineTd">Approved by</th>
                  <th id="oneLineTd">Action</th>
                
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
                    <td id="oneLineTd"><?php echo $result[$i]->Reservation_Purpose; ?></td>
                    <td id="oneLineTd"><?php echo $result[$i]->Activity_Name; ?></td>
                    <td id="oneLineTd"><?php echo $result[$i]->Reservation__Endorse_Status; ?></td>
                    <td id="oneLineTd"><?php echo $result[$i]->Reservation_Approve_Status; ?></td>
                   


                     <td id="oneLineTd"> 
                         
                         <?php if($result[$i]->Reservation_Status=="OK")
                         echo "<a href= #removeModal".$i." role='button' data-toggle='modal' class='btn btn-danger btn-xs'>
                             <span class='glyphicon glyphicon-remove' aria-hidden='true'></span>CANCEL 
                            </a>";

                          else
                            echo 'CANCELED';

                          ?>
                               


                             <div id="<?php echo "removeModal".$i; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog" id="deleteModalSize">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <form method="post" action="<?php echo base_url(); ?>StaffWS/updateReservationStatusCancel">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                      <h4 class="modal-title">Are you sure you want to cancel?</h4>
                                      </div>
                                      <div class="modal-footer">
                                        <input type="hidden" name="id" value="<?php echo $result[$i]->Reservation_ID; ?>" >
                                        <button type="button" id="deleteModalNo" class="btn btn-default" data-dismiss="modal" aria-hidden="true">Close</button>
                                         <button type="submit" id="deleteModalYes" class="btn btn-success" value="YES">Yes</button>
                                        </div>
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
     
    </div>
  </div>
  </div>
  </div> <!-- End of row -->
  </div> <!-- End of container -->
    </div> <!-- End of Container -->
  </div>
  
  
  