 <!DOCTYPE html>
<html>
<head>
 <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/cerulean/bootstrap.min.css" rel="stylesheet" > 
	<title>Log in form</title>
</head>
<body>

<p>SIMPLE FORM</p>
<hr>
	<form method="post" action="register2.php">	
		<table>	
			<tr> <td > Full Name: </td> <td> <input type="text" name="fname" placeholder="fullname"> </td> </tr>
			<br>
			<tr> <td> Password: </td> <td> <input type="Password" name="pswd" placeholder="Password"> </td> </tr>
			<br>
			<tr> <td> Re-Password:</td> <td> <input type="Password" name="retype" placeholder="Re-Password"> </td></tr>	
			<br>
			<tr> <td> Address: </td> <td> <textarea name="addr" ></textarea> </td> </tr>	
			<br>
			<td> <input type="submit" name = "submit"> </td> 
		</table>
	</form>

</body>
</html>