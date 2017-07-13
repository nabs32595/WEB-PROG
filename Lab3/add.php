<?php
require("config.php");

if($_POST['submit']){

	$id = $_POST['id'];
	$name = $_POST['name'];

	$sql = "insert into product (id , name) values ('$id', '$name')";

	mysqli_query($conn,$sql);
}

?>

