<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-8"><br>
		<table class="table table-bordered table-striped table-hover" class="btn btn-success">
					<tr>
<th>id</th> <th>First name</th> <th>Middle name</th> <th>Last name</th> <th>Course</th> <th>Gender</th> <th>Phone</th> <th>Address</th> <th>Email</th> <th>Password</th>
					</tr>
					<?php 
		$con=mysqli_connect('localhost','root','','college1');

		$sql="SELECT * FROM `admision`ORDER BY `password` ASC ";

		mysqli_query($con,$sql);
		$data=mysqli_query($con,$sql);

		while($array_data=mysqli_fetch_array($data))
		{
			
		
 ?>

					<tr>
<td><?=$array_data[0]?></td> <td><?=$array_data[1]?></td> <td><?=$array_data[2]?></td> <td><?=$array_data[3]?></td> <td><?=$array_data[4]?></td> <td><?=$array_data[5]?></td> <td><?=$array_data[6]?></td> <td><?=$array_data[7]?></td> <td><?=$array_data[8]?></td> <td><?=$array_data[9]?></td>
					</tr>

					<?php
					} 



					 ?>

</table>


<div class="col-sm-4">
					
				</div>
				
			</div>
			
		</div>
		
	</div>

</body>
</html>