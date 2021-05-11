<?php

session_start();

require 'providers/Database.php';
$controller = 'HomeController';

if(!isset($_REQUEST['controller'])){
	require "Controllers/" . $controller . ".php";

	$controller = ucwords($controller);
	$controller = new $controller;
	$controller->index();
}
else{
	$controller = ucwords($_REQUEST['controller'].'Controller'); 
	//Condicional Ternario 	Condicion / si es verdad  / else 
	$method = isset($_REQUEST['method']) ? $_REQUEST['method'] : 'index';

	require"Controllers/". $controller. ".php";
	$controller = new $controller;

//fUncion llmara controlador y ejecutar metodo
	call_user_func(array($controller ,$method));

}