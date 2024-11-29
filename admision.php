<!DOCTYPE html>
<html>
<head>
	<title>admision</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body>

<div class="container-fluid">
	<div class="row">
		<div class="col-sm-8">

			<form class="w-25" method="post">
				<fieldset>
					<legend>Online admision</legend>

			First name <input type="text" name="cname" class="form-control"><br>
		Middle name <input type="text" name="gname" class="form-control"  ><br>
		Last name <input type="text" name="hname" class="form-control"  ><br>




					Course <select name="course">
					<option>course</option>
					<option>ICT</option>
					<option>Nursing</option>
					<option>Human Resource</option>
					<option>Project Management</option>
					</select><br>
					Gender <br>
<input type="radio" name="gender" class="form-check-input" value="male">Male
<input type="radio" name="gender" class="form-check-input" value="female">Female
<input type="radio" name="gender" value="other">other<br>
					 Phone <input type="text" name="number"> <br>
					 Address <br><textarea name="address"></textarea> <br>
					 Email <input type="email" name="email"   class="form-control"><br><br>
					 password <input type="password" name="pwd" class="form-control"><br>
					 Ry-type password <input type="password" name="pass" class="form-control"><br>
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

if (isset($_POST['submit'])) 

{ 


	$first=$_POST['cname'];
	$middle=$_POST['gname'];
	$last=$_POST['hname'];
    $course=$_POST['course'];
	$gender=$_POST['gender'];
	$phone=$_POST['number'];
	$address=$_POST['address'];
	$email=$_POST['email'];
	$password=$_POST['pwd'];


	$con=mysqli_connect('localhost','root','','college1');

	$sql="INSERT INTO `admision`(`id`, `first name`, `middle name`, `last name`, `course`, `gender`, `phone`, `address`, `email`, `password`) VALUES ('','$first','$middle','$last',' $course','$gender','$number','$address','$email'$password,'')";


	mysqli_query($con,$sql);


}










 ?>