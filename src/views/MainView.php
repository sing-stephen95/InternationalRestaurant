<?php

namespace Image_Rating\views;

require_once "View.php";
use Image_Rating as B;
class MainView extends View{

	public function render($data){
		
		?>
		<!DOCTYPE html><html>
		<head>
			<title>International Restaurant</title>
			<link rel="stylesheet" type="text/css" href="../styles/indexStyle.css">
		</head>

		<body>

			<h1 align="center">International Restaurant</h1>
			
			<p>
			Restaurant Address
			<br>Operating Hours
			<br><a href="./index.php?c=map">Map & Driving Directions</a>
			<br><a href="./index.php?c=menu">Menu</a>
			</p>
	<?php
	//		if(!empty($_REQUEST['signup'])){
	//			$_REQUEST['c'] = "signup";
	//			/*$full_name = B\NS_CONTROLLERS. ucfirst($_REQUEST['c']). "Controller";
	//			$c_folder = __DIR__ . "/../controllers/";
	//			$path_name = $c_folder . $_REQUEST['c']. "Controller.php";
	//			if (file_exists($path_name)) {
	//				require_once $path_name;
	//				$controller = new $full_name();
	//				$controller->processRequest();
	//			}*/
	//		} else if(!empty($_REQUEST['signin'])){
	//			$_REQUEST['c'] = "signin";
	//			$full_name = B\NS_CONTROLLERS. ucfirst($_REQUEST['c']). "Controller";
	//			$c_folder = __DIR__ . "/../controllers/";
	//			$path_name = $c_folder . $_REQUEST['c']. "Controller.php";
	//			if (file_exists($path_name)) {
	//				require_once $path_name;
	//				$controller = new $full_name();
	//				$controller->processRequest();
	//			}
	//		}
	//		else{
			?>
			<?php
	//		}
			?>


		</body>
		</html>
		<?php
	}
}