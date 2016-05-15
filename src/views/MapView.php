<?php

namespace Image_Rating\views;

session_start();

use Image_Rating as B;


require_once "./src/configs/Config.php";
require_once "View.php";
require_once "./src/models/Database.php";

class MapView extends View{

	public function render($data){
		?>
				<!DOCTYPE html>
				<html>
					<head>
						<title>Map and Directions</title>
					</head>
					<body>

					<h1 align="center">Map and Directions</h1>


					</body>
				</html>
	<?php
	}
	

}
