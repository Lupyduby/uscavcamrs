

 <div id="contentMargin">


<div class="container"> <!--Carousel-->
  <div id="myCarousel" class="carousel slide">
    <ol class="carousel-indicators">
      <li class="active" data-slide-to="0" data-target="#myCarousel"></li>
      <li class="" data-slide-to="1" data-target="#myCarousel"></li>
      <li class="" data-slide-to="2" data-target="#myCarousel"></li>
      <li class="" data-slide-to="3" data-target="#myCarousel"></li>
      <li class="" data-slide-to="4" data-target="#myCarousel"></li>
      <li class="" data-slide-to="5" data-target="#myCarousel"></li>
      <li class="" data-slide-to="6" data-target="#myCarousel"></li>
    </ol>
  <div class="carousel-inner">
    <div class="item active">
      <img src="<?php echo base_url(); ?>assets/img/bhall1.jpg" alt="Slide1">
      <div class="carousel-caption">
        <h2>Anthony Buchcick Hall</h2>
      </div>
    </div>
    <div class="item">
      <img src="<?php echo base_url(); ?>assets/img/bhall2.jpg" alt="Slide2">
      <div class="carousel-caption">
        <h2>Anthony Buchcick Hall</h2>
      </div>
    </div>
    <div class="item">
      <img src="<?php echo base_url(); ?>assets/img/cavr.jpg" alt="Slide3">
      <div class="carousel-caption">
        <h2>Philip Van Engelen Hall</h2>
      </div>
    </div>

    <div class="item">
      <img src="<?php echo base_url(); ?>assets/img/ghall1.JPG" alt="Slide4">
      <div class="carousel-caption">
        <h2>Albert van Gansewinkel Hall</h2>
      </div>
    </div>

    <div class="item">
    <img src="<?php echo base_url(); ?>assets/img/ghall2.JPG" alt="Slide4">
    <div class="carousel-caption">
    <h2>Albert van Gansewinkel Hall</h2>

    </div>
    </div>

    <div class="item">
    <img src="<?php echo base_url(); ?>assets/img/tbhall1.JPG" alt="Slide4">
    <div class="carousel-caption">
    <h2>Theodore Buttenbruch Hall</h2>

    </div>
    </div>

    <div class="item">
    <img src="<?php echo base_url(); ?>assets/img/tbhall2.JPG" alt="Slide4">
    <div class="carousel-caption">
    <h2>Theodore Buttenbruch Hall</h2>

    </div>
    </div>
  </div>


  <div class="carousel-controls">
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
  </div>
  </div>
</div> <!--Carousel-->



<div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="false">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="glyphicon glyphicon glyphicon-remove"></i></button>
            <h2 class="modal-title" id="myModalLabel"><i class="glyphicon glyphicon-list"></i> Steps for Booking</h2>
            </div>
            <div class="modal-body">
                 <ol class="steps-content">
                    <li>Go to Calendar Tab and select the Hall you want to view and book.</li><br>
                    <li>View the available dates either in monthly or daily view in the calendar.</li><br>
                    <li>Click on the date you want to book.</li><br>
                    <li>The Validation Form will appear. Then fill-up the information needed. Click "Validate" button to validate if the hall is available based from the time and date inputted.</li><br>
                    <li>After validating, you will be redirected to the Reservation Form. Input the reservation details asked and click "Submit". </li><br>
                    <li>A Summary of Information regaring the Reservation made will appear. You can choose to print it or not for proof of Reservation.</li><br>
                    <li>An email will be sent to you after a successful booking.</li><br>
                    <li>Wait for the Endorser to endorse your booking and for the Approver to approve it. </li><br>
                    <li>Emails will be sent to notify you whether your booking is endorsed/approved or not.</li><br>

                 </ol> 
            </div>
            <div class="modal-footer">
             <a href="<?php echo base_url(); ?>user/guideline"><h4>Click to see AVC Guidelines and Policy</h4></a>   
        </div>
    </div>
  </div>
