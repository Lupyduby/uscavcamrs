<div id="contentMargin">
<div class="container equipments-container content">
<div class="row">
  <ol class="breadcrumb">
        <li><a href="#">Manage</a></li>
        <li class="active">Hall Management</li>
      </ol>
    
    <div class="panel panel-default">
		<div class="panel-body">
			<div class="panel panel-success">
				<div class="col-md-12 panel-heading">
				<div class="col-md-9 title-content">
	<h3 class="panel-title"><i class="fa fa-university"></i>  AV Hall Management</h3>
	</div>
				<div class="col-md-3">
	<a href="#addmodal" role="button" id="btnAddManage" data-toggle="modal" class="btn btn-primary btn-xs" data-toggle="modal" style="float:right;">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> ADD AV HALL</a>			                    
	</div>
				</div>
				<div class="panel-body">
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
												<div class="col-md-6">
                                                <input id="banner-name" class="form-control" type="text" value="<?php echo $result[$i]->Hall_Name; ?>" required="" name="name">
												</div>
                                           </div>

                                            <div class="form-group">
                                            <label class="control-label col-md-4">Capacity</label>
											<div class="col-md-6">
                                              <input id="banner-email" class="form-control" type="text" required="" value="<?php echo $result[$i]->Hall_Capacity; ?>" name="capacity">
											  </div>
                                            </div>
                                            <div class="form-group">
                                            <label class="control-label col-md-4">Description</label>
											<div class="col-md-6">
                                              <textarea id="banner-name" class="form-control" type="text"  required=""  name="description"><?php echo $result[$i]->Hall_Desc; ?></textarea>
											  </div>
                                           </div>
                    </div><!-- End of Modal body -->                      
                    <div class="modal-footer">
        <button type="submit" class="btn btn-success" id="btnAdd">Update</button>
					</div>
                    </form><!-- End of form sa modal -->
                    
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
                         <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			                            	 	<h4 class="modal-title">Are you sure you want to delete?</h4>
												</div>
                       
                      <div class="modal-footer">
					  <input type="hidden" name="id" value="<?php echo $result[$i]->Hall_ID; ?>" >
                          <button type="button" id="deleteModalNo" class="btn btn-default" data-dismiss="modal" aria-hidden="true">NO</button>
						  <button type="submit" id="deleteModalYes" class="btn btn-success" value="YES">YES</button>
                      </form>
					  </div>
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
</div>
</div>
	
	<div id="addmodal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title">Add New AV Hall</h4>
                    </div>
                    <div class="modal-body">
                    <!--form sa modal -->
					<form method="post" action="" class="form-horizontal">
                    <?php echo validation_errors(); ?>
                    <?php echo form_open('StaffWS/addHall'); ?>
									<!--backend nga ang hall ra sa campus maikit -->
                  
                      <div class="form-group">
                      <label class="control-label col-md-2">Campus</label>
					  <div class="col-md-8">
                     <select name="campus" class="form-control">
                        <option value="1">Downtown Campus</option>
                        <option value="2">South Campus</option>
                        <option value="3">Talamban Campus</option>
                    </select>
					</div>
                      </div>

					  <div class="form-group">
												<label class="control-label col-md-2">Name</label>
												<div class="col-md-8">
                        <input id="banner-name" class="form-control" type="text"  required="" name="name">
                      </div>
					  </div>

                      <div class="form-group">
                          <label class="control-label col-md-2">Capacity</label>
						  <div class="col-md-8">
                          <input id="banner-email" class="form-control" type="text" required="" name="capacity">
                      </div>
					  </div>
                         
                      <div class="form-group">
                          <label class="control-label col-md-2">Description</label>
						  <div class="col-md-8">
                          <textarea class="form-control" rows="3" id="textArea" name="desc"></textarea>
                      </div>
					  </div>
					  
                    </div><!-- End of Modal body -->
					<div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success" >Add</button>
      </div>
	  </form>
                    </div><!-- End of Modal content -->
                    </div><!-- End of Modal dialog -->
                  </div><!-- End of addModal --> 