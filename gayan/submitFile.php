<?php
    session_start();        //session begins

    //assign to variables
    $csrf_token = $_POST['csrf_token'];

	$firstname = $_POST['fname'];
	$lastname = $_POST['lname'];
	
	echo "<center> <h1> Salut,  $firstname $lastname </center> </h1><br/>";
    
    if($csrf_token == $_SESSION['token'])       //if both are matching, display sucessKid and Success message
	{
        echo "<center> <h2> Wholaaa !!! CSRF Token Has Been Successfully Validated and You All Good Now :-) (-: </h2> </center><br><br>";

        echo "<img src='images/success.jpg' alt='successKid' style ='display:block;'>";
    }
    
	else        //else display sadFace and Error message
	{
        echo "<center> <h2> Upsii !!! CSRF Token Does NOT Match Successfully, Please Try Again Buddy </h2> </center><br><br>";

        echo "<img src='images/unsuccess.png' alt='sadFace' style ='display:block;' >";

	}

?>