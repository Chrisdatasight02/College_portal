<!DOCTYPE html>
<html>
<head>
	<title>college</title>

<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<script type="text/javascript" src="js/bootstrap.min.js"></script>

</head>
<body>

<div class="container-fluid">
	<div class="row">
		<div class="col-sm-8">
			<form class="w-25 p-3" method="post">
	<fieldset>
		<legend>Personal details</legend>
		Salutation
		<select class="form-control" >

			<option>none</option>
			<option>Mr.</option>
			<option>Mrs.</option>
		</select><br><br>
		First name:
		<input type="text" name="fname" class="form-control"><br>
		Last name:
		<input type="text" name="lname"  class="form-control"><br>
		Gender:<br>
<input type="radio" name="gender" class="form-check-input" value="male">Male
<input type="radio" name="gender" class="form-check-input" value="female">Female
		<br>
		Email: 
		<input type="Email" name="email"  class="form-control">
		Date of Birth:
		<input type="date" name="dob"   class="form-control"><br>
		Address:<br>
		<textarea name="address">
			
		</textarea ><br><br>
		<input type="submit" name="submit" class="btn btn-success">

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

if(isset($_POST['submit']))

{
//receiving data from form

$first=$_POST['fname'];
$last=$_POST['lname'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$dob=$_POST['dob'];
$address=$_POST['address'];


//create a database called college
// create a table called register with provision to store all above

//connecting to the server
$con=mysqli_connect("localhost","root","","college1");

//sql statement for insert

$sql="INSERT INTO `register`(`id`, `first name`, `last name`, `gender`, `email`, `date of birth`, `address`) VALUES ('','$first','$last','$gender','$email','$dob','$address')";

//executing query

mysqli_query($con,$sql);

}



?>