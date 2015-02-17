<div class="col-md-11 reservation-form">
      <h1><center/>Summary of Reservation Form</h1>
     
      <table class="purpose-content">
        <tr>
          <td><h4 id="purpose">Reservation ID</h4></td>
          <td><?php echo $reservation[0]->Reservation_ID; ?></td>
        </tr>
        <tr>
          <td><h4 id="purpose">Client</h4></td>
          <td><?php echo $reservation[0]->Person_FName; ?> <?php echo $reservation[0]->Person_LName; ?></td>
        </tr>
        <tr>
        <tr>
          <td><h4 id="purpose">Campus</h4></td>
          <td> <?php echo $reservation[0]->Campus_Name; ?></td>
        </tr>
        <tr>
          <td><h4 id="purpose">Hall</h4></td>
          <td><?php echo $reservation[0]->Hall_Name; ?></td>
        </tr>
        <tr>
          <td><h4 id="purpose">Date</h4></td>
          <td><?php echo date("F d, Y",strtotime($reservation[0]->Reservation_Date)); ?></td>
        </tr>
        <tr>
          <td><h4 id="purpose">Time Start</h4></td>
          <td><?php echo date("g:i A",strtotime($reservation[0]->Reservation_timeStart)); ?></td>
        </tr>

        <tr>
          <td><h4 id="purpose">Time end</h4></td>
          <td><?php echo date("g:i A",strtotime($reservation[0]->Reservation_timeEnd)); ?></td>
        </tr>
        <tr>
          <td><h4 id="purpose">Activity</h4></td>
          <td><?php echo $reservation[0]->Reservation_BlockActivity; ?></td>
        </tr>
       
       
  </table>
    

      

        
   </div>



    </div>
    </div> <!-- End of Container -->