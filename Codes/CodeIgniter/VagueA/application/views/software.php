<div id="contentMargin">
<div class="container equipments-container">
<div class="row">
    
    <div class="col-lg-12" role="main">
      <h2 id="equip-manage" class="page-header">Equipment Management</h2>
      <div class="row action-header">
        <div class="col-md-6 col-md-offset-6"><a href="#addmodal" role="button" class="btn btn-custom" data-toggle="modal">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
			<!-- addModal -->
									<div id="addmodal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
										<div class="modal-dialog">
										<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
											<h4 class="modal-title">Add Software Materials</h4>
										</div>
										<div class="modal-body">
										<!--form sa modal -->
										<form class="form-horizontal">
				<!--form sa dropdown --><div class="form-group">
										<label class="control-label col-md-4">Campus</label>
											<div class="col-md-6">
											<div class="btn-group bootstrap-select">
											  <button data-toggle="dropdown" class="btn-default selectpicker" type="button">
												<span class="filter-option pull-left">Select your Campus</span>
												<span class="caret"></span>
											  </button>
											  <div class="dropdown-menu open">
												<ul role="menu" class="dropdown-menu inner selectpicker">
												  <li rel="0">
													<a href="#">
													<span class="text">Talamban</span>
													</a>
												  </li>
												  <li rel="1" class="selected">
													<a href="#">
													<span class="text">Downtown</span>
													</a>
												  </li>
												  <li rel="2">
													<a href="#">
													 <span class="text">North</span>
													</a>
												  </li>
												  <li rel="3">
													<a href="#">
													  <span class="text">South</span>
													</a>
												  </li>
												</ul>
											  </div>
											</div>
											</div>
						<!--end dropdown --></div>
											<div class="form-group">
												<label class="control-label col-md-4">Call Number</label>
												<div class="col-md-6">
													<input type="text" class="form-control"/>
												</div>
											</div>
											<div class="form-group">
												<label class="control-label col-md-4">Title</label>
												<div class="col-md-6">
													<input type="text" class="form-control"/>
												</div>
											</div>
											<div class="form-group">
												<label class="control-label col-md-4">Runtime</label>
												<div class="col-md-6">
													<input type="text" class="form-control"/>
												</div>
											</div>
											<div class="form-group">
												<label class="control-label col-md-4">Code</label>
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
												<label class="control-label col-md-4">Status</label>
												<div class="col-md-6">
													<input type="text" class="form-control"/>
												</div>
											</div>
											<div class="form-group">
												<div class="col-md-6">
													<button type="submit" value="Submit" class=" btn-custom pull-right">Add</button>
												</div>
											</div>
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
                <td><?php echo $result[$i]->Software_CallNumber; ?></td>
                <td><?php echo $result[$i]->Software_title; ?></td>
                <td><?php echo $result[$i]->Software_runningTime; ?></td>
                <td><?php echo $result[$i]->Software_Code; ?></td>
                <td><?php echo $result[$i]->Software_Quantity; ?></td>
                <td><?php echo $result[$i]->Software_Status; ?></td>
                <td><?php echo $result[$i]->Person_FName." ".$result[$i]->Person_LName; ?></td>
                <td>
                  <a href="#editmodal" role="button" class="btn btn-custom" data-toggle="modal">
                  <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span></a>
                  <div id="editmodal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
										<div class="modal-dialog">
										<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
											<h4 class="modal-title">Update Software Materials</h4>
										</div>
										<div class="modal-body">
										<!--form sa modal -->
										<form class="form-horizontal">
				<!--form sa dropdown --><div class="form-group">
										<label class="control-label col-md-4">Campus</label>
											<div class="col-md-6">
											<div class="btn-group bootstrap-select">
											  <button data-toggle="dropdown" class="btn-default selectpicker" type="button">
												<span class="filter-option pull-left">Select your Campus</span>
												<span class="caret"></span>
											  </button>
											  <div class="dropdown-menu open">
												<ul role="menu" class="dropdown-menu inner selectpicker">
												  <li rel="0">
													<a href="#">
													<span class="text">Talamban</span>
													</a>
												  </li>
												  <li rel="1" class="selected">
													<a href="#">
													<span class="text">Downtown</span>
													</a>
												  </li>
												  <li rel="2">
													<a href="#">
													 <span class="text">North</span>
													</a>
												  </li>
												  <li rel="3">
													<a href="#">
													  <span class="text">South</span>
													</a>
												  </li>
												</ul>
											  </div>
											</div>
											</div>
						<!--end dropdown --></div>
											<div class="form-group">
												<label class="control-label col-md-4">Call Number</label>
												<div class="col-md-6">
													<input type="text" class="form-control"/>
												</div>
											</div>
											<div class="form-group">
												<label class="control-label col-md-4">Title</label>
												<div class="col-md-6">
													<input type="text" class="form-control"/>
												</div>
											</div>
											<div class="form-group">
												<label class="control-label col-md-4">Runtime</label>
												<div class="col-md-6">
													<input type="text" class="form-control"/>
												</div>
											</div>
											<div class="form-group">
												<label class="control-label col-md-4">Code</label>
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
												<label class="control-label col-md-4">Status</label>
												<div class="col-md-6">
													<input type="text" class="form-control"/>
												</div>
											</div>
											<div class="form-group">
												<div class="col-md-6">
													<button type="submit" value="Submit" class=" btn-custom pull-right">Update</button>
												</div>
											</div>
										</form><!-- End of form sa modal -->
										</div><!-- End of Modal body -->
										</div><!-- End of Modal content -->
										</div><!-- End of Modal dialog -->
									</div><!-- End of addModal --> 
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