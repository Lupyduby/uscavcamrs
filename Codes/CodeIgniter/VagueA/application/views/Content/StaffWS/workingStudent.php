<div id="contentMargin">
<div class="container equipments-container">
<div class="row">
  <ol class="breadcrumb">
        <li><a href="#">Manage</a></li>
        <li class="active">Working Student Management</li>
      </ol>
    
    <div class="col-lg-12" role="main">
      <h2 id="equip-manage" class="page-header">Working Scholar Management</h2>
      <div class="row action-header">
        <div class="col-md-6 col-md-offset-6">
		<a href="#addmodal" role="button" id="btnAddManage" data-toggle="modal"><center>
            <span class="glyphicon glyphicon-plus" aria-hidden="true">ADD WORKING</span></center></a>
      <!-- addModal -->
                  <div id="addmodal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title">Add New Working Scholars</h4>
                    </div>
                    <div class="modal-body">
                    <!--form sa modal -->
                    <form class="form-horizontal">
        

										   <div class="form-group">
											  <label class="control-label col-md-4">Surname</label>
                                              <input id="banner-name" class="form-control2" type="text"  required="" >
                                           </div>

                                            <div class="form-group">
                                            <label class="control-label col-md-4">Forename</label>
                                              <input id="banner-email" class="form-control2" type="text" required="" >
                                            </div>
                                            <div class="form-group">
                                            <label class="control-label col-md-4">Username</label>
                                              <input id="banner-name" class="form-control2" type="text"  required="" >
                                           </div>
                                            <div class="form-group">
                                            <label class="control-label col-md-4">Hall</label>
                                            	<div class="col-md-6">
													<div class="btn-group bootstrap-select">
													<!--depend sa campus -->
														<select name="campus" class="form-control2">
															<option value="1">Rigney Hall</option>
															<option value="2">Pe</option>
															<option value="3">Robert</option>
															
														</select>
													  </div>
												  </div>
											</div>
                                            <div class="form-group">
                                            <label class="control-label col-md-4">Monday</label>
                                              <input type="time" id="banner-name" class="form-control2" type="text"  required="" >
                                           </div>
										   <div class="form-group">
                                            <label class="control-label col-md-4">Tuesday</label>
                                              <input id="banner-name" class="form-control2" type="text"  required="" >
                                           </div>
										   <div class="form-group">
                                            <label class="control-label col-md-4">Wednesay</label>
                                              <input id="banner-name" class="form-control2" type="text"  required="" >
                                           </div>
										   <div class="form-group">
                                            <label class="control-label col-md-4">Thursday</label>
                                              <input id="banner-name" class="form-control2" type="text"  required="" >
                                           </div>
										   <div class="form-group">
                                            <label class="control-label col-md-4">Friday</label>
                                              <input id="banner-name" class="form-control2" type="text"  required="" >
                                           </div>
										   <div class="form-group">
                                            <label class="control-label col-md-4">Saturday</label>
                                              <input id="banner-name" class="form-control2" type="text"  required="" >
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
                <th><h4>Last name</h4></th>
                <th><h4>First name</h4></th>
                <th><h4>Campus</h4></th>
                <th><h4>Hall</h4></th>
                <th><h4>Monday</h4></th>
                <th><h4>Tuesday</h4></th>
                <th><h4>Wednesay</h4></th>
                <th><h4>Thursday</h4></th>
                <th><h4>Friday</h4></th>
                <th><h4>Saturday</h4></th>
                <th><h4>Update</h4></th>
				<th><h4>Delete</h4></th>
              </tr>
            </thead>
            <tbody class="table-contents">
              <?php $i=0; ; 
                while($i<$num)
                {
                  
              ?>
                <tr>
                    <td><?php echo $result[$i]->Person_LName; ?></td>
                    <td><?php echo $result[$i]->Person_FName; ?></td>
                    <td><?php echo $result[$i]->Campus_Name; ?></td>
                    <td><?php echo $result[$i]->Hall_Name; ?></td>
                    <?php $schedCount=0;
                          while($schedCount<6)
                          {
                    ?>
                              <td><?php echo $dutySched[$schedCount]->DutySched_TimeIn." - ". $dutySched[$schedCount]->DutySched_TimeOut; ?></td>
                    <?php $schedCount++; } ?>
                    <td>
                        <a href="<?php echo "#editmodal".$i; ?>" role="button" data-toggle="modal"><center>
            <span class="glyphicon glyphicon-edit" aria-hidden="true"></span></center></a>
      <!-- editModal -->
                  <div id="<?php echo "editmodal".$i; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title">Add New Working Scholars</h4>
                    </div>
                    <div class="modal-body">
                    <!--form sa modal -->
                    <form class="form-horizontal">
        

										   <div class="form-group">
											  <label class="control-label col-md-4">Surname</label>
                                              <input id="banner-name" class="form-control2" type="text"  required="" >
                                           </div>

                                            <div class="form-group">
                                            <label class="control-label col-md-4">Forename</label>
                                              <input id="banner-email" class="form-control2" type="text" required="" >
                                            </div>
                                            <div class="form-group">
                                            <label class="control-label col-md-4">Username</label>
                                              <input id="banner-name" class="form-control2" type="text"  required="" >
                                           </div>
                                            <div class="form-group">
                                            <label class="control-label col-md-4">Hall</label>
                                            	<div class="col-md-6">
													<div class="btn-group bootstrap-select">
													<!--depend sa campus -->
														<select name="campus" class="form-control2">
															<option value="1">Rigney Hall</option>
															<option value="2">Pe</option>
															<option value="3">Robert</option>
															
														</select>
													  </div>
												  </div>
											</div>
                                            <div class="form-group">
                                            <label class="control-label col-md-4">Monday</label>
                                              <input id="banner-name" class="form-control2" type="text"  required="" >
                                           </div>
										   <div class="form-group">
                                            <label class="control-label col-md-4">Tuesday</label>
                                              <input id="banner-name" class="form-control2" type="text"  required="" >
                                           </div>
										   <div class="form-group">
                                            <label class="control-label col-md-4">Wednesay</label>
                                              <input id="banner-name" class="form-control2" type="text"  required="" >
                                           </div>
										   <div class="form-group">
                                            <label class="control-label col-md-4">Thursday</label>
                                              <input id="banner-name" class="form-control2" type="text"  required="" >
                                           </div>
										   <div class="form-group">
                                            <label class="control-label col-md-4">Friday</label>
                                              <input id="banner-name" class="form-control2" type="text"  required="" >
                                           </div>
										   <div class="form-group">
                                            <label class="control-label col-md-4">Saturday</label>
                                              <input id="banner-name" class="form-control2" type="text"  required="" >
                                           </div>
										   
                                             <button class="btn btn-default btn-submit" type="submit" id="btnAdd">Update</button>
                                            
                    </form><!-- End of form sa modal -->
                    </div><!-- End of Modal body -->
                    </div><!-- End of Modal content -->
                    </div><!-- End of Modal dialog -->
                  </div><!-- End of editModal --> 
					</td>
					<td>
                        <button class="btn btn-default btn-sm" type="button">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                        </button>
                    </td>
                </tr>
              <?php $i++; $schedCount=$schedCount+6; } ?>
             
            </tbody>
  
          </table>
          
        </div>

      </div>
     
    </div>
    </div>
    </div> <!-- End of Container -->
  </div>