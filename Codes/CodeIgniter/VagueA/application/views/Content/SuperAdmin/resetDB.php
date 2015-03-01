
<div class="contentMargin">
    <div class="guidelines-container content">
        <div class="row">
        
          <div class="panel panel-default">
            <div class="panel-body">
        <dl class="tabs" data-tab> 
            <center><h2 class="page-header">Reset Database</h3></center>
            
        </dl> 
         <?php 
            if($this->session->userdata('message'))
            {
              echo $this->session->userdata('message')."<br>";
              $this->session->unset_userdata('message');
            }
           
          ?>
        <div class="container">
        <div class="col-lg-8">  
        <a href="<?php echo base_url(); ?>superAdmin/resetReservation"><button type="submit" class="btn btn-success btn-lg btn-block" value="Reservation">Reservation</button></a><br>
        </div>
        <div class="col-lg-8"> 
        <a href="<?php echo base_url(); ?>superAdmin/resetActivity"><button type="submit" class="btn btn-success btn-lg btn-block" value="Activity">Activity</button></a><br>
        </div>
        <div class="col-lg-8"> 
        <a href="<?php echo base_url(); ?>superAdmin/resetClient"><button type="submit" class="btn btn-success btn-lg btn-block" value="Clients">Clients</button></a><br>
        </div>
      </div>
          </div>
        </div>
        </div>
    </div>
</div>
