<?php

namespace Image_Rating\views;

session_start();

use Image_Rating as B;


require_once "./src/configs/Config.php";
require_once "View.php";
require_once "./src/models/Database.php";

class AdminView extends View{

	public function render($data){
		?>
		<?php if(isset($_SESSION['logged'])) { ?>
				<!DOCTYPE html>
				<html>
					<head>
						<title>Admin Control Panel</title>
					</head>
					<body>

					<h1 align="center">Admin Control Panel</h1>
					
					<form method="post" action="./index.php?c=admin">
						<input type="submit" id="logout" name="logout" value="Logout"/>
					</form>

					</body>
				</html>
		<?php } else {?>
				<!DOCTYPE html>
				<html>
					<head>
						<title>Sign In</title>
					</head>
					<body>

					<h1 align="center">Sign In</h1>

					<form id="signin" action="./index?c=admin" method="post" align="center">
						<fieldset>
						
							<input type="hidden" name="submitted" id="submitted" value="1"/>
							
							<label for="username" >UserName*:</label>
							<input type="text" name="username" id="username" maxlength="50" /><br></br>
							 
							<label for="password" >Password*:</label>
							<input type="password" name="password" id="password" maxlength="50" /><br></br>
							<input type="submit" name="Submit" value="Submit" />
							 
						</fieldset>
					</form>

					</body>
				</html>
		<?php } ?>
		<?php
		if(isset($_POST['logout'])){
				session_destroy();
				unset($_SESSION['logged']);
				header("Location: ./index.php?c=admin");
		}
			
		if(isset($_POST['Submit'])){

		$user_name = $_POST['username'];
		$pass = $_POST['password'];
			
			if($user_name == "admin" && $pass == "password"){
				$_SESSION['logged'] = true;
				echo "<script>alert('Log in success!')</script>";
				header("Location: ./index.php?c=admin");
			}
			else{
				echo "<script>alert('Username or password is incorrect!')</script>";
			}
		
		//$check_log="SELECT * FROM USER WHERE u_name='$user_name' AND u_pwd='$pass'";
		//
		//$nm_name = "Image_Rating\\models\\Database";
		//$db = new $nm_name();
		//$conn = $db->connect();
		//$check = mysqli_query($conn, $check_log);
		//
		//
		//if(mysqli_num_rows($check))  {  
		//
		//$_SESSION['login'] = $user_name;
		//$_SESSION['logged'] = true;
		//echo "<script>alert('Log in success!')</script>";			
		//}  
		//else{
		//	echo "<script>alert('Username or password is incorrect!')</script>";
		//}

		}
	}
	

}
