<style type="text/css">
  
  .form-control:focus {
border-color: green;
outline: 0;
/* -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(102,175,233,.6); */
/* box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(102,175,233,.6); */
}
</style>
      
      <div class="body-container"> <!-- Start of Body -->
        <div class="body-content">
          <div class="container">
            <div class="row">
              <div class="col-md-7 col-sm-7" id="sys-desc">
                <h1>Audio Visual Center Reservation System</h1>
                <p>The University of San Carlos - Library System is adapting the latest technology so that we can offer the most efficient and effective way to serve our clients. The Library System operates on the concept of participative and values-based management reflective of the University’s Mission and Vision, guided by its Slogan: Customer First and Always. </p>
                <p>The USC - Library System is proud to present to you the Audio Visual Center Reservation system in which our clients can book our Audio Visual Halls through online.  </p>
              </div>

              <div class="col-lg-4 col-md-4 col-md-offset-1 col-sm-5">
                <div class="login-form">
                  <div class="form-title">
                <h2>Log In</h2>
              </div>

              <div class="form-body">
                
                <?php echo validation_errors(); ?>
                <?php echo form_open('main/login'); ?>
                <div class="form-group">
                    <input id="banner-name" class="form-control" type="text" placeholder="Username" required="" name="username">
                  </div>
                  <div class="form-group">
                    <input id="banner-email" class="form-control" type="password" placeholder="Password" required="" name="password">
                  </div>
                  
                <button class="btn btn-default btn-submit" type="submit">Sign In</button>
                <br><br><br>
                <center><a href="<?php echo base_url(); ?>main/forgotPassword"><i>Forgot Your Password?</i></a><br>
                
                <a href="<?php echo base_url(); ?>main/userRegister"><i  >Want to register?</i></a>
                </center>                
                
                </form>
                 
              </div>

                </div>  
              </div>
            </div>
            
          </div>
        </div>

     </div> <!-- End of body-container -->

     </div>
     </div>
     

 

