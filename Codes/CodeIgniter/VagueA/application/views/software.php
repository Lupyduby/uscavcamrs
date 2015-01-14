<div id="contentMargin">
<div class="container equipments-container">
<div class="row">
    
    <div class="col-lg-12" role="main">
      <h2 id="equip-manage" class="page-header">Software Management</h2>
      <div class="row action-header">
        <div class="col-md-6 col-md-offset-6">
		<a href="#addmodal" role="button" id="btnAddManage" data-toggle="modal"><center>
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span></center></a>
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
                    <form class="form-horizontal">
       

										  <div class="form-group">
											  <label class="control-label col-md-4">Call number</label>
											  <input id="banner-name" class="form-control2" type="text"  required="" name="name">
                                          </div>

                                            <div class="form-group">
                                            <label class="control-label col-md-4">Title</label>
                                              <input id="banner-email" class="form-control2" type="text" required="" name="brand">
                                            </div>
                                            <div class="form-group">
                                            <label class="control-label col-md-4">Runtime</label>
                                              <input id="banner-name" class="form-control2" type="text"  required="" name="serial">
                                           </div>
                                            <div class="form-group">
                                            <label class="control-label col-md-4">Code</label>
                                              <input id="banner-email" class="form-control2" type="text"  required="" name="remarks">
                                            </div>
											<div class="form-group">
                                            <label class="control-label col-md-4">Quantity</label>
                                              <input id="banner-email" class="form-control2" type="number" min="1" required="" name="qty">
                                            </div>
											<div class="form-group">
											<label class="control-label col-md-4">Status</label>
											  <div class="col-md-6">
											  <div class="btn-group bootstrap-select">
												
											<select name="status" class="form-control2">
                                                <option value="1">Available</option>
                                                <option value="2">Borrowed</option>
                                            </select>
											  </div>
											  </div>
						<!--end dropdown --></div>
                                           
                                             <button class="btn btn-default btn-submit" type="submit" id="btnAdd">ADD</button>
                                            
                    </form><!-- End of form sa modal -->
                    </div><!-- End of Modal body -->
                    </div><!-- End of Modal content -->
                    </div><!-- End of Modal dialog -->
                  </div><!-- End of addModal --> 
			<div class="input-group">
              <input class="form-control-search" type="text" placeholder="Search for...">
              <span class="input-group-btn">
              <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
              </span>
              </div>
        </div>
      </div>
      
      
      
      <div class="equipments-content">
        <div class="table-responsive">
          <table class="table table-hover">
            <thead class="theader-contents">
              <tr>
                <th><h4>Campus</h4></th>
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
                    <td><?php echo $result[$i]->Campus_Name; ?></td>
                    <td><?php echo $result[$i]->Software_CallNumber; ?></td>
                    <td><?php echo $result[$i]->Software_title; ?></td>
                    <td><?php echo $result[$i]->Software_runningTime; ?></td>
                    <td><?php echo $result[$i]->Software_Code; ?></td>
                    <td><?php echo $result[$i]->Software_Quantity; ?></td>
                    <td><?php echo $result[$i]->Software_Status; ?></td>
                    <td><?php echo $result[$i]->Person_FName." ".$result[$i]->Person_LName; ?></td>
                    <td>
                    <a href="#updatemodal" role="button" id="btnAddManage" data-toggle="modal">
					<span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
      <!-- addModal -->
                  <div id="updatemodal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title">Update Software</h4>
                    </div>
                    <div class="modal-body">
                    <!--form sa modal -->
                    <form class="form-horizontal">
       

										  <div class="form-group">
											  <label class="control-label col-md-4">Call number</label>
											  <input id="banner-name" class="form-control2" type="text"  required="" name="name">
                                          </div>

                                            <div class="form-group">
                                            <label class="control-label col-md-4">Title</label>
                                              <input id="banner-email" class="form-control2" type="text" required="" name="brand">
                                            </div>
                                            <div class="form-group">
                                            <label class="control-label col-md-4">Runtime</label>
                                              <input id="banner-name" class="form-control2" type="text"  required="" name="serial">
                                           </div>
                                            <div class="form-group">
                                            <label class="control-label col-md-4">Code</label>
                                              <input id="banner-email" class="form-control2" type="text"  required="" name="remarks">
                                            </div>
											<div class="form-group">
                                            <label class="control-label col-md-4">Quantity</label>
                                              <input id="banner-email" class="form-control2" type="number" min="1" required="" name="qty">
                                            </div>
											<div class="form-group">
											<label class="control-label col-md-4">Status</label>
											  <div class="col-md-6">
											  <div class="btn-group bootstrap-select">
												
											<select name="status" class="form-control2">
                                                <option value="1">Available</option>
                                                <option value="2">Borrowed</option>
                                            </select>
											  </div>
											  </div>
						<!--end dropdown --></div>
											 <div class="form-group">
                                            <label class="control-label col-md-4">Borrowed by</label>
                                               <input id="banner-email" class="form-control2" type="text"  required="" name="borrower">
                                            </div>
                                            
                                             <button class="btn btn-default btn-submit" type="submit" id="btnAdd">Update</button>
                                            
                    </form><!-- End of form sa modal -->
                    </div><!-- End of Modal body -->
                    </div><!-- End of Modal content -->
                    </div><!-- End of Modal dialog -->
                  </div><!-- End of addModal --> 
					<td>
					<td>
                        <button class="btn btn-default btn-sm" type="button" style="position:left">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true" ></span>
                        </button>
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