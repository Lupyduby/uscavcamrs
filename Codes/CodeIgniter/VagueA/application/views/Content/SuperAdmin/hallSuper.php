<div id="contentMargin">
<div class="container equipments-container">
<div class="row">
  <ol class="breadcrumb">
        <li><a href="#">Manage</a></li>
        <li class="active">Hall Management</li>
      </ol>
    
    <div class="col-lg-12" role="main">
      <h2 id="equip-manage" class="page-header">AV Hall Management</h2>
      <div class="row action-header">
        <div class="col-md-6 col-md-offset-6">
		<a href="#addmodal" role="button" id="btnAddManage" data-toggle="modal"><center>
            <span class="glyphicon glyphicon-plus" aria-hidden="true">ADD AVHALL</span></center></a>
      <!-- addModal -->
                  <div id="addmodal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title">Add New AV Hall</h4>
                    </div>
                    <div class="modal-body">
                    <!--form sa modal -->
                    <?php echo validation_errors(); ?>
                    <?php echo form_open('StaffWS/addHall'); ?>
									<!--backend nga ang hall ra sa campus maikit -->
                  
                       <div class="form-group">
                      <label class="control-label col-md-4">Campus</label>
                     <select name="campus" class="form-control2">
                        <option value="1">Downtown Campus</option>
                        <option value="2">South Campus</option>
                        <option value="3">Talamban Campus</option>
                    </select>
                      </div>

											<div class="form-group">
												<label class="control-label col-md-4">Name</label>
                        <input id="banner-name" class="form-control2" type="text"  required="" name="name">
                      </div>

                      <div class="form-group">
                          <label class="control-label col-md-4">Capacity</label>
                          <input id="banner-email" class="form-control2" type="text" required="" name="capacity">
                      </div>
                         
                      <div class="form-group">
                          <label class="control-label col-md-4">Description</label>
                          <textarea name="desc"></textarea>
                      </div>
                          <button class="btn btn-default btn-submit" type="submit" id="btnAdd">ADD</button>
                                            
                    </form><!-- End of form sa modal -->
                    </div><!-- End of Modal body -->
                    </div><!-- End of Modal content -->
                    </div><!-- End of Modal dialog -->
                  </div><!-- End of addModal --> 

        </div>
      </div>

           
        </div>
      </div>
      
      
      <div class="tab-pane">
      <div class="equipments-content">
        <div class="table-responsive">
          <table id="table_id" class="display">
            <thead class="theader-contents">
              <tr>
                <th><h4>Campus</h4></th>
                <th><h4>Name</h4></th>
                <th><h4>Capacity</h4></th>
                <th><h4>Description</h4></th>
                <th><h4>Update</h4></th>
				        <th><h4>Delete</h4></th>
                
              </tr>
            </thead>
            <tbody class="table-contents">
              <?php $i=0; 
                while($i<$num)
                {
                  
              ?>
                <tr>
                  <td><?php echo $result[$i]->Campus_Name; ?></td>
                    <td><?php echo $result[$i]->Hall_Name; ?></td>
                    <td><?php echo $result[$i]->Hall_Capacity; ?></td>
                    <td><?php echo $result[$i]->Hall_Desc; ?></td>
                   
                    <td>
                       <a href="<?php echo "#editmodal".$i; ?>" role="button"  data-toggle="modal"><center>
            <span class="glyphicon glyphicon-edit" aria-hidden="true"></span></center></a>
      <!-- addModal -->
                  <div id="<?php echo "editmodal".$i; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title">Update AV Hall</h4>
                    </div>
                    <div class="modal-body">
                    <!--form sa modal -->
                    <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>StaffWS/updateHall">
									<!--backend nga ang hall ra sa campus maikit -->
                  <input type="hidden" name="id" value="<?php echo $result[$i]->Hall_ID; ?>" />
                                      
											<div class="form-group">
												<label class="control-label col-md-4">Name</label>
                                                <input id="banner-name" class="form-control2" type="text" value="<?php echo $result[$i]->Hall_Name; ?>" required="" name="name">
                                           </div>

                                            <div class="form-group">
                                            <label class="control-label col-md-4">Capacity</label>
                                              <input id="banner-email" class="form-control2" type="text" required="" value="<?php echo $result[$i]->Hall_Capacity; ?>" name="capacity">
                                            </div>
                                            <div class="form-group">
                                            <label class="control-label col-md-4">Description</label>
                                              <textarea id="banner-name" class="form-control2" type="text"  required=""  name="description"><?php echo $result[$i]->Hall_Desc; ?></textarea>
                                           </div>
                                            <button class="btn btn-default btn-submit" type="submit" id="btnAdd">Update</button>
                                            
                    </form><!-- End of form sa modal -->
                    </div><!-- End of Modal body -->
                    </div><!-- End of Modal content -->
                    </div><!-- End of Modal dialog -->
                  </div><!-- End of addModal --> 
					</td>
					<td>

            <a href="<?php echo "#deletemodal".$i; ?>" role="button" class="btn btn-custom" data-toggle="modal">
                <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                </a>

                <div id="<?php echo "deletemodal".$i; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog" id="deleteModalSize">
                    <div class="modal-content">
                      <div class="modal-header">
                        <form method="post" action="<?php echo base_url(); ?>StaffWS/deleteHall">
                          Are you sure you want to delete?
                          <input type="hidden" name="id" value="<?php echo $result[$i]->Hall_ID; ?>" >
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
    </div>
    </div> <!-- End of Container -->
  </div>