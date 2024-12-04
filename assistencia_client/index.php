<?php
	if($_GET)
	{
		$controle = $_GET["controle"];
		$metodo = $_GET["metodo"];
		
		require_once "controllers/" . $controle . ".php";
		
		$obj = new $controle();
		$obj->$metodo();
	}
	else
	{
		require_once "controllers/indexController.php";
		
		$obj = new IndexController();
		$obj->index();
	}
?>