<?php
session_start();
?>

<html>

	<head>  	
    <meta charset="UTF-8">
    
	<title>Update User Page</title>

    <link href="css/loginP.css" rel="stylesheet">
    <meta charset="UTF-8">

    <!--linking external files-->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css">

	</head>

<body>
<div class="container-fluid">
<div class="box2">
<div class="box1">

<form action="submitFile.php" method ="post">

<table>
<tr>

<td><h2> <td><h2 class="topic01"> User Update Section</h2></td></h2></td>

</tr>
<tr>
	<td><label for="fname">First Name :: </label>

	  <input class="fnUpdate" type="text" name="fname" value="" placeholder="First Name" required>
	</td>
	</tr>		
<tr>	
	<td><label for="lname">Last Name :: </label>

	<input class="lnUpdate" type="text" name="lname" value="" placeholder="Last Name" required></td>

</tr>
<tr>	
	
</tr>
</table>

<div>
<input id="login-username" type="hidden" class="form-control" name="csrf_token" value="<?php  echo $_SESSION["token"];  ?>">  
</div>

<button class="login" value="Update"> Update </button>

<button type="reset" value="Reset" class="cancel">Reset</button>

<a href="logout.php"   class="cancel  btn btn-default">Logout</a>
</form>

  <!--java script file-->
	<script type="text/javascript" src="./script.js"></script>

</div>
</div>
</div>	
</body>
</html>
