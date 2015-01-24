<div id="contentMargin">
<div class="container equipments-container">
<div class="row">
  <ol class="breadcrumb">
        <li><a href="#">Manage</a></li>
        <li class="active">Client Management</li>
      </ol>
    
    <div class="col-lg-12" role="main">
      <h2 id="equip-manage" class="page-header">Client Management</h2>
      <div class="row action-header">
        <div class="col-md-6 col-md-offset-6">
           <a href="#addmodal" role="button" id="btnAddManage" data-toggle="modal"><center>
            <span class="glyphicon glyphicon-plus" aria-hidden="true">ADD CLIENT</span></center></a>

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
                    <form method="post" action="<?php echo base_url(); ?>StaffWS/addClient">
                           
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
                        <option value="2">North Campus</option>
                        <option value="3">South Campus</option>
                        <option value="4">Talamban Campus</option>
                    </select>

                      <div class="form-group">
                      <label class="control-label col-md-4">User type</label>
                      <select name="type" class="form-control2">
                          <option value="Chairman" id="ordi">Chairman</option>
                          <option value="Dean" id="ordi">Dean</option>
                          <option value="Faculty" id="ordi">Faculty</option>
                          <option value="OSA" id="vpa">OSA</option>
                          <option value="SOC" id="soType">Student Organization - Co-Curricular</option>
                          <option value="SOE" id="soType">Student Organization - Extra-Curricular</option>
                          <option value="VPA"  id="vpa">VPA</option>
                          <option value="VPAA" id="vpa">VPAA</option>
                      </select>
                      </div>

                      
                      <div id="ordinary" class="form-group">
                      <label class="control-label col-md-4">College</label>
                        <select name="college" class="form-control2">
                            <option value="SBE">SBE</option>
                            <option value="SLG">SLG</option>
                            <option value="COED">COED</option>
                            <option value="CAS">CAS</option>
                            <option value="CAFA">CAFA</option>
                            <option value="COE">COE</option>
                            <option value="SHCP">SHCP</option>
                        </select>
                        
                      </div>
                      
                      
                      
                      <div class="form-group">
                          <label class="control-label col-md-4">Department/Office/SO Name</label>
                          <input id="banner-name" class="form-control2" type="text" name="officeName"><br><br>
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
                            <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                              <h4 class="modal-title">Update Client</h4>
                            </div>
                            <div class="modal-body">
                            <!--form sa modal -->
                            <form method="post" action="<?php echo base_url(); ?>StaffWS/updateClient">
                           
                            <input type="hidden"  value="<?php echo $result[$i]->Person_ID; ?>" name="id">
                          
                            <div class="form-group">
                                <label class="control-label col-md-4">SurName</label>
                                <input id="banner-name" class="form-control2" type="text"  value="<?php echo $result[$i]->Person_LName; ?>" name="lname">
                             </div>                                     
                           

                            <div class="form-group">
                                <label class="control-label col-md-4">ForeName</label>
                                <input id="banner-name" class="form-control2" type="text" value="<?php echo $result[$i]->Person_FName; ?>"   name="fname">
                             </div>

                              <div class="form-group">
                              <label class="control-label col-md-4">Type</label>
                              <select name="type" class="form-control2">

                                  <option value="VPA" <?php if($result[$i]->Person_type=="VPA") echo "selected"; ?>>VPA</option>  
                                  <option value="VPAA" <?php if($result[$i]->Person_type=="VPAA") echo "selected"; ?>>VPAA</option>
                                  <option value="OSA" <?php if($result[$i]->Person_type=="OSA") echo "selected"; ?>>OSA</option>
                                  <option value="Dean" <?php if($result[$i]->Person_type=="Dean") echo "selected"; ?>>Dean</option>
                                  <option value="Faculty" <?php if($result[$i]->Person_type=="Faculty") echo "selected"; ?>>Faculty</option>
                                  <option value="SO" <?php if($result[$i]->Person_type=="SO") echo "selected"; ?>>Student Organization</option>

                              </select>
                              </div>
                              <div class="form-group">
                              <label class="control-label col-md-4">College/Office/SO</label>
                                 <input id="banner-name" class="form-control2" type="text" value="<?php
                                      if($result[$i]->Person_type=="SO") 
                                           echo $result[$i]->SO_Name;
                                       else if ($result[$i]->Person_type=="OSA" || $result[$i]->Person_type=="Dean" ||$result[$i]->Person_type=="Office" || $result[$i]->Person_type=="VPA" || $result[$i]->Person_type=="VPAA" )
                                          echo $result[$i]->User_Office_Name;
                                      else 
                                          echo $result[$i]->User_college;
                                    ?>" name="officeName">
                             </div>
                             <div class="form-group">
                               <button class="btn btn-default btn-submit" type="submit">Update</button>
                              </div>
                              </form>
                              <form method="post" action="<?php echo base_url(); ?>StaffWS/resetPassword">
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
                            	<div class="modal-dialog">
		                            <div class="modal-content">
			                            <div class="modal-header">
			                              
			                            	 <form method="post" action="<?php echo base_url(); ?>StaffWS/deleteClient">
			                            	 	Are you sure you want to delete?
							                        <input type="hidden" name="id" value="<?php echo $result[$i]->Person_ID; ?>" >
							                        <input type="hidden" name="type" value="<?php echo $result[$i]->Person_type; ?>" >
							                        <button class="btn btn-default btn-sm" type="submit" value="YES">YES</button>
							                        <button type="button" class="close btn btn-default btn-sm" data-dismiss="modal" aria-hidden="true">NO</button>
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
  