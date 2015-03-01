 <div class="container content"> <!-- Start of Container -->
        <div class="row">
      <ol class="breadcrumb">
        <li><a href="#">Account</a></li>
        <li class="active">Change Password</li>
      </ol> 

      <div class="col-lg-12" role="main">
    <div class="panel panel-default">
      <div class="panel-body">
      <div class="col-xs-12">
            <h4 id="changepass" class="page-header">Change Password</h4>
      </div>
      
      
      <div class="col-md-6 changepass-content">
            
              <form method="POST" action="<?php echo base_url(); ?>user/updatePass">
                <?php 
                echo validation_errors(); 
                  if($this->session->userdata('successPass'))
                  {
                    echo $this->session->userdata('successPass')."<br><br>";
                    $this->session->unset_userdata('successPass');
                  }
                 
                ?>

        
                    <label for="oldpass">Old Password:</label></td>
                    <input required="" type="password" class="form-control" name="oldpass">
               


                
                   <label for="newpass">New Password:</label></td>
                    <input required="" type="password" class="form-control" name="newpass">
                

                
                   <label for="confirmpass">Password Confirmation:</label>
                    <input required="" type="password" class="form-control" name="confirmpass">
          <br>

                
                   <button type="submit " class="btn btn-success">Submit</button>
                
                
              </form>
            </div>
      </div>
      
        
      </div>
    </div> <!-- End of Container -->