</div>




    <div class="userhome-content">
          <div class="container">
            <div class="row">
    <div class="col-md-7 col-sm-7" id="usertabs">
      <div class="usertab-content">               
      <ul class="nav nav-tabs nav-justified" id="usertab-content">
      <li role="presentation">
      <a href="#hall-info" data-toggle="tab">Hall Information</a>
      </li>
      </ul>
      </div> 

      <div class="#">
        <div class="tab-pane" id="hall-info">
          <ul class="list-group">
            <li class="list-group-item">
                <h4 class="list-group-item-heading">Buttenbruch Hall</h4>
                <p class="list-group-item-text">Hall Hours: 7:30 AM - 8:00 PM</p>
                <p class="list-group-item-text">Campus: Downtown Campus</p>
                <p class="list-group-item-text">Capacity: 240</p>
                <p class="list-group-item-text">Location: Archbishop Gabriel Reyes Building </p>
            </li>
            <li class="list-group-item">
                <h4 class="list-group-item-heading">Albert van Ganseiwinkel Hall</h4>
                <p class="list-group-item-text">Hall Hours: 7:30 AM - 7:30 PM</p>
                <p class="list-group-item-text">Campus: Downtown Campus</p>
                <p class="list-group-item-text">Capacity: 240</p>
                <p class="list-group-item-text">Location: Hoerdemann Law and Business Building</p>
            </li>
            <li class="list-group-item">
                <h4 class="list-group-item-heading">Buchcick Hall</h4>
                <p class="list-group-item-text">Hall Hours: 7:30 AM - 7:30 PM</p>
                <p class="list-group-item-text">Campus: South Campus</p>
                <p class="list-group-item-text">Capacity: 110</p>
                <p class="list-group-item-text">Location: Anthony Buchcick Hall</p>
            </li>
            <li class="list-group-item">
                <h4 class="list-group-item-heading">Rigney Hall</h4>
                <p class="list-group-item-text">Hall Hours: 7:00 AM - 7:30 PM</p>
                <p class="list-group-item-text">Campus: Talamban Campus</p>
                <p class="list-group-item-text">Capacity: 192</p>
                <p class="list-group-item-text">Location: Lorenzo Bunzel Building</p>
            </li>
            <li class="list-group-item">
                <h4 class="list-group-item-heading">Van Engelen Hall</h4>
                <p class="list-group-item-text">Hall Hours: 7:00 AM - 6:30 PM</p>
                <p class="list-group-item-text">Campus: Talamban Campus</p>
                <p class="list-group-item-text">Capacity: 100</p>
                <p class="list-group-item-text">Location: Philip van Engelen Building</p>
            </li>
            <li class="list-group-item">
                <h4 class="list-group-item-heading">Heoppener Hall</h4>
                <p class="list-group-item-text">Hall Hours: 7:00 AM - 6:30 PM</p>
                <p class="list-group-item-text">Campus: Talamban Campus</p>
                <p class="list-group-item-text">Capacity: 130</p>
                <p class="list-group-item-text">Location: Robert Heoppener Building</p>
            </li>
       </ul> 
        </div>
      </div>
  </div>

    <div class="col-lg-4 col-md-4 col-md-offset-1 col-sm-5">
   <div class="sched-area">
  <div class="panel panel-success">
    <div class="panel-heading">
        <h3 class="panel-title">Today's Schedule</h3>
    </div>
    
        <ul class="list-group">
            <li class="list-group-item">
                <h4 class="list-group-item-heading">Buttenbruch Hall</h4>
                <?php $i=0; $k=0;
                while($i<$num)
                {

                  if($result[$i]->Hall_ID==5)
                  {
                   echo "<p class='list-group-item-text'>";
                   
                   if($result[$i]->Reservation_Block==1)
                     echo  $result[$i]->Reservation_BlockActivity;
                   else
                     $result[$i]->Activity_Name; 
                  
                   echo" c/o ".$result[$i]->Person_Lname." - ". date("g:i A", strtotime($result[$i]->Reservation_timeStart))." - ".date("g:i A", strtotime($result[$i]->Reservation_timeEnd))."</p>";
                   $k++;
                  }
                  $i++;
                }

                if($k==0){
                  echo "<p class='list-group-item-text'>No reservation for today!</p>";
                }
                ?>
            </li>
            <li class="list-group-item">
                <h4 class="list-group-item-heading">Albert van Ganseiwinkel Hall</h4>
                <?php $i=0; $k=0;
                while($i<$num)
                {
                   if($result[$i]->Hall_ID==6)
                  {
                   echo "<p class='list-group-item-text'>";
                   
                   if($result[$i]->Reservation_Block==1)
                     echo  $result[$i]->Reservation_BlockActivity;
                   else
                     $result[$i]->Activity_Name; 
                  
                   echo" c/o ".$result[$i]->Person_Lname." - ". date("g:i A", strtotime($result[$i]->Reservation_timeStart))." - ".date("g:i A", strtotime($result[$i]->Reservation_timeEnd))."</p>";
                   $k++;
                }
                $i++;
                }
                if($k==0){
                  echo "<p class='list-group-item-text'>No reservation for today!</p>";
                }
                ?>
            </li>
            <li class="list-group-item">
                <h4 class="list-group-item-heading">Buchcick Hall</h4>
               <?php $i=0; $k=0;
                while($i<$num)
                {
                   if($result[$i]->Hall_ID==4)
                  {
                   echo "<p class='list-group-item-text'>";
                   
                   if($result[$i]->Reservation_Block==1)
                     echo $result[$i]->Reservation_BlockActivity;
                   else
                     echo $result[$i]->Activity_Name; 
                  
                   echo " c/o ".$result[$i]->Person_Lname." - ". date("g:i A", strtotime($result[$i]->Reservation_timeStart))." - ".date("g:i A", strtotime($result[$i]->Reservation_timeEnd))."</p>";
                   $k++;
                }
                  $i++;
                }

                if($k==0){
                  echo "<p class='list-group-item-text'>No reservation for today!</p>";
                }
                ?>
            </li>
            <li class="list-group-item">
                <h4 class="list-group-item-heading">Rigney Hall</h4>
               <?php $i=0; $k=0;
                while($i<$num)
                {
                   if($result[$i]->Hall_ID==1)
                  {
                   echo "<p class='list-group-item-text'>";
                   
                   if($result[$i]->Reservation_Block==1)
                     echo  $result[$i]->Reservation_BlockActivity;
                   else
                     echo $result[$i]->Activity_Name; 
                  
                   echo" c/o ".$result[$i]->Person_Lname." - ". date("g:i A", strtotime($result[$i]->Reservation_timeStart))." - ".date("g:i A", strtotime($result[$i]->Reservation_timeEnd))."</p>";
                   $k++;
                  }
                  $i++;
                }
                if($k==0){
                  echo "<p class='list-group-item-text'>No reservation for today!</p>";
                }
                ?>
            </li>
            <li class="list-group-item">
                <h4 class="list-group-item-heading">Van Engelen Hall</h4>
                <?php $i=0; $k=0;
                while($i<$num)
                {
                  if($result[$i]->Hall_ID==3)
                  {
                   echo "<p class='list-group-item-text'>";
                   
                   if($result[$i]->Reservation_Block==1)
                     echo  $result[$i]->Reservation_BlockActivity;
                   else
                     echo $result[$i]->Activity_Name; 
                  
                   echo" c/o ".$result[$i]->Person_Lname." - ". date("g:i A", strtotime($result[$i]->Reservation_timeStart))." - ".date("g:i A", strtotime($result[$i]->Reservation_timeEnd))."</p>";
                   $k++;
                  }
                $i++;
                }
                if($k==0){
                  echo "<p class='list-group-item-text'>No reservation for today!</p>";
                }
                ?>
            </li>
            <li class="list-group-item">
               <h4 class="list-group-item-heading">Heoppener Hall</h4>
                <?php $i=0; $k=0;
                while($i<$num)
                {
                   if($result[$i]->Hall_ID==2)
                  {
                   echo "<p class='list-group-item-text'>";
                   
                   if($result[$i]->Reservation_Block==1)
                      echo  $result[$i]->Reservation_BlockActivity;
                   else
                      echo  $result[$i]->Activity_Name; 
                  
                   echo" c/o ".$result[$i]->Person_Lname." - ". date("g:i A", strtotime($result[$i]->Reservation_timeStart))." - ".date("g:i A", strtotime($result[$i]->Reservation_timeEnd))."</p>";
                   $k++;
                }
                  $i++;
                }
                if($k==0){
                  echo "<p class='list-group-item-text'>No reservation for today!</p>";
                }
                ?>
            </li>
       </ul> 
    
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>
</div>


<script type="text/javascript">


    $(window).load(function(){
        $('#basicModal').modal('show');
    });

</script>