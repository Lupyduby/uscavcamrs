<div id="contentMargin">
<div class="container equipments-container">
<div class="row">
    
    <div class="col-lg-12" role="main">
      <h2 id="equip-manage" class="page-header">AV Hall Management</h2>
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
                <th><h4>Capacity</h4></th>
                <th><h4>Description</h4></th>
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
                    <td><?php echo $result[$i]->Hall_Name; ?></td>
                    <td><?php echo $result[$i]->Hall_Capacity; ?></td>
                    <td><?php echo $result[$i]->Hall_Desc; ?></td>
                   
                    <td>
                        <button class="btn btn-default btn-sm" type="button">
                        <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>
                        </button>
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