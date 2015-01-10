<html>
<head>
	<title></title>
</head>
<body>
		<?php echo validation_errors(); ?>
        <?php echo form_open('main/login'); ?>
        	<input  type="text" placeholder="Input text" name="text">
        	<button type="submit">Submit</button>
    	</form>


</body>
</html>