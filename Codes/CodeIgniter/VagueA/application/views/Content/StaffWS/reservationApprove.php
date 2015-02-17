<div id="contentMargin">
<div class="container equipments-container">
<div class="row">
  <ol class="breadcrumb">
        <li><a href="#">Manage</a></li>
        <li class="active">Approved Reservation</li>
      </ol>
    
    <div class="col-lg-12" role="main">
      <h2 id="equip-manage" class="page-header">Approved Reservation</h2>
      <div class="row action-header">
        <div class="col-md-6 col-md-offset-6">
           <a href="#addmodal" role="button" id="btnAddManage" data-toggle="modal"><center>
            <span class="glyphicon glyphicon-plus" aria-hidden="true">ADD CLIENT</span></center></a>

         </div>              
                <div id="addmodal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title">Add Client</h4>
                    </div>
                    <div class="modal-body">
                    <!--form sa modal -->
                    <form method="post" action="<?php echo base_url(); ?>StaffWS/addClient">
                           
                    <div class="form-group">
                        <label class="control-label col-md-4">ID Number</label>
                        <input id="banner-name" class="form-control-group" type="text"   name="idNum">
                     </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">SurName</label>
                        <input id="banner-name" class="form-control-group" type="text"   name="lname">
                     </div>                                     
                   

                    <div class="form-group">
                        <label class="control-label col-md-4">ForeName</label>
                        <input id="banner-name" class="form-control-group" type="text"   name="fname">
                     </div>
                     <div class="form-group">
                        <label class="control-label col-md-4">Email</label>
                        <input id="banner-name" class="form-control-group" type="text"   name="email">
                     </div>


                     <div class="form-group">
                      <label class="control-label col-md-4">Campus</label>
                     <select name="campus" class="form-control-group">
                        <option value="1">Downtown Campus</option>
                        <option value="2">North Campus</option>
                        <option value="3">South Campus</option>
                        <option value="4">Talamban Campus</option>
                    </select>
                    </div>

                      <div class="form-group">
                      <label class="control-label col-md-4">User type</label>
                      <select name="type" class="form-control-group">
                          <option value="Chairman" id="ordi">Chairman</option>
                          <option value="Dean" id="ordi">Dean</option>
                          <option value="Faculty" id="ordi">Faculty</option>
                          <option value="OSA" id="vpa">OSA</option>
                          <option value="SOC" id="soType">Student Organization - Co-Curricular</option>
                          <option value="SOE" id="soType">Student Organization - Extra-Curricular</option>
                          <option value="VPA"  id="vpa">VPA</option>
                          <option value="VPAA" id="vpa">VPAA</option>
                      </select>
                      </div>

                      
                      <div id="ordinary" class="form-group">
                      <label class="control-label col-md-4">College</label>
                        <select name="college" class="form-control-group">
                            <option value="SBE">SBE</option>
                            <option value="SLG">SLG</option>
                            <option value="COED">COED</option>
                            <option value="CAS">CAS</option>
                            <option value="CAFA">CAFA</option>
                            <option value="COE">COE</option>
                            <option value="SHCP">SHCP</option>
                        </select>
                        
                      </div>
                      
                      
                      
                      <div class="form-group">
                          <label class="control-label col-md-4">Department/Office/SO Name</label>
                          <input id="banner-name" class="form-control-group" type="text" name="officeName"><br><br>
                      </div>

                     <div class="form-group">
                      
                       <button class="btn btn-default btn-submit" type="submit" id="btnAdd">Add</button>
                      </div>
                      </form>
                  <!-- End of form sa modal -->
                      
                     </div><!-- End of Modal body -->
                    </div><!-- End of Modal content -->
                    </div><!-- End of Modal dialog -->
                  </div><!-- End of editModal -->
           
        
        </div>
      
      
      
      
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
                  <th id="oneLineTd">Approve</th>
                  <th id="oneLineTd">Status</th>
                
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

      </div>
     
    </div>
    </div>
    </div> <!-- End of Container -->
  </div>
</div>
  