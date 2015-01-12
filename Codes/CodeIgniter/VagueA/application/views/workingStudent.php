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
                <th><h4>Surname</h4></th>
                <th><h4>Forename</h4></th>
                <th><h4>Username</h4></th>
                <th><h4>Campus</h4></th>
                <th><h4>Hall</h4></th>
                <th><h4>Monday</h4></th>
                <th><h4>Tuesday</h4></th>
                <th><h4>Wednesay</h4></th>
                <th><h4>Thursday</h4></th>
                <th><h4>Friday</h4></th>
                <th><h4>Saturday</h4></th>
                <th><h4>Update/Delete</h4></th>
              </tr>
            </thead>
            <tbody class="table-contents">
              <?php $i=0; ; 
                while($i<$num)
                {
                  
              ?>
                <tr>
                    <td><?php echo $result[$i]->Person_LName; ?></td>
                    <td><?php echo $result[$i]->Person_FName; ?></td>
                    <td><?php echo $result[$i]->Person_Username; ?></td>
                    <td><?php echo $result[$i]->Campus_Name; ?></td>
                    <td><?php echo $result[$i]->Hall_Name; ?></td>
                    <?php $schedCount=0;
                          while($schedCount<6)
                          {
                    ?>
                              <td><?php echo $dutySched[$schedCount]->DutySched_TimeIn." - ". $dutySched[$schedCount]->DutySched_TimeOut; ?></td>
                    <?php $schedCount++; } ?>
                    <td>
                        <button class="btn btn-default btn-sm" type="button">
                        <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>
                        </button>
                        <button class="btn btn-default btn-sm" type="button">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                        </button>
                    </td>
                </tr>
              <?php $i++; $schedCount=$schedCount+6; } ?>
             
            </tbody>
  
          </table>
          
        </div>

      </div>
     
    </div>
    </div>
    </div> <!-- End of Container -->
  </div>