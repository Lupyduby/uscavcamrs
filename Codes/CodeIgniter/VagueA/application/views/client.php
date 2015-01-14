<div id="contentMargin">
<div class="container equipments-container">
<div class="row">
    
    <div class="col-lg-12" role="main">
      <h2 id="equip-manage" class="page-header">Client Management</h2>
      <div class="row action-header">
        <div class="col-md-6 col-md-offset-6">
           <a href="#addmodal" role="button" id="btnAddManage" data-toggle="modal"><center>
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span></center></a>

                       
                       <div id="addmodal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                          <div class="modal-dialog">
                                          <div class="modal-content">
                                          <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title">Add Client</h4>
                                          </div>
                                          <div class="modal-body">
                                          <!--form sa modal -->
                                          <div class="form-group">
                                              <label class="control-label col-md-4">SurName</label>
                                              <input id="banner-name" class="form-control2" type="text"   name="name">
                                           </div>                                     
                                         

                                          <div class="form-group">
                                              <label class="control-label col-md-4">ForeName</label>
                                              <input id="banner-name" class="form-control2" type="text"   name="name">
                                           </div>

                                            <div class="form-group">
                                            <label class="control-label col-md-4">Type</label>
                                            <select name="type" class="form-control2">
                                                <option value="1">VPA</option>
                                                <option value="2">VPAA</option>
                                                <option value="3">OSA</option>
                                                <option value="4">Dean</option>
												<option value="5">Faculty</option>
                                            </select>
                                            </div>
                                            <div class="form-group">
                                            <label class="control-label col-md-4">College/Office/SO</label>
                                              <input id="banner-name" class="form-control2" type="text"  name="serial">
                                           </div>
                                           <div class="form-group">
                                             <button class="btn btn-default btn-submit" type="submit">Add</button>
                                            </div>
                                        <!-- End of form sa modal -->
                                            
                                           </div><!-- End of Modal body -->
                                          </div><!-- End of Modal content -->
                                          </div><!-- End of Modal dialog -->
                                        </div><!-- End of editModal -->
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
                <th><h4>Surname</h4></th>
                <th><h4>Forename</h4></th>
                <th><h4>Type</h4></th>
                <th><h4>College/Office/SO</h4></th>
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
                    <td><?php echo $result[$i]->Person_LName; ?></td>
                    <td><?php echo $result[$i]->Person_FName; ?></td>
                    <td><?php echo $result[$i]->Person_type; ?></td>
                    <?php if($result[$i]->Person_type=="SO") 
                          {   ?>
                    
                            <td><?php echo $result[$i]->SO_Name; ?></td>
                        <?php
                          }

                          else if ($result[$i]->Person_type=="Office")
                          {
                        ?>
                            <td><?php echo $result[$i]->User_Office_Name; ?></td>
                        <?php
                          }

                          else 
                          {
                        ?>
                            <td><?php echo $result[$i]->User_college; ?></td>
                        <?php } ?>
                    <td>
						<a href="#editmodal" role="button" class="btn btn-custom" data-toggle="modal">
                        <span class="glyphicon glyphicon-edit"  aria-hidden="true"></span></a>
                       <div id="editmodal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                          <div class="modal-dialog">
                                          <div class="modal-content">
                                          <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title">Update Client</h4>
                                          </div>
                                          <div class="modal-body">
                                          <!--form sa modal -->
                                          <div class="form-group">
                                              <label class="control-label col-md-4">SurName</label>
                                              <input id="banner-name" class="form-control2" type="text"   name="name">
                                           </div>                                     
                                         

                                          <div class="form-group">
                                              <label class="control-label col-md-4">ForeName</label>
                                              <input id="banner-name" class="form-control2" type="text"   name="name">
                                           </div>

                                            <div class="form-group">
                                            <label class="control-label col-md-4">Type</label>
                                            <select name="Type" class="form-control2">
                                                <option value="1">VPA</option>
                                                <option value="2">VPAA</option>
                                                <option value="3">OSA</option>
                                                <option value="4">Dean</option>
												<option value="5">Faculty</option>
                                            </select>
                                            </div>
                                            <div class="form-group">
                                            <label class="control-label col-md-4">College/Office/SO</label>
                                              <input id="banner-name" class="form-control2" type="text"  name="serial">
                                           </div>
                                           <div class="form-group">
                                             <button class="btn btn-default btn-submit" type="submit">Update</button>
                                            </div>
                                        <!-- End of form sa modal -->
                                            
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
              <?php $i++; } ?>
             
            </tbody>
  
          </table>
          
        </div>

      </div>
     
    </div>
    </div>
    </div> <!-- End of Container -->
  </div>