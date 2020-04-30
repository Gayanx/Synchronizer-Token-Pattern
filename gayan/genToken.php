<?php
	class Token {

		//ststic function >> to make the method accessible without the creation of an object
		
		public static function generate_token($session_id){		//Generate a random token

			$_SESSION['token'] = md5($session_id);		//put tht token to "md5 function" for better security
			return $_SESSION['token'];
		}

		public static function check_token($token){

			if(isset($_SESSION['token']) && $token === $_SESSION['token']){
                unset($_SESSION['token']);
                
				return true;
			}
			else{
                
				return false;
			}
		}
	}
?>