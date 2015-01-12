<div id="contentMargin">
<div id="contentMargin">
<div class="container equipments-container">
<div class="row">
    
    <div class="col-lg-12" role="main">
      <h2 id="equip-manage" class="page-header">Equipment Management</h2>
      <div class="row action-header">
        <div class="col-md-6 col-md-offset-6"><button class="btn btn-default" type="button">
                  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                  </button>

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
                <th><h4>Name</h4></th>
                <th><h4>Brand</h4></th>
                <th><h4>Serial</h4></th>
                <th><h4>Remarks</h4></th>
                <th><h4>Quantity</h4></th>
                <th><h4>Update/Delete</h4></th>

              </tr>
            </thead>
            <tbody class="table-contents">
              <?php $i=0; 
                while($i<$num)
                {
                  
              ?>
                          <tr>
                              <td><?php echo $result[$i]->Campus_Name; ?></td>
                              <td><?php echo $result[$i]->Asset_Name; ?></td>
                              <td><?php echo $result[$i]->Asset_Brand; ?></td>
                              <td><?php echo $result[$i]->Asset_Serial; ?></td>
                              <td><?php echo $result[$i]->Asset_Remarks; ?></td>
                              <td><?php echo $result[$i]->Asset_Quantity; ?></td>
                              <td> 
							  
                                  <a href="#editmodal" role="button" class="btn btn-custom" data-toggle="modal">
                                  <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span></a>
                               	 <!-- Modal -->
									<div id="editmodal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
										<div class="modal-dialog">
										<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
											<h4 class="modal-title">Update Equipments</h4>
										</div>
										<div class="modal-body">
										<form class="form-horizontal">
											<div class="form-group">
												<label class="control-label col-md-4">Campus</label>
												<div class="col-md-6">
													<input type="text" class="form-control"/>
												</div>
											</div>
											<div class="form-group">
												<label class="control-label col-md-4">Name</label>
												<div class="col-md-6">
													<input type="text" class="form-control"/>
												</div>
											</div>
											<div class="form-group">
												<label class="control-label col-md-4">Brand</label>
												<div class="col-md-6">
													<input type="text" class="form-control"/>
												</div>
											</div>
											<div class="form-group">
												<label class="control-label col-md-4">Serial #</label>
												<div class="col-md-6">
													<input type="text" class="form-control"/>
												</div>
											</div>
											<div class="form-group">
												<label class="control-label col-md-4">Remarks</label>
												<div class="col-md-6">
													<input type="text" class="form-control"/>
												</div>
											</div>
											<div class="form-group">
												<label class="control-label col-md-4">Quantity</label>
												<div class="col-md-6">
													<input type="text" class="form-control"/>
												</div>
											</div>
											<div class="form-group">
												<div class="col-md-6">
													<button type="submit" value="Submit" class="btn btn-custom pull-right">Send</button>
												</div>
											</div>
										</form>
										</div><!-- End of Modal body -->
										</div><!-- End of Modal content -->
										</div><!-- End of Modal dialog -->
									</div><!-- End of Modal --> 
									
                                  <button class="btn btn-default btn-sm" type="button">
                                  <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
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