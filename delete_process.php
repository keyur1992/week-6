<?php
require 'connection.php';
$conn    = Connect();
$movieid = $_POST['movieid'];

$sql = "DELETE FROM aip WHERE  id = '".$movieid."' ";
if(mysqli_query($conn,$sql)){
	echo "Record Is deleted";
	header('location:index.php');
}else{
	 echo "Error deleting record: " . mysqli_error($conn);
	 header('location:index.php');
}
?>