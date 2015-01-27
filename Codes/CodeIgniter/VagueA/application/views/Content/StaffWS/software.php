<div id="contentMargin">
<div class="container equipments-container">
<div class="row">
  <ol class="breadcrumb">
        <li><a href="#">Manage</a></li>
        <li class="active">Software Management</li>
      </ol>
    
    <div class="col-lg-12" role="main">
      <h2 id="equip-manage" class="page-header">Software Management</h2>
      <div class="row action-header">
        <div class="col-md-6 col-md-offset-6">
		<a href="#addmodal" role="button" id="btnAddManage" data-toggle="modal"><center>
            <span class="glyphicon glyphicon-plus" aria-hidden="true">ADD SOFTWARE</span></center></a>
      <!-- addModal -->
                  <div id="addmodal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title">Add New Software</h4>
                    </div>
                    <div class="modal-body">
                    <!--form sa modal -->
                     <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>StaffWS/addSoftware">
                      
                       <div class="form-group">
											  <label class="control-label col-md-4">Call number</label>
											  <input id="banner-name" class="form-control2" type="text"  required="" name="cnum">
                          </div>

                            <div class="form-group">
                            <label class="control-label col-md-4">Title</label>
                              <input id="banner-email" class="form-control2" type="text" required="" name="title">
                            </div>
                            <div class="form-group">
                            <label class="control-label col-md-4">Runtime</label>
                              <input id="banner-name" class="form-control2" type="time"  required="" name="runtime">
                           </div>
                            <div class="form-group">
                            <label class="control-label col-md-4">Code</label>
                              <input id="banner-email" class="form-control2" type="text"   name="code">
                            </div>
			                     <div class="form-group">
                            <label class="control-label col-md-4">Quantity</label>
                              <input id="banner-email" class="form-control2" type="number" min="1" required="" name="qty">
                            </div>
			
                           
                             <button class="btn btn-default btn-submit" type="submit" id="btnAdd">ADD</button>
                                            
                    </form><!-- End of form sa modal -->
                    </div><!-- End of Modal body -->
                    </div><!-- End of Modal content -->
                    </div><!-- End of Modal dialog -->
                  </div><!-- End of addModal --> 
		
    
        </div>
      </div>
      
      
      
      <div class="equipments-content">
        <div class="table-responsive">
          <table id="table_id" class="display">
            <thead class="theader-contents">
              <tr>
                <th><h4>Call Number</h4></th>
                <th><h4>Title</h4></th>
                <th><h4>Runtime</h4></th>
                <th><h4>Code</h4></th>
                <th><h4>Quantity</h4></th>
                <th><h4>Status</h4></th>
                <th><h4>Borrowed by</h4></th>
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
                    <td><?php echo $result[$i]->Software_CallNumber; ?></td>
                    <td><?php echo $result[$i]->Software_title; ?></td>
                    <td><?php echo $result[$i]->Software_runningTime; ?></td>
                    <td><?php echo $result[$i]->Software_Code; ?></td>
                    <td><?php echo $result[$i]->Software_Quantity; ?></td>
                    <td><?php echo $result[$i]->Software_Status; ?></td>
                    <td><?php echo $result[$i]->Person_FName." ".$result[$i]->Person_LName; ?></td>
                    <td>
                    <a href="<?php echo "#editmodal".$i; ?>" role="button"  data-toggle="modal"><center>
            <span class="glyphicon glyphicon-edit" aria-hidden="true"></span></center></a>
                    <!-- editModal -->
                    <div id="<?php echo "editmodal".$i; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title">Update Software</h4>
                    </div>
                    <div class="modal-body">
                    <!--form sa modal -->
                    <form method="post" action="<?php echo base_url(); ?>StaffWS/updateSoft">
               
                    <input type="hidden"  value="<?php echo $result[$i]->Software_ID; ?>" name="id">
                          

										  <div class="form-group">
											  <label class="control-label col-md-4">Call number</label>
											  <input id="banner-name" class="form-control2" type="text"  required="" name="cnum" value="<?php echo $result[$i]->Software_CallNumber; ?>">
                      </div>

                      <div class="form-group">
                      <label class="control-label col-md-4">Title</label>
                        <input id="banner-email" class="form-control2" type="text" required="" name="title" value="<?php echo $result[$i]->Software_title; ?>">
                      </div>
                      <div class="form-group">
                      <label class="control-label col-md-4">Runtime</label>
                        <input id="banner-name" class="form-control2" type="text"  required="" name="runtime" value="<?php echo $result[$i]->Software_runningTime; ?>">
                     </div>
                      <div class="form-group">
                      <label class="control-label col-md-4">Code</label>
                        <input id="banner-email" class="form-control2" type="text"  required="" name="code" value="<?php echo $result[$i]->Software_Code; ?>">
                      </div>
											<div class="form-group">
                      <label class="control-label col-md-4">Quantity</label>
                        <input id="banner-email" class="form-control2" type="number" min="1" required="" name="qty" value="<?php echo $result[$i]->Software_Quantity; ?>">
                      </div>
											<div class="form-group">
											<label class="control-label col-md-4">Status</label>
											  <div class="col-md-6">
											  <div class="btn-group bootstrap-select">
												
											<select name="status" class="form-control2">
                          <option value="Available" <?php if($result[$i]->Software_Status == "Available") echo "selected"; ?>>Available</option>
                          <option value="Borrowed" <?php if($result[$i]->Software_Status == "Borrowed") echo "selected"; ?>>Borrowed</option>
                          <option value="Damage" <?php if($result[$i]->Software_Status == "Damage") echo "selected"; ?>>Damage</option>
                      </select>
											  </div>
											  </div>
						<!--end dropdown --></div>
											 <div class="form-group">
                        <label class="control-label col-md-4">Borrowed by</label>
                           <input id="banner-email" class="form-control2" type="text"  required="" name="username" value="<?php echo $result[$i]->Person_Username; ?>">
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
                        <form method="post" action="<?php echo base_url(); ?>StaffWS/deleteSoft">
                          Are you sure you want to delete?
                          <input type="hidden" name="id" value="<?php echo $result[$i]->Software_ID; ?>" >
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