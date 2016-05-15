<?php

namespace Image_Rating\models;

require_once "./src/configs/Config.php";

class Database{
	public function connect(){
		$conn = mysqli_connect($server, $user, $pwd, $db);
		return $conn;
	}
}
?>