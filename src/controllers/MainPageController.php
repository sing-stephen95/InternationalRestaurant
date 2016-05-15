<?php 
namespace Image_Rating\controllers;

require_once "Controller.php";

class MainPageController extends Controller{
	
	function processRequest(){
		$data = [];
		$this->view("main")->render($data);
	}
	
}
