<?php
session_start();		 //session begins
require_once 'genToken.php'; 	//used to include a php file in another one more than once

$_SESSION["logeduser"] = '';


	if(isset($_POST['username']) && isset($_POST['password']))		//checks whether UN and PW is set and is not NULL
	{
 		if($_POST['username'] == "root" && $_POST['password']=="toor")		 //validating UN and PW
		{
			$_SESSION["logeduser"] = $_POST['username'];			
			$token = Token::generate_token(session_id());

			setcookie("id", session_id());
			setcookie("token", $token);

	        header('Location: main.php'); 		//if UN and PW correct, nevigate to main.php page
		}

 		else		//if not display a alert message
  		{
			echo "<script> alert('Invalid Credentials Honey :-( :-( Please Check Your Username & Password Again !!!');</script>";
  		}
	}

?>

<html>

	<head>
		<meta charset="UTF-8">

		<title>Login Page</title>

		<link href="css/loginP.css" rel="stylesheet">

		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	</head>

<body>

<div class="container-fluid">
<div class="box2">
<div class="box1">

<form id="login" action="" method="post">

<table>
<tr>

<td>
<h1> LOGIN</h1>
</td>

</tr>
<tr>
	<td><label for="user_name">Username ::</label></td> 

	<td>
	  <input placeholder="Enter Your User Name" class="user_name" name="username" value="" type="text" required>
	</td>

</tr>
		
<tr>	
	<td><label for="pwd">Password ::</label></td>
	<td><input placeholder="Enter Your Password" class="user_name" name="password" value="" type="password" required></td>
</tr>
<tr>	
	<td>
	</br></br></br>
	<button class="login">Login</button>
	</td>

	<td>
	<br></br></br>
	<button class="cancel" type="reset">Reset</button>
	</td>
	
</tr>
</table>

</br></br>

<h3><center><b> UN = root    ||   PW = toor </b></center></h3>

</div>
</div>
</div>
</body>
</html>