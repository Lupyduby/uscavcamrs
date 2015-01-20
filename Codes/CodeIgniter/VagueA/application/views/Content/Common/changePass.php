 <div class="container equipments-container"> <!-- Start of Container -->
        <div class="row">
      <ol class="breadcrumb">
        <li><a href="#">Account</a></li>
        <li class="active">Change Password</li>
      </ol> 

      <div class="col-lg-12" role="main">
      <h4 id="changepass" class="page-header">Change Password</h4>
      </div>
      
      
      <div class="col-md-6 changepass-content">
        
            <div style="left:10%; top:15%;">
            
              <form method="POST" action="<?php echo base_url(); ?>user/updatePass">
                <?php echo validation_errors(); ?>
              <table>

                <tr height="50">
                    <td><label for="oldpass">Old Password:</label></td>
                    <td><input minlength="8" required="" type="password" class="form-control-general" id="oldpass" size="8"></td>
                </tr>


                <tr  height="50">
                   <td><label for="newpass">New Password:</label></td>
                    <td><input minlength="8" required="" type="password" class="form-control-general" id="newpass" size="8"></td>
                </tr>

                <tr  height="50">
                   <td><label for="confirmpass">Confirm Password:</label></td>
                    <td><input required="" type="password" class="form-control-general" id="confirmpass"></td>
                </tr>

                <tr  height="50">
                   <td><button type="submit " class="btn btn-success">Submit</button></td>
                </tr>
                </table>
              </form>
            </div>
      </div>
      
        
      </div>
    </div> <!-- End of Container -->
