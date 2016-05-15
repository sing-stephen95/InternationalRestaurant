<?php
 
	require_once('./Config.php');
	
	$conn = mysqli_connect($server, $user, $pwd);
	
	mysqli_query($conn, "DROP DATABASE IF EXISTS HW3");
	mysqli_query($conn, "CREATE DATABASE HW3");
	
	$conn2 = mysqli_connect($server, $user, $pwd, $db);
	
	$createUserTable = "CREATE TABLE USER(
		u_id INT NOT NULL AUTO_INCREMENT,
		f_name VARCHAR(50) NOT NULL,
		l_name VARCHAR(50) NOT NULL,
		email VARCHAR(255) NOT NULL,
		u_name VARCHAR(50) NOT NULL,
		u_pwd VARCHAR(50) NOT NULL,
		PRIMARY KEY (u_id)
	)";

	$createPostTable = "CREATE TABLE POST(
		u_id INT NOT NULL,
		f_name VARCHAR(50) NOT NULL,
		l_name VARCHAR(50) NOT NULL,
		date_submitted DATE NOT NULL,
		caption TEXT NOT NULL,
		rating INT NOT NULL,
		PRIMARY KEY (u_id)
	)";

	
	
	mysqli_query($conn2, $createUserTable);
	mysqli_query($conn2, $createPostTable);

 
 
	
 /*can be run from the command-line to make a good initial database.*/
 
 
 ?>
