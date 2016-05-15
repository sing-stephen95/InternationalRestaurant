<?php

namespace Image_Rating\controllers;

use Image_Rating as B;

abstract class Controller{
	
	public abstract function processRequest();

	public function sanitize($request_field, $type)
    {
        switch($type) {
            case "email":
                $out = filter_input(INPUT_GET,
                    $request_field, FILTER_SANITIZE_EMAIL);
                if ($out === false) {
                    $out = filter_input(INPUT_POST,
                        $request_field, FILTER_SANITIZE_EMAIL);
                }
                break;
            case "signup":
                $out = filter_input(INPUT_GET,
                    $request_field, FILTER_SANITIZE_STRING);
                if ($out === false) {
                    $out = filter_input(INPUT_POST,
                        $request_field, FILTER_SANITIZE_STRING);
                }
                break;
            default:
                $out = "";
        }
        return $out;
    }
	
	public function view($name){
		static $loaded_views = [];
		if(!empty($loaded_views[$name])){
			return $loaded_views[$name];
		}
		
		$class_name = ucfirst($name) . "View";
		$full_name = B\NS_VIEWS. $class_name;
		$view_folder = __DIR__."/../views/";
		$path_name = $view_folder. $class_name . ".php";
		if(file_exists($path_name)){
		require_once $path_name;
		$loaded_views[$name] = new $full_name();
		return $loaded_views[$name];
		}
		
		return false;
	}
}