<?php

echo "<fieldset>";
echo "Welcome " . $_POST["fname"] . "<br>";


if ( $_POST["pswd"] == $_POST["retype"] ) {
	echo " <font color = 'blue'> Password is a match  </font> <br>"; 
}else {
	echo " <font color = 'red'> password did not match </font> <br>";
}

echo "Your address is: " . $_POST["addr"] . "<br>";
echo "</fieldset>";

?>