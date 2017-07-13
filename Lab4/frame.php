<?php

session_start();

if (!isset($_SESSION["username"])) {
	die("Session is not active Please log in");
}


?>



<frameset cols= "40%, 60%">
<?php

if ($_SESSION["username"] == "admin") {
	echo "<frame src = menua.php>";
}else{

	echo "<frame src = menu.php>";
}

?>
	
<frame src = blank.php name=r>"
</frameset>