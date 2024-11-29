<!DOCTYPE html>
<html>
<head>
	<title>students</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<script type="text/javascript" src="js/bootstrap.min.js"></script>

</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-8">

<table class="table table-bordered table-striped table-hover" class="btn btn-success">
					<tr>
<th>StdID</th> <th>stdName</th> <th>Sex</th> <th>Percentage</th> <th>Class</th> <th>Sec</th> <th>Stream</th> <th>DOB</th>
              <th>Actions</th>

					</tr>
					<?php 
					$con=mysqli_connect('localhost','root','','colleges');

					$sql="SELECT * FROM `student";

					mysqli_query($con,$sql);

					$data=mysqli_query($con,$sql);

					while($array_data=mysqli_fetch_array($data))
					{

					


                      ?>

					<tr>
<td><?=$array_data[0]?></td> <td><?=$array_data[1]?></td> <td><?=$array_data[2]?></td> <td><?=$array_data[3]?></td> <td><?=$array_data[4]?></td> <td><?=$array_data[5]?></td> <td><?=$array_data[6]?></td> <td><?=$array_data[7]?></td> 
                  <td>
 <a href="delete_rec.php?id=<?=$array_data[0]?>">Delete</a>


                  <td>
 	<a href="edit_rec.php?id=<?=$array_data[0]?>">Edit</a>

                   </td>
                  </td>
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