
      
      <div class="body-container"> <!-- Start of Body -->
        <div class="body-content">
          <div class="container">
        <div class="row">
          <div class="col-md-7 col-sm-7">
            <form method="post" action="<?php echo base_url(); ?>main/recoverPassword">

                            <fieldset>
                            <h1>Reset Password</h1>
                                                     <?php 
                                      echo validation_errors(); 
                                        if($this->session->userdata('message'))
                                        {
                                          echo $this->session->userdata('message')."<br><br>";
                                          $this->session->unset_userdata('message');
                                        }
                                       
                                      ?>
                                    <div class="form-group">
                                          <label for="email">Input your registered Email address</label>
                                          <input class="form-control" type="text" id="email" placeholder="Email" name="remail" />
                                    </div>
                                    <div class="form-actions">
                                          <input type="submit" class="btn btn-info" value="Reset" />
                                    </div>
                                          
                                   
                              </fieldset>
                        </form>
          </div>
        </div>
      </div> 
        </div>
     </div> <!-- End of body-container -->

