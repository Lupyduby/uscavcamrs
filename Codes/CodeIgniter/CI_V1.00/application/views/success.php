<html>
<head>
<title>My Form</title>
</head>
<body>

<h1>Hello <?php echo $username." ". $pass; ?></h1><br><br><br>

<h3>	<?php
  		print_r($results);
  	?>
</h3><br><br><br>

<h3>Your form was successfully submitted!</h3>


<p><?php echo anchor('main/login', 'Try it again!'); ?></p>

</body>
</html>
