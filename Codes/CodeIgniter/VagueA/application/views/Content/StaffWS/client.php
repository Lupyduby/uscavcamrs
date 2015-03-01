<div id="contentMargin">
<div class="container equipments-container content">
<div class="row">
<ol class="breadcrumb">
        <li><a href="#">Manage</a></li>
        <li class="active">Client Management</li>
      </ol>
<div class="panel panel-default">
  <div class="panel-body">
  <div class="panel panel-success">
  <div class="col-md-12 panel-heading">
  <div class="col-md-9 title-content">
    <h3 class="panel-title"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>  Client Management</h3>
  </div>
  <div class="col-md-3">
  <a href="#addmodal" role="button" class="btn btn-primary btn-xs" id="btnAddManage" data-toggle="modal" style="float:right;">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> ADD CLIENT</a>                          
  </div>
  </div>
  
  <div class="panel-body">
        <div class="equipments-content">
        <div class="table-responsive">
          <table id="table_id" class="display">
            <thead class="theader-contents">
              <tr>
                <th><h4>ID Number</h4></th>
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
                    <td><?php echo $result[$i]->Person_Username; ?></td>
                    <td><?php echo $result[$i]->Person_LName; ?></td>
                    <td><?php echo $result[$i]->Person_FName; ?></td>
                    <td><?php echo $result[$i]->Person_type; ?></td>
                    <?php 
                    if($result[$i]->Person_type=="SO") 
                          {   ?>
                    
                            <td><?php echo $result[$i]->SO_Name; ?></td>
                        <?php
                          }

                          else if ($result[$i]->Person_type=="OSA" || $result[$i]->Person_type=="Dean" ||$result[$i]->Person_type=="Office" || $result[$i]->Person_type=="VPA" || $result[$i]->Person_type=="VPAA" )
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
                    <a href="<?php echo "#editmodal".$i; ?>" role="button" class="btn btn-custom" data-toggle="modal">
                      <span class="glyphicon glyphicon-edit"  aria-hidden="true"></span></a>
                    <div id="<?php echo "editmodal".$i; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                             <!--form sa modal -->
                            <form method="post" action="<?php echo base_url(); ?>StaffWS/updateClient">
                            <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                              <h4 class="modal-title">Update Client</h4>
                            </div>
                            <div class="modal-body">
                           
                           
                            <input type="hidden"  value="<?php echo $result[$i]->Person_ID; ?>" name="id">
                          
                            <div class="form-group">
                                <label class="control-label col-md-4">SurName</label>
                                <input id="banner-name" class="form-control" type="text"  value="<?php echo $result[$i]->Person_LName; ?>" name="lname">
                             </div>                                     
                           

                            <div class="form-group">
                                <label class="control-label col-md-4">ForeName</label>
                                <input id="banner-name" class="form-control" type="text" value="<?php echo $result[$i]->Person_FName; ?>"   name="fname">
                             </div>

                              <div class="form-group">
                              <label class="control-label col-md-4">Type</label>
                              <select name="type" class="form-control">

                                  
                                  <option value="Office" id="office" <?php if($result[$i]->Person_type=="Office") echo "selected"; ?>>Office</option>
                                  <option value="OSA" <?php if($result[$i]->Person_type=="OSA") echo "selected"; ?>>OSA</option>
                                  <option value="Dean" <?php if($result[$i]->Person_type=="Dean") echo "selected"; ?>>Dean</option>
                                  <option value="Faculty" <?php if($result[$i]->Person_type=="Faculty") echo "selected"; ?>>Faculty</option>
                                  <option value="SO" <?php if($result[$i]->Person_type=="SO") echo "selected"; ?>>Student Organization</option>

                              </select>
                              </div>
                              <div class="form-group">
                              <label class="control-label col-md-4">College/Office/SO</label>
                                 <input id="banner-name" class="form-control" type="text" value="<?php
                                      if($result[$i]->Person_type=="SO") 
                                           echo $result[$i]->SO_Name;
                                       else if ($result[$i]->Person_type=="OSA" || $result[$i]->Person_type=="Dean" ||$result[$i]->Person_type=="Office" || $result[$i]->Person_type=="VPA" || $result[$i]->Person_type=="VPAA" )
                                          echo $result[$i]->User_Office_Name;
                                      else 
                                          echo $result[$i]->User_college;
                                    ?>" name="officeName">
                             </div>
                          <!-- End of form sa modal -->
                              
                             </div><!-- End of Modal body -->
               <div class="modal-footer">
        <button type="submit" class="btn btn-success" id="btnAdd">Update</button>
    <form method="post" action="<?php echo base_url(); ?>StaffWS/resetPassword">
                               <input type="hidden"  value="<?php echo $result[$i]->Person_ID; ?>" name="id">
                               <input type="hidden"  value="<?php echo $result[$i]->Person_Username; ?>" name="username">
                               <button class="btn btn-default btn-submit" type="submit" id="btnAdd">Reset Password</button>
                              </form>
    </form>
      </div>
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
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                      <h4 class="modal-title">Are you sure you want to delete?</h4>
                    </div>
                    <div class="modal-footer">
                    <input type="hidden" name="id" value="<?php echo $result[$i]->Person_ID; ?>" >
                                      <input type="hidden" name="type" value="<?php echo $result[$i]->Person_type; ?>" >
        <button type="button" id="deleteModalNo" class="btn btn-default" data-dismiss="modal" aria-hidden="true">Close</button>
        <button type="submit" id="deleteModalYes" class="btn btn-success" value="YES">Yes</button>
      </div>
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
                      <h4 class="modal-title">Add Client</h4>
                    </div>
                    <div class="modal-body">
                    <!--form sa modal -->
                    <form method="post" action="<?php echo base_url(); ?>StaffWS/addClient" class="form-horizontal">
                           
                    <div class="form-group">
                        <label class="control-label col-lg-4">ID Number</label>
            <div class="col-md-4">
                        <input id="banner-name" class="form-control" type="text"   name="idNum">
            </div>
                     </div>
                    <div class="form-group">
                        <label class="control-label col-lg-4">SurName</label>
            <div class="col-md-4">
                        <input id="banner-name" class="form-control" type="text"   name="lname">
            </div>
                     </div>                                     
                   

                    <div class="form-group">
                        <label class="control-label col-lg-4">ForeName</label>
            <div class="col-md-4">
                        <input id="banner-name" class="form-control" type="text"   name="fname">
            </div>
                     </div>
                     <div class="form-group">
                        <label class="control-label col-lg-4">Email</label>
            <div class="col-md-4">
                        <input id="banner-name" class="form-control" type="email"   name="email">
            </div>
                     </div>


                     <div class="form-group">
                      <label class="control-label col-lg-4">Campus</label>
            <div class="col-md-4">
                     <select name="campus" class="form-control">
                        <option value="1">Downtown Campus</option>
                        <option value="2">North Campus</option>
                        <option value="3">South Campus</option>
                        <option value="4">Talamban Campus</option>
                    </select>
          </div>
                    </div>

                      <div class="form-group">
                      <label class="control-label col-lg-4">User type</label>
            <div class="col-md-4">
                      <select name="type" class="form-control">
                          <option value="Chairman" id="ordi">Chairman</option>
                          <option value="Dean" id="ordi">Dean</option>
                          <option value="Faculty" id="ordi">Faculty</option>
                          <option value="Office" id="office">Office</option>
                          <option value="OSA" id="vpa">OSA</option>
                          <option value="SOC" id="soType">Student Organization - Co-Curricular</option>
                          <option value="SOE" id="soType">Student Organization - Extra-Curricular</option>
                      </select>
            </div>
                      </div>

                      
                      <div id="ordinary" class="form-group">
                      <label class="control-label col-lg-4">College</label>
            <div class="col-md-4">
                        <select name="college" class="form-control">
                            <option value="SBE">SBE</option>
                            <option value="SLG">SLG</option>
                            <option value="COED">COED</option>
                            <option value="CAS">CAS</option>
                            <option value="CAFA">CAFA</option>
                            <option value="COE">COE</option>
                            <option value="SHCP">SHCP</option>
                        </select>
                        </div>
                      </div>
                      
                      
                      
                      <div class="form-group">
                          <label class="control-label col-lg-4">Department/Office/SO Name</label>
              <div class="col-md-4">
                          <input id="banner-name" class="form-control" type="text" name="officeName"><br><br>
              </div>
                      </div>
          
          <div class="form-group">
            
                  <!-- End of form sa modal -->
                      
                     </div><!-- End of Modal body -->
            <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success">Add</button>
      </div>
    </form>
                    </div><!-- End of Modal content -->
                    </div><!-- End of Modal dialog -->
                  </div><!-- End of editModal -->
    </div>
    </div>
    </div> <!-- End of Container -->
