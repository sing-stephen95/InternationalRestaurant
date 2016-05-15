<?php
namespace Image_Rating\controllers;

require_once "Controller.php";

class AdminController extends Controller{
	function processRequest(){
		$data = [];
		
		$this->view("admin")->render($data);	
	}
}
