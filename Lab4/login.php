<?php

//ifusername is found

//if $row[pswd] and $post[pswd] are same

session_start();
$_SESSION["username"] = "admin";
header("Location:frame.php");



?>