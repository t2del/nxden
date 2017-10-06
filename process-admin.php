<?php
if(isset($_POST['submit'])) { // submit triggered
	
		if(isset($_POST['user']) and isset($_POST['user'])) // login
		{	
			$user=$_POST['user'];
			$pass=$_POST['pass'];
			foreach($samndean as $x => $x_value) 
			{
				if(md5($user)==$x and md5($pass)==$x_value)
				{
					$_SESSION["user"] = $user; // session variable
				}
			}
		}	// end login
} // end submit triggered

if(isset($_GET['logout'])) {
	session_destroy();
	header('location: '.$_SERVER['PHP_SELF']);
}

?>