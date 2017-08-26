<?php
require 'connection.php';
$conn    = Connect();
$movieid = $_POST['movieid'];

$sql = "DELETE FROM aip WHERE  id = '".$movieid."' ";
if(mysqli_query($conn,$sql)){
	header('location:index.php');
}else{
	header('location:index.php');
}
?>