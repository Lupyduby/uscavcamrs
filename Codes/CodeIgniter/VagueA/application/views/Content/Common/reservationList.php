<div id="contentMargin">
<div class="container equipments-container">
<div class="row">

    
    <div class="col-lg-12" role="main">
      <h2 id="equip-manage" class="page-header">List of Reservations</h2>
      <div class="row action-header">
        <div class="col-md-6 col-md-offset-6">
            <a href="<?php echo base_url(); ?>user/reservation" role="button" id="btnReserve" data-toggle="modal"><center>
            <span class="glyphicon glyphicon-plus" aria-hidden="true">ADD RESERVATION</span></center></a>
         </div>
      </div>
      
      <div class="equipments-content">
        <div class="table-responsive">
          <table id="table_id" class="display">
            <thead class="theader-contents">
              <tr>
                <th ><h4>Campus</h4></th>
                <th id="oneLineTd"><h4>Hall</h4></th>
                <th id="oneLineTd"><h4>Purpose</h4></th>
                <th id="oneLineTd"><h4>Activity</h4></th>
                <th id="oneLineTd"><h4>Date</h4></th>
                <th id="oneLineTd"><h4>Start time</h4></th>
                <th id="oneLineTd"><h4>End time</h4></th>
              <?php if($this->session->userdata('type')!="VPA" && $this->session->userdata('type')!="VPA" && $this->session->userdata('type')!="Dean") 
                    echo "<th id='oneLineTd'><h4>Endorsed by</h4></th>"; ?>
                <?php if($this->session->userdata('type')!="VPA" && $this->session->userdata('type')!="VPA") 
                 echo "<th id='oneLineTd'><h4>Approved by</h4></th>"; ?>
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
                    <td id="oneLineTd"><?php echo $result[$i]->Reservation_Purpose; ?></td>
                    <td id="oneLineTd"><?php echo $result[$i]->Activity_Name; ?></td>
                    <td id="oneLineTd"><?php echo date("F d, Y",strtotime($result[$i]->Reservation_Date)); ?></td>
                    <td id="oneLineTd"><?php echo date("g:i A",strtotime($result[$i]->Reservation_timeStart)); ?></td>
                    <td id="oneLineTd"><?php echo date("g:i A",strtotime($result[$i]->Reservation_timeEnd)); ?></td>
                    <?php 
                      if($this->session->userdata('type')!="VPA" && $this->session->userdata('type')!="VPA" && $this->session->userdata('type')!="Dean") 
                      echo "<td id='oneLineTd'>".$result[$i]->Reservation__Endorse_Status."</td>"; ?>
                      <?php if($this->session->userdata('type')!="VPA" && $this->session->userdata('type')!="VPA")  
                      echo "<td id='oneLineTd'>". $result[$i]->Reservation_Approve_Status."</td>"; ?>
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