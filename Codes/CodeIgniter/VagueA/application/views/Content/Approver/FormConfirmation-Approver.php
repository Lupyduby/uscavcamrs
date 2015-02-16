
<div id="FCE">
    <div class="overall-container">
        <div class="reservation-area">
        <dl class="tabs" data-tab> 
            <center>Forms to be Approve</center>
            
        </dl> 

        <div class="tabs-content"> 
        <div class="content active" id="panel1"> 
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
                                <th>Endorsed by</th>
                                <th>Approve</th>
                              
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
                                <td><?php echo $result[$i]->Reservation_Purpose; ?></td>
                                <td><?php echo $result[$i]->Activity_Name; ?></td>
                                <td><?php echo $result[$i]->Reservation__Endorse_Status; ?></td>
                               
                                 <td id="oneLineTd"> 
                                     <form method="post" action="<?php echo base_url(); ?>EndorseApprove/approveStatus">
                                         <input type="hidden" name="id" value="<?php echo $result[$i]->Reservation_ID; ?>" >
                                          <button type="submit"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></button>
                                      </form>

                                     
                                        <a href="<?php echo "#removeModal".$i; ?>" role="button" class="btn3 btn-custom" data-toggle="modal">
                                         <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                        </a>

                                         <div id="<?php echo "removeModal".$i; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" id="deleteModalSize">
                                              <div class="modal-content">
                                                <div class="modal-header">
                                                  <form method="post" action="<?php echo base_url(); ?>StaffWS/deleteClient">
                                                    <textarea rows="4" cols="50" name="delMessage"></textarea>
                                                    <input type="hidden" name="id" value="<?php echo $result[$i]->Reservation_ID; ?>" >
                                                    <button id="deleteModalYes"class="btn btn-default btn-sm" type="submit" value="YES">YES</button>
                                                    <button id="deleteModalNo" type="button" class="close btn btn-default btn-sm" data-dismiss="modal" aria-hidden="true">NO</button>
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
        <button name="button" type="button" style="margin-top:1%">Submit</button>
        
        </div>
        </div>
    </div>
  
  </div>