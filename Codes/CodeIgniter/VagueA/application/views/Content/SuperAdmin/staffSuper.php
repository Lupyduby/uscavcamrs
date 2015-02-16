<div id="contentMargin">
<div class="container equipments-container">
<div class="row">
  <ol class="breadcrumb">
        <li><a href="#">Manage</a></li>
        <li class="active">Staff Management</li>
      </ol>
    
    <div class="col-lg-12" role="main">
      <h2 id="equip-manage" class="page-header">Staff Management</h2>
      <div class="row action-header">
        <div class="col-md-6 col-md-offset-6">
           <a href="#addmodal" role="button" id="btnAddManage" data-toggle="modal"><center>
            <span class="glyphicon glyphicon-plus" aria-hidden="true">ADD STAFF</span></center></a>

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
                    <form method="post" action="<?php echo base_url(); ?>superAdmin/addstaff">
                           
                    <div class="form-group">
                        <label class="control-label col-md-4">ID Number</label>
                        <input id="banner-name" class="form-control2" type="text"   name="idNum">
                     </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">SurName</label>
                        <input id="banner-name" class="form-control2" type="text"   name="lname">
                     </div>                                     
                   

                    <div class="form-group">
                        <label class="control-label col-md-4">ForeName</label>
                        <input id="banner-name" class="form-control2" type="text"   name="fname">
                     </div>
                     <div class="form-group">
                        <label class="control-label col-md-4">Email</label>
                        <input id="banner-name" class="form-control2" type="text"   name="email">
                     </div>


                     <div class="form-group">
                      <label class="control-label col-md-4">Campus</label>
                     <select name="campus" class="form-control2">
                        <option value="1">Downtown Campus</option>
                        <option value="2">South Campus</option>
                        <option value="3">Talamban Campus</option>
                    </select>
                      </div>
                     <div class="form-group">
                       <button class="btn btn-default btn-submit" type="submit">Add</button>
                      </div>
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
                    <div id="<?php echo "editmodal".$i; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                             <!--form sa modal -->
                            <form method="post" action="<?php echo base_url(); ?>superAdmine/updateStaff">
                            <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                              <h4 class="modal-title">Update Staff</h4>
                            </div>
                            <div class="modal-body">
                           
                           
                            <input type="hidden"  value="<?php echo $result[$i]->Person_ID; ?>" name="id">
                            <input type="hidden"  value="<?php echo $result[$i]->Staff_ID; ?>" name="id">
                            
                            <div class="form-group">
                                <label class="control-label col-md-4">Campus</label>
                               <select name="campus" class="form-control2">
                                  <option value="1" <?php if($result[$i]->Campus_ID==1) echo "selected"; ?>>Downtown</option>  
                                  <option value="2" <?php if($result[$i]->Campus_ID==2) echo "selected"; ?>>South Campus</option>
                                  <option value="3" <?php if($result[$i]->Campus_ID==3) echo "selected"; ?>>Talamban Campus</option>
                              </select> 
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-4">SurName</label>
                                <input id="banner-name" class="form-control2" type="text"  value="<?php echo $result[$i]->Person_Lname; ?>" name="lname">
                             </div>                                     
                           

                            <div class="form-group">
                                <label class="control-label col-md-4">ForeName</label>
                                <input id="banner-name" class="form-control2" type="text" value="<?php echo $result[$i]->Person_Fname; ?>"   name="fname">
                             </div>

                              <div class="form-group">
                                <label class="control-label col-md-4">Email</label>
                                <input id="banner-name" class="form-control2" type="text" value="<?php echo $result[$i]->Person_Email; ?>"   name="email">
                             </div>

                             
                             <div class="form-group">
                               <button class="btn btn-default btn-submit" type="submit">Update</button>
                              </div>
                              </form>
                              
                              <form method="post" action="<?php echo base_url(); ?>superAdmin/resetPasswordStaff">
                                 <input type="hidden"  value="<?php echo $result[$i]->Person_ID; ?>" name="id">
                                 <input type="hidden"  value="<?php echo $result[$i]->Person_Username; ?>" name="username">
                                 <button class="btn btn-default btn-submit" type="submit">Reset Password</button>
                              </form>
                          <!-- End of form sa modal -->
                              
                             </div><!-- End of Modal body -->
                            </div><!-- End of Modal content -->
                            </div><!-- End of Modal dialog -->
                          </div><!-- End of editModal -->
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
			                            	 	Are you sure you want to delete?
							                        <input type="hidden" name="id" value="<?php echo $result[$i]->Person_ID; ?>" >
                                      <input type="hidden" name="id" value="<?php echo $result[$i]->Staff_ID; ?>" >
							                        <input type="hidden" name="type" value="<?php echo $result[$i]->Person_type; ?>" >
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
  