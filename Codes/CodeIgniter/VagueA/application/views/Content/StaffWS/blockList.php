<div id="contentMargin">
<div class="container equipments-container content">
<div class="row">
<div class="panel panel-default">
  <div class="panel-body">
  <div class="panel panel-success">
  <div class="col-md-12 panel-heading">
  <div class="col-md-9 title-content">
    <h3 class="panel-title"><span class="glyphicon glyphicon-list" aria-hidden="true"></span>  List of Blocks</h3>
  </div>
  <div class="col-md-3">
  <a href="<?php echo base_url(); ?>user/reservation" role="button" class="btn btn-primary btn-xs" id="btnFix" data-toggle="modal" style="float:right;">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> ADD BLOCK</a>
  </div>
  </div>
  <div class="panel-body">
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
           
            
  

          
   </div>

      </div>
  </div>
</div>
    
    
     
    </div>
    </div>
    </div> <!-- End of Container -->
