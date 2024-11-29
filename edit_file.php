
<?php 
$id=$_GET['id'];
$con=mysqli_connect('localhost','root','','college1');

$sql="SELECT * FROM `register` WHERE id='$id'";

$data=mysqli_query($con,$sql);

$array_data=mysqli_fetch_array($data);






 


?>


<!DOCTYPE html>
<html>
<head>
	<title>Edit record</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<script type="text/javascript" src="js/bootstrap.min.js"></script>

</head>
<body>
	<div class="container-fluid">
	<div class="row">
		<div class="col-sm-8">
			<form class="w-25 p-3" method="post"  class="form-control">
	<fieldset>
		<legend>Personal details</legend>
		Salutation
		<select  class="form-control" name="Salutation">
			<option><?=$array_data[1]?></option>
			 <option>None</option>
			 <option>Mr.</option>
			 <option>Mrs.</option>
		</select>
		<br>
		First name:
		<input type="text" value="<?=$array_data[2]?>" name="fname" class="form-control"><br>
		Last name:
		<input type="text" value="<?=$array_data[3]?>" name="lname"  class="form-control"><br>
		Gender:<br>
		<select name="gender">
			<option><?=$array_data[4]?></option>
			<option>Male</option>
			<option>Female</option>
		</select>
		<br><br>
		Email: 
		<input type="Email" value="<?=$array_data[5]?>" name="email"  class="form-control">
		Date of Birth:
<input type="date" value="<?=$array_data[6]?>" name="dob" class="form-control"><br>
		Address:<br>
		<textarea name="address">
			<?=$array_data[7]?>
		</textarea ><br><br>
		<input type="submit" value="Edit" name="submit" class="btn btn-success">

	</fieldset>
</form>
<?php
if (isset($_POST['submit'])) {
 
$sal=$_POST['Salutation'];
$first=$_POST['fname'];
$last=$_POST['lname'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$dob=$_POST['dob'];
$address=$_POST['address'];

$con=mysqli_connect('localhost','root','','college1');

$sql="UPDATE `register` SET `salutation`='$sal',`first name`='$first',`last name`='$last',`gender`='$gender',`email`='$email',`date of birth`='$dob',`address`='$address' WHERE id='$id'";
   mysqli_query($con,$sql);

   header("Location: home.php");

 } 






 ?>


			<div class="col-sm-4">
				

			</div>
			



		</div>
		
	</div>
	
</div>



</body>
</html>