<!DOCTYPE html>
<html lang="en">

  <head>
    <title>University of San Carlos AVC Reservation System</title>
    
  </head>

 <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

  <body data-target=".navigation" data-spy="scroll" id="over">

    <div class="container-fluid">
      <div class="row">

      
      <div class="header-container"> <!-- Header -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <img src="<?php echo base_url(); ?>assets/img/header-title.png" class="img-responsive" alt="Responsive image">
          </div>
        </div>
        </nav>
      </div> <!-- Header -->
      
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
										<input name="username" id="banner-name" class="form-control" type="text" placeholder="Username" required="" name="banner-username">
									</div>
									<div class="form-group">
										<input name="pass" id="banner-email" class="form-control" type="password" placeholder="Password" required="" name="banner-password">
									</div>
									
								<button class="btn btn-default btn-submit" type="submit" id="Bsubmit">Sign In</button>
								
								</form>

                <a href="<?php echo base_url(); ?>main/register"><button class="btn btn-default btn-submit" type="submit" id="Bregister">Register</button></a>
                <a href="#" id="forgotPass"><i>Forgot Your Password?</i></a>
              </div>

      					</div>	
      				</div>
      			</div>
      			
      		</div>
      	</div>

     </div> <!-- End of body-container -->

	<div class="footer-container" id="footer">
		<div align="center">
		Copyright 2014. All Rights Reserved.<br>
		University of San Carlos<br>
		P. del Rosario Street, Cebu City, Philippines 6000<br>
		</div>
	</div>

      </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
