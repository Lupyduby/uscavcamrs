<div id="contentMargin">
<div class="container equipments-container content">
<div class="row">

  <ol class="breadcrumb">
        <li><a href="#">Manage</a></li>
        <li class="active">Staff Management</li>
      </ol>
	<div class="panel panel-default">
		<div class="panel-body">
			<div class="panel panel-success">
				<div class="col-md-12 panel-heading">
				<div class="col-md-9 title-content">
	<h3 class="panel-title"><i class="fa fa-group"></i>  Staff Management</h3>
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
                <th><h4>ID Number</h4></th>
                <th><h4>Surname</h4></th>
                <th><h4>Forename</h4></th>
                <th><h4>Type</h4></th>
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
                    <td><?php echo $result[$i]->Person_Username; ?></td>
                    <td><?php echo $result[$i]->Person_Lname; ?></td>
                    <td><?php echo $result[$i]->Person_Fname; ?></td>
                    <td><?php echo $result[$i]->Person_type; ?></td>
                   
                    <td>
			<a href="<?php echo "#editmodal".$i; ?>" role="button" class="btn btn-custom" data-toggle="modal">
                      <span class="glyphicon glyphicon-edit"  aria-hidden="true"></span></a>
      <!-- addModal -->
                  <div id="<?php echo "editmodal".$i; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				  
                    <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title">Update Staff</h4>
                    </div>
                    <div class="modal-body">
					<form method="post" action="<?php echo base_url(); ?>superAdmin/updateStaff" class="form-horizontal">
                    <!--form sa modal -->
									<!--backend nga ang hall ra sa campus maikit -->
                  <input type="hidden"  value="<?php echo $result[$i]->Person_ID; ?>" name="id">
                            <input type="hidden"  value="<?php echo $result[$i]->Staff_ID; ?>" name="id">
                                      
											<div class="form-group">
												<label class="control-label col-md-4">Campus</label>
												<div class="col-md-6">
                                                <select name="campus" class="form-control">
                                  <option value="1" <?php if($result[$i]->Campus_ID==1) echo "selected"; ?>>Downtown</option>  
                                  <option value="2" <?php if($result[$i]->Campus_ID==2) echo "selected"; ?>>South Campus</option>
                                  <option value="3" <?php if($result[$i]->Campus_ID==3) echo "selected"; ?>>Talamban Campus</option>
                              </select> 
												</div>
                                           </div>

                                            <div class="form-group">
                                            <label class="control-label col-md-4">Surname</label>
											<div class="col-md-6">
                                              <input id="banner-name" class="form-control" type="text"  value="<?php echo $result[$i]->Person_Lname; ?>" name="lname">
											  </div>
                                            </div>
                                            <div class="form-group">
                                            <label class="control-label col-md-4">ForeName</label>
											<div class="col-md-6">
                                              <input id="banner-name" class="form-control" type="text" value="<?php echo $result[$i]->Person_Fname; ?>"   name="fname">
											  </div>
                                           </div>
										   
										   <div class="form-group">
                                            <label class="control-label col-md-4">Email</label>
											<div class="col-md-6">
                                              <input id="banner-name" class="form-control" type="text" value="<?php echo $result[$i]->Person_Email; ?>"   name="email">
											  </div>
                                           </div>
										   
										   
                    </div><!-- End of Modal body -->                      
                    <div class="modal-footer">
					 <div class="col-lg-10 col-lg-offset-2">
        <button type="submit" class="btn btn-success" id="btnAdd">Update</button>
		<form method="post" action="<?php echo base_url(); ?>superAdmin/resetPasswordStaff">
                                 <input type="hidden"  value="<?php echo $result[$i]->Person_ID; ?>" name="id">
                                 <input type="hidden"  value="<?php echo $result[$i]->Person_Username; ?>" name="username">
                                 <button class="btn btn-default" type="submit">Reset Password</button>
                              </form>
							  </form>
					</div>
					
					</div>
                    <!-- End of form sa modal -->
                    
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
					  
                        <form method="post" action="<?php echo base_url(); ?>StaffWS/deleteClient">
                         <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			                            	 	<h4 class="modal-title">Are you sure you want to delete?</h4>
												</div>
                       
                      <div class="modal-footer">
					  <input type="hidden" name="id" value="<?php echo $result[$i]->Staff_ID; ?>" >
							                        <input type="hidden" name="type" value="<?php echo $result[$i]->Person_type; ?>" >
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
                      <h4 class="modal-title">Add Staff</h4>
                    </div>
                    <div class="modal-body">
                    <!--form sa modal -->
                    <form method="post" action="<?php echo base_url(); ?>superAdmin/addstaff" class="form-horizontal">
                           
                    <div class="form-group">
                        <label class="control-label col-md-2">ID Number</label>
						<div class="col-md-8">
                        <input id="banner-name" class="form-control" type="text"   name="idNum">
                     </div>
					 </div>
					 
                    <div class="form-group">
                        <label class="control-label col-md-2">SurName</label>
						<div class="col-md-8">
                        <input id="banner-name" class="form-control" type="text"   name="lname">
                     </div> 
					</div>					 
                   

                    <div class="form-group">
                        <label class="control-label col-md-2">ForeName</label>
						<div class="col-md-8">
                        <input id="banner-name" class="form-control" type="text"   name="fname">
                     </div>
					 </div>
					 
                     <div class="form-group">
                        <label class="control-label col-md-2">Email</label>
						<div class="col-md-8">
                        <input id="banner-name" class="form-control" type="email"   name="email">
                     </div>
					 </div>


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
					  
                     
                     </div><!-- End of Modal body -->
					 <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success" >Add</button>
      </div>
					</form>
                    </div><!-- End of Modal content -->
                    </div><!-- End of Modal dialog -->
					
                  </div><!-- End of editModal -->
	  
	  
	  
    