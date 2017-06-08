<?php

echo "Welcome " . $_POST["fname"] . "<br>";
echo "Your address is: " . $_POST["addr"] . "<br>";

if ( $_POST["pswd"] == $_POST["retype"] ) {
	echo "Password is a match  <br>"; 
}else {
	echo "password did not match  <br>";
}


?>