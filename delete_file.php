<?php 
$id=$_GET['id'];
$con=mysqli_connect('localhost','root','','college1');

$sql="DELETE FROM `register` WHERE  id=$id";

mysqli_query($con,$sql);

header("Location:home.php")







 ?>