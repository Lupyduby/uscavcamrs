
      
      <div class="body-container"> <!-- Start of Body -->
      	<div class="body-content">
      		<div class="container">
      			<div class="row">
      				<div class="col-md-7 col-sm-7" id="sys-desc">
      					<h1>Audio Visual Center Reservation System</h1>
      					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet voluptatibus saepe dolore atque repellat magnam distinctio, illo praesentium, quae voluptate sunt corporis, harum in alias, eveniet iste dolores facere. Quae.</p>
      					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet voluptatibus saepe dolore atque repellat magnam distinctio, illo praesentium, quae voluptate sunt corporis, harum in alias, eveniet iste dolores facere. Quae.</p>

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
									
								<button class="btn btn-default btn-submit" type="submit" id="Bsubmit">Sign In</button>
								
								
								</form>
                <a href="<?php echo base_url(); ?>main/userRegister"><button class="btn btn-default btn-submit" id="Bregister">Register</button>
                <a href="#ForgotPassword"><i  id="forgotPass">Forgot Your Password?</i></a>
							</div>

      					</div>	
      				</div>
      			</div>
      			
      		</div>
      	</div>

     </div> <!-- End of body-container -->

     </div>
     </div>
     

 

