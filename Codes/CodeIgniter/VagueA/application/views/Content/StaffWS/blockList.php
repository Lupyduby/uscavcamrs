<div id="contentMargin">
<div class="container equipments-container">
<div class="row">

    
    <div class="col-lg-12" role="main">
      <h2 id="equip-manage" class="page-header">List of Blocks</h2>
    </div>
      <div class="row action-header" >
            <a href="<?php echo base_url(); ?>user/reservation" role="button" id="btnFix" data-toggle="modal"><center>
            <span class="glyphicon glyphicon-plus" aria-hidden="true">ADD BLOCK</span></center></a>
        
      </div>
      
      
      
      <div class="equipments-content">
        <div class="table-responsive">
          <table id="table_id" class="display">
            <thead class="theader-contents">
              <tr>
                <th ><h4>Campus</h4></th>
                <th id="oneLineTd"><h4>Hall</h4></th>
                <th id="oneLineTd"><h4>Activity</h4></th>
                <th id="oneLineTd"><h4>Date</h4></th>
                <th id="oneLineTd"><h4>Start time</h4></th>
                <th id="oneLineTd"><h4>End time</h4></th>
              </tr>
            </thead>
            <tbody class="table-contents">
              <?php $i=0; 
                while($i<$num)
                {
                  
              ?>
                <tr>
                    <td><?php echo $result[$i]->Campus_name; ?></td>
                    <td id="oneLineTd"><?php echo $result[$i]->Hall_Name; ?></td>
                    <td id="oneLineTd"><?php echo $result[$i]->Reservation_BlockActivity; ?></td>
                    <td id="oneLineTd"><?php echo date("F d, Y",strtotime($result[$i]->Reservation_Date)); ?></td>
                    <td id="oneLineTd"><?php echo date("g:i A",strtotime($result[$i]->Reservation_timeStart)); ?></td>
                    <td id="oneLineTd"><?php echo date("g:i A",strtotime($result[$i]->Reservation_timeEnd)); ?></td>
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