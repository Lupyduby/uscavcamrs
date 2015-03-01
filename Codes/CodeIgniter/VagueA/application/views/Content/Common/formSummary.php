<script>
function printPage(id)
{
   var html="<html>";
   html+= document.getElementById(id).innerHTML;

   html+="</html>";

   var printWin = window.open('','','left=0,top=0,width=1,height=1,toolbar=0,scrollbars=0,status  =0');
   printWin.document.write(html);
   printWin.document.close();
   printWin.focus();
   printWin.print();
   printWin.close();
}
</script>



<div id="marginTopSummary">
<div class="col-md-11 reservation-form">
     
  <div id="print">
      <h1><center/>Summary of Reservation Form</h1>
     
      <table class="purpose-content" id="marginLeftSummary">
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
          <td><h4 id="purpose">Purpose</h4></td>
          <td><?php echo $reservation[0]->Reservation_Purpose; ?></td>
        </tr>
        <tr>
          <td><h4 id="purpose">Activity</h4></td>
          <td><?php echo $reservation[0]->Activity_Name; ?></td>
        </tr>
        <tr>
          <td><h4 id="purpose">Equipments needed</h4></td>
          <td></td>
        </tr>
        <?php $i=0; 
                while($i<$numAsset)
                {
                   
              ?>
         <tr><td></td><td><?php echo $assetNames[$i]->Asset_Name; ?></td></tr>
         <?php $i++; } ?>
          <td><h4 id="purpose">Software Needed</h4></td>
          <td></td>
        </tr>
        <?php 
        $i=0;
        while($i<$num)
        {
          echo "<tr><td></td><td>".$software[$i]->Software_title."</td></tr>"; 
          $i++;
        }
        
        ?>
       
  </table>
    

      

        
   </div>
   <br>
   <button type="submit" class="btn btn-success" onclick="printPage('print');" id="btnLeftSummary">Print</button>
</div>

    </div>
    </div> <!-- End of Container -->