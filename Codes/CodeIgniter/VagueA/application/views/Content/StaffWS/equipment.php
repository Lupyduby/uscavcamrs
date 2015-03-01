<div id="contentMargin">
<div class="container equipments-container content">
<div class="row">
<ol class="breadcrumb">
        <li><a href="#">Manage</a></li>
        <li class="active">Equipment Management</li>
      </ol>
<div class="panel panel-default">
  <div class="panel-body">
  <div class="panel panel-success">
  <div class="col-md-12 panel-heading">
  <div class="col-md-9 title-content">
    <h3 class="panel-title"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span>  Equipment Management</h3>
  </div>
  <div class="col-md-3">
  <a href="#addmodal" role="button" class="btn btn-primary btn-xs" id="btnAddManage" data-toggle="modal" style="float:right;">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> ADD EQUIPMENT</a>                         
  </div>
  </div>
  
  <div class="panel-body">
         <div class="equipments-content">
        <div class="table-responsive">
          <table id="table_id" class="display">
            <thead class="theader-contents">
              <tr>
                <th><h4>Hall</h4></th>
                <th><h4>Name</h4></th>
                <th><h4>Brand</h4></th>
                <th><h4>Serial</h4></th>
                <th><h4>Remarks</h4></th>
                <th><h4>Quantity</h4></th>
                <th id="oneLineTd"><h4>Date of Purchase</h4></th>
                <th id="oneLineTd"><h4>Last Update</h4></th>
                <th><h4>Update</h4></th>
                <th><h4>Delete</h4></th>
              </tr>
            </thead>
            
              <?php $i=0; 
                while($i<$num)
                {
                   
              ?>
                      

          <tr>
            <td id="oneLineTd"><?php if($result[$i]->Hall_ID) echo $result[$i]->Hall_Name; else echo 'N/A'; ?></td>
            <td><?php echo $result[$i]->Asset_Name; ?></td>
            <td><?php echo $result[$i]->Asset_Brand; ?></td>
            <td><?php echo $result[$i]->Asset_Serial; ?></td>
            <td><?php echo $result[$i]->Asset_Remarks; ?></td>
            <td><?php echo $result[$i]->Asset_Quantity; ?></td>
            <td id="oneLineTd"><?php echo date("F d, Y",strtotime($result[$i]->Asset_datePurchase)); ?></td>
            <td id="oneLineTd"><?php echo date("F d, Y",strtotime($result[$i]->Asset_dateUpdate )); ?></td>

            <td> 
               <a href="<?php echo "#editmodal".$i; ?>" role="button" class="btn btn-custom" data-toggle="modal">
                <span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
                
                        <!-- editModal -->
                        
                      <div id="<?php echo "editmodal".$i; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                          <h4 class="modal-title">Update Equipments</h4>
                        </div>
                        <div class="modal-body">
                        <!--form sa modal -->
                         <form method="post" action="<?php echo base_url(); ?>StaffWS/updateEquipment" class="form-horizontal">
                
                          <input type="hidden"  value="<?php echo $result[$i]->Asset_ID; ?>" name="id">
                          
               

                        <div class="form-group">
                            <label class="control-label col-lg-4">Name</label>
              <div class="col-md-4">
                            <input id="banner-name" class="form-control" type="text"  value="<?php echo $result[$i]->Asset_Name; ?>" required="" name="name">
                         </div>
             </div>

                          <div class="form-group">
                          <label class="control-label col-lg-4">Brand</label>
              <div class="col-md-4">
                            <input id="banner-email" class="form-control" type="text" value="<?php echo $result[$i]->Asset_Brand; ?>" required="" name="brand">
                          </div>
              </div>
              
                          <div class="form-group">
                          <label class="control-label col-lg-4">Serial #</label>
              <div class="col-md-4">
                            <input id="banner-name" class="form-control" type="text" value="<?php echo $result[$i]->Asset_Serial; ?>" required="" name="serial">
                         </div>
             </div>
             
                          <div class="form-group">
                          <label class="control-label col-lg-4">Remarks</label>
              <div class="col-md-4">
                               <select name="remarks" class="form-control">
                                  <option value="Functioning" id="office" <?php if($result[$i]->Asset_Remarks=="Functioning") echo "selected"; ?>>Functioning</option>
                                  <option value="Damage" <?php if($result[$i]->Asset_Remarks=="Damage") echo "selected"; ?>>Damage</option>
                                    <option value="others" <?php if($result[$i]->Asset_Remarks!="Damage" && $result[$i]->Asset_Remarks!="Functioning") echo "selected"; ?>>Others</option>
                              </select>
                              <input id="banner-email" class="form-control" type="text" placeholder ="If others:"  name="remarks2    ">
                            </div>
              </div>
         
              
                          <div class="form-group">
                          <label class="control-label col-lg-4">Quantity</label>
              <div class="col-md-4">
                            <input id="banner-email" class="form-control" type="number" min="1" value="<?php echo $result[$i]->Asset_Quantity; ?>" required="" name="qty">
                          </div>
              </div>
                       <div class="form-group">
                             <label class="control-label col-lg-2">Hall</label>
                                   <div class="col-md-4">
                                    <?php if($this->session->userdata('campus')==3) 
                                    {
                                      ?>
                                      <select class="form-control" id="hall" name="hall1">
                                        <option value="1" <?php if($result[$i]->Hall_ID==1) echo "selected"; ?>>Rigney Hall</option>
                                        <option value="2" <?php if($result[$i]->Hall_ID==2) echo "selected"; ?>>Heoppener Hall</option>
                                        <option value="3" <?php if($result[$i]->Hall_ID==3) echo "selected"; ?>>CAS AV Hall</option>
                                        <option value="0" <?php if($result[$i]->Hall_ID==0) echo "selected"; ?>>N/A</option>
                                      </select>
                                    <?php } ?>
                                    <?php if($this->session->userdata('campus')==1) 
                                    {
                                      ?>
                                      <select class="form-control" id="hall" name="hall2">
                                        <option value="5" <?php if($result[$i]->Hall_ID==5) echo "selected"; ?>>Buttenbruch Hall</option>
                                        <option value="6" <?php if($result[$i]->Hall_ID==6) echo "selected"; ?>>Ganseweinkel Hall</option>
                                        <option value="0" <?php if($result[$i]->Hall_ID==0) echo "selected"; ?>>N/A</option>
                                      </select>
                                    <?php } ?>
                                    <?php if($this->session->userdata('campus')==2) 
                                    {
                                      ?>
                                        <select class="form-control" id="hall" name="hall3">
                                        <option value="4">Buchick Hall</option>
                                        <option value="0">N/A</option>
                                      </select>
                                     
                                    <?php } ?>
                                  </div>
                           </div>
                            
                          
                         </div><!-- End of Modal body -->
             <div class="modal-footer">
        <button type="submit" class="btn btn-success" id="btnAdd">Update</button>
      </div>
                        </div><!-- End of Modal content -->
                        </div><!-- End of Modal dialog -->
                      </div><!-- End of editModal -->
                       </form><!-- End of form sa modal -->
                      </td>

                         <td> 
                         <a href="<?php echo "#deletemodal".$i; ?>" role="button" class="btn btn-custom" data-toggle="modal">
                            <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                            </a>

                            <div id="<?php echo "deletemodal".$i; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                              <div class="modal-dialog" id="deleteModalSize">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <form method="post" action="<?php echo base_url(); ?>StaffWS/deleteEquipment">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                      <h4 class="modal-title">Are you sure you want to delete?</h4>
                  </div>
                  <div class="modal-footer">
                                      <input type="hidden" name="id" value="<?php echo $result[$i]->Asset_ID; ?>" >
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
              
           </table>
          </div>
        </div>
     
    </div>
  </div>
</div>
           
            
  

          
   </div>

      </div>
  </div>
</div>

        <div id="addmodal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title">Add New Equipments</h4>
                    </div>
                    <div class="modal-body">
                    <!--form sa modal -->
                    

                    <?php echo validation_errors(); ?>

                    <form method="post" action="<?php echo base_url(); ?>StaffWS/addEquipment" class="form-horizontal">
                    
                        
                   
                      <div class="form-group">
                         <label class="control-label col-lg-2">Name</label>
             <div class="col-md-6">
                        <input id="banner-name" class="form-control" type="text"  required="" name="name">
                     </div>
           </div>
                      <div class="form-group">
                      <label class="control-label col-lg-2">Brand</label>
            <div class="col-md-6">
                        <input id="banner-email" class="form-control" type="text" required="" name="brand">
                      </div>
            </div>
                      <div class="form-group">
                      <label class="control-label col-lg-2">Serial #</label>
            <div class="col-md-6">
                        <input id="banner-name" class="form-control" type="text"  required="" name="serial">
                     </div>
           </div>
                     
                      <div class="form-group">
                      <label class="control-label col-lg-2">Quantity</label>
            <div class="col-md-6">
                        <input id="banner-email" class="form-control" type="number" min="1" required="" name="qty">
                      </div>
            </div>

            <div class="form-group">
                      <label class="control-label col-lg-2">Date of Purchase</label>
            <div class="col-md-6">
                        <input id="banner-email" class="form-control" type="date" min="1" required="" name="date">
                      </div>
            </div>

            <div class="form-group">
                             <label class="control-label col-lg-2">Hall</label>
                                   <div class="col-md-4">
                                    <?php if($this->session->userdata('campus')==3) 
                                    {
                                      ?>
                                      <select class="form-control" id="hall" name="hall1">
                                        <option value="1">Rigney Hall</option>
                                        <option value="2">Heoppener Hall</option>
                                        <option value="3">CAS AV Hall</option>
                                        <option value="0">N/A</option>
                                      </select>
                                    <?php } ?>
                                    <?php if($this->session->userdata('campus')==1) 
                                    {
                                      ?>
                                      <select class="form-control" id="hall" name="hall2">
                                        <option value="5">Buttenbruch Hall</option>
                                        <option value="6">Ganseweinkel Hall</option>
                                        <option value="0">N/A</option>
                                      </select>
                                    <?php } ?>
                                    <?php if($this->session->userdata('campus')==2) 
                                    {
                                      ?>
                                        <select class="form-control" id="hall" name="hall3">
                                        <option value="4">Buchick Hall</option>
                                        <option value="0">N/A</option>
                                      </select>
                                     
                                    <?php } ?>
                                  </div>
                           </div>

            
                    </div><!-- End of Modal body -->
          <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success" id="btnAdd">Save</button>
      </div>
    </form>
                    </div><!-- End of Modal content -->
                    </div><!-- End of Modal dialog -->
                  </div><!-- End of addModal --> 
   
