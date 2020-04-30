<?php
	$session_id = $_POST['session_id'];

	$current_token = sha1($session_id);		//get hash value of $session_id via sh1 hash function and assign it to $current_token

	echo json_encode(array("id" => $current_token));		//"jason_encode" converts $current_token PHP value to JSON value
?>