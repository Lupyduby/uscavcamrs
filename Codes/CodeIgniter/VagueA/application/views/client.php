<div id="contentMargin">
<div class="container equipments-container">
<div class="row">
    
    <div class="col-lg-12" role="main">
      <h2 id="equip-manage" class="page-header">Client Management</h2>
      <div class="row action-header">
        <div class="col-md-6 col-md-offset-6">
           <a href="#addmodal" role="button" id="btnAddManage" data-toggle="modal"><center>
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span></center></a>

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
                        <button class="btn btn-default btn-sm" type="button">
                        <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>
                        </button>
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