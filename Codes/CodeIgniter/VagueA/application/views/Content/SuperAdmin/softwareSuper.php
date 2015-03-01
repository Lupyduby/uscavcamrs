<div id="contentMargin">
<div class="container equipments-container content">
<div class="row">
  <ol class="breadcrumb">
        <li><a href="#">Manage</a></li>
        <li class="active">Software Management</li>
      </ol>
    
    <div class="panel panel-default">
  <div class="panel-body">
  <div class="panel panel-success">
  <div class="col-md-12 panel-heading"> <!--panel heading-->
  <div class="col-md-9 title-content"> 
    <h3 class="panel-title"><span class="glyphicon glyphicon-cd" aria-hidden="true"></span>  Software Management</h3>
  </div>
  
  </div> <!--panel heading-->
     
     <div class="panel-body"> 
      <div class="equipments-content">
        <div class="table-responsive">
          <table id="table_id" class="display">
            <thead class="theader-contents">
              <tr>
                <th><h4>Campus</h4></th>
                <th><h4>Code</h4></th>
                <th><h4>Title</h4></th>
                <th><h4>Runtime</h4></th>
                <th id="oneLineTd"><h4>Call Number</h4></th>
                <th><h4>Status</h4></th>
                <th><h4>Borrowed by</h4></th>
               
              </tr>
            </thead>
            <tbody class="table-contents">
              <?php $i=0; 
                while($i<$num)
                {
                  
              ?>
                <tr>
                    <td id="oneLineTd"><?php echo $result[$i]->Campus_Name; ?></td>
                    <td id="oneLineTd"><?php echo $result[$i]->Software_CallNumber; ?></td>
                    <td id="oneLineTd"><?php echo $result[$i]->Software_title; ?></td>
                    <td id="oneLineTd"><?php echo $result[$i]->Software_runningTime; ?></td>
                    <td id="oneLineTd"><?php echo $result[$i]->Software_Code; ?></td>
                    <td id="oneLineTd"><?php echo $result[$i]->Software_Status; ?></td>
                    <td id="oneLineTd"><?php echo $result[$i]->Person_FName." ".$result[$i]->Person_LName; ?></td>
                   
                </tr>
              <?php $i++; } ?>
             
            </tbody>
  
          </table>
          
        </div>

      </div>
     
    </div> <!--panel body-->
    </div> <!--panel success-->
  </div> <!--panel body-->
  </div> <!--panel default-->
    </div> <!-- End of Container -->
  </div>
  </div>
  
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
                        <label class="control-label col-lg-4">Call number</label>
                        <div class="col-md-4">
                        <input id="banner-name" class="form-control" type="text"  required="" name="cnum">
                        </div>
                          </div>

                            <div class="form-group">
                            <label class="control-label col-lg-4">Title</label>
              <div class="col-md-4">
                              <input id="banner-email" class="form-control" type="text" required="" name="title">
                            </div>
              </div>
                            <div class="form-group">
                            <label class="control-label col-lg-4">Runtime</label>
              <div class="col-md-4">
                              <input id="banner-name" class="form-control" type="time"  required="" name="runtime">
                           </div>
               </div>
                            <div class="form-group">
                            <label class="control-label col-lg-4">Code</label>
              <div class="col-md-4">
                              <input id="banner-email" class="form-control" type="text"   name="code">
                            </div>
              </div>
                           <div class="form-group">
                            <label class="control-label col-lg-4">Quantity</label>
              <div class="col-md-4">
                              <input id="banner-email" class="form-control" type="number" min="1" required="" name="qty">
                            </div>
              </div>
                    </div><!-- End of Modal body -->
          <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success" id="btnAdd">Add</button>
      </div>
    </form>
                    </div><!-- End of Modal content -->
                    </div><!-- End of Modal dialog -->
                  </div><!-- End of addModal --> 