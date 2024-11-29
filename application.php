<!DOCTYPE html>
<html>
<head>
	<title>application</title>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<script type="text/javascript" src="js/bootstrap.min.js"></script>

</head>
<body>
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-8">
			<form  class="w-26" method="post">
				<legend>application</legend>
				<fieldset>
					
			First name:<input type="text" name="dname" class="form-control">
			<br>
					
			Last name:<input type="text" name="jname" class="form-control">
			<br>
		    Email: <input type="email" name="email" class="form-control">
			<br>
				
			Gender:<br>
		<input type="radio" name="gender" class="form-check-input" value="male">Male

		<input type="radio" name="gender" class="form-check-input" value="female">Female
			<br>
					

			<input type="submit" name="submit" class="btn btn-primary">
			<input type="submit" name="reset" class="btn btn-danger">

			</fieldset> 
			</form>
		

<div class="col-sm-4">
				
			</div>
			
		</div>
		
	</div>
	
</div>

</body>
</html>

<?php
if (isset($_POST['submit']))
 {
 	
$first=$_POST['dname'];
$last=$_POST['jname'];
$email=$_POST['email'];
$gender=$_POST['gender'];



$con=mysqli_connect('localhost','root','','college1');
$sql="INSERT INTO `application`(`id`, `first name`, `last name`, `email`, `gender`) VALUES ('','$first','$last','$email','$gender')
";

 mysqli_query($con,$sql);

} 


?>


