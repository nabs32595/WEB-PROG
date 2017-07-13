<?php
session_start();

if ( (!isset($_SESSION["username"]))  ||  $_SESSION["username"] != "admin" ){
	die("session is not active. Please login");
}

?>

<body bgcolor="#add8e6" link="red" vlink="gray">
	<a href="view.php" target="r">View ITEM</a> <br>
	<a href="delete.php" target="r" >Delete Item</a> <br>
	<a href="logout.php" target="r">Log Out</a> <br>

</body>
