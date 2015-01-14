<div id="contentMargin">
<div class="container equipments-container">
<div class="row">
    
    <div class="col-lg-12" role="main">
      <h2 id="equip-manage" class="page-header">AV Hall Management</h2>
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
                      <h4 class="modal-title">Add New AV Hall</h4>
                    </div>
                    <div class="modal-body">
                    <!--form sa modal -->
                    <form class="form-horizontal">
									<!--backend nga ang hall ra sa campus maikit -->
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
                                              <input id="banner-name" class="form-control2" type="text"  required="" name="description">
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
      
      
      
      <div class="equipments-content">
        <div class="table-responsive">
          <table class="table table-hover">
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
                       <a href="#editmodal" role="button" id="btnAddManage" data-toggle="modal"><center>
            <span class="glyphicon glyphicon-edit" aria-hidden="true"></span></center></a>
      <!-- addModal -->
                  <div id="editmodal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title">Update AV Hall</h4>
                    </div>
                    <div class="modal-body">
                    <!--form sa modal -->
                    <form class="form-horizontal">
									<!--backend nga ang hall ra sa campus maikit -->
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
                                              <input id="banner-name" class="form-control2" type="text"  required="" name="description">
                                           </div>
                                            <button class="btn btn-default btn-submit" type="submit" id="btnAdd">Update</button>
                                            
                    </form><!-- End of form sa modal -->
                    </div><!-- End of Modal body -->
                    </div><!-- End of Modal content -->
                    </div><!-- End of Modal dialog -->
                  </div><!-- End of addModal --> 
					</td>
					<td>
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