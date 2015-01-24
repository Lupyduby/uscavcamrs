<div id="contentMargin">
<div id="contentMargin">
<div class="container equipments-container">
<div class="row">
  <ol class="breadcrumb">
        <li><a href="#">Manage</a></li>
        <li class="active">Equipment Management</li>
 </ol>
    
    <div class="col-lg-12" role="main">
      <h2 id="equip-manage" class="page-header">Equipment Management</h2>
      <div class="row action-header">
        <div class="col-md-6 col-md-offset-6">
      <a href="#addmodal" role="button" id="btnAddManage" data-toggle="modal"><center>
            <span class="glyphicon glyphicon-plus" aria-hidden="true">ADD EQUIPMENT</span></center></a>
      <!-- addModal -->
                  <div id="addmodal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title">Add New Equipments</h4>
                    </div>
                    <div class="modal-body">
                    <!--form sa modal -->
                    

                    <?php echo validation_errors(); ?>

                    <form method="post" action="<?php echo base_url(); ?>StaffWS/addEquipment">
                    
                        
                   
                      <div class="form-group">
                         <label class="control-label col-md-4">Name</label>
                        <input id="banner-name" class="form-control2" type="text"  required="" name="name">
                     </div>

                      <div class="form-group">
                      <label class="control-label col-md-4">Brand</label>
                        <input id="banner-email" class="form-control2" type="text" required="" name="brand">
                      </div>
                      <div class="form-group">
                      <label class="control-label col-md-4">Serial #</label>
                        <input id="banner-name" class="form-control2" type="text"  required="" name="serial">
                     </div>
                      <div class="form-group">
                      <label class="control-label col-md-4">Remarks</label>
                        <input id="banner-email" class="form-control2" type="text"  required="" name="remarks">
                      </div>
                      <div class="form-group">
                      <label class="control-label col-md-4">Quantity</label>
                        <input id="banner-email" class="form-control2" type="number" min="1" required="" name="qty">
                      </div>
                       <button class="btn btn-default btn-submit" type="submit" id="btnAdd">Save</button>
                                            
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
                <th><h4>Campus</h4></th>
                <th><h4>Name</h4></th>
                <th><h4>Brand</h4></th>
                <th><h4>Serial</h4></th>
                <th><h4>Remarks</h4></th>
                <th><h4>Quantity</h4></th>
                <th><h4>Update</h4></th>
                <th><h4>Delete</h4></th>
              </tr>
            </thead>
            
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
               <a href="<?php echo "#editmodal".$i; ?>" role="button" class="btn btn-custom" data-toggle="modal">
                <span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
                
                        <!-- editModal -->
                        
                      <div id="<?php echo "editmodal".$i; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                          <h4 class="modal-title">Update Equipments</h4>
                        </div>
                        <div class="modal-body">
                        <!--form sa modal -->
                         <form method="post" action="<?php echo base_url(); ?>StaffWS/updateEquipment">
                
                          <input type="hidden"  value="<?php echo $result[$i]->Asset_ID; ?>" name="id">
                          
               

                        <div class="form-group">
                            <label class="control-label col-md-4">Name</label>
                            <input id="banner-name" class="form-control2" type="text"  value="<?php echo $result[$i]->Asset_Name; ?>" required="" name="name">
                         </div>

                          <div class="form-group">
                          <label class="control-label col-md-4">Brand</label>
                            <input id="banner-email" class="form-control2" type="text" value="<?php echo $result[$i]->Asset_Brand; ?>" required="" name="brand">
                          </div>
                          <div class="form-group">
                          <label class="control-label col-md-4">Serial #</label>
                            <input id="banner-name" class="form-control2" type="text" value="<?php echo $result[$i]->Asset_Serial; ?>" required="" name="serial">
                         </div>
                          <div class="form-group">
                          <label class="control-label col-md-4">Remarks</label>
                            <input id="banner-email" class="form-control2" type="text" value="<?php echo $result[$i]->Asset_Remarks; ?>" required="" name="remarks">
                          </div>
                          <div class="form-group">
                          <label class="control-label col-md-4">Quantity</label>
                            <input id="banner-email" class="form-control2" type="number" min="1" value="<?php echo $result[$i]->Asset_Quantity; ?>" required="" name="qty">
                          </div>
                          <div class="form-group">
                           <button class="btn btn-default btn-submit" type="submit">Update</button>
                          </div>
                       
                          
                         </div><!-- End of Modal body -->
                        </div><!-- End of Modal content -->
                        </div><!-- End of Modal dialog -->
                      </div><!-- End of editModal -->
                       </form><!-- End of form sa modal -->
                      </td>

                         <td>         
                         <form method="post" action="<?php echo base_url(); ?>StaffWS/deleteEquipment">
                        <input type="hidden" name="id" value="<?php echo $result[$i]->Asset_ID; ?>" />
                            <button class="btn btn-default btn-sm" type="submit">
                               <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                            </button>
                        </form>
                        </td>
                          </tr>
              

                  <?php $i++; } ?> 
              
                             
            
  
          </table>
          </div>
        </div>

   </div>
     
    </div>
    </div>
    </div> <!-- End of Container -->
  </div>