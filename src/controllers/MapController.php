<?php
namespace Image_Rating\controllers;

require_once "Controller.php";

class MapController extends Controller{
	function processRequest(){
		$data = [];
		
		$this->view("map")->render($data);	
	}
}
