<?php
namespace Image_Rating\controllers;

require_once "Controller.php";

class MenuController extends Controller{
	function processRequest(){
		$data = [];
		
		$this->view("Menu")->render($data);	
	}
}
