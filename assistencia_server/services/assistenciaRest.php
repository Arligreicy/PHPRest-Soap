<?php
	require_once "../models/conexao.php";
	require_once "../models/assistenciaDAO.php";
	require_once "../models/visitaDAO.php";
    require_once "../models/assistencia.php";
	require_once "../models/cliente.php";
	require_once "../models/visita.php";
	
	//usar a variável $opcao quando não tiver wsdl
	//$opcao = array("uri"=>"http://localhost");
	//$server = new soapServer(null, $opcao);
	
	//usar assim quando tiver wsdl
	
	class assistenciaRest
	{
		public function cliente()
		{
			
			$assistenciaDAO = new assistenciaDAO();
			$retorno = $assistenciaDAO->buscar_todos_clientes();
			return json_encode($retorno);
	    }
		public function inserir_visita($idcliente, $idassistencia, $datavisita)
		{
			$cliente = new Cliente($idcliente);
			$assistencia = new Assistencia($idassistencia);
			$visita = new Visita(0, $cliente, $assistencia, $datavisita);
			$visitaDAO = new visitaDAO();
			$retorno = $visitaDAO->inserir($visita);
			return json_encode($retorno);
	    }
			
	}
	$obj = new assistenciaRest();
	if($_GET)
	{
		if(isset($_GET["operacao"]))
		{
			$metodo = $_GET["operacao"];

			if($_GET["operacao"] == "cliente")
			{
				$retorno = $obj->$metodo();
				exit($retorno);
			}
		}
		else
		{
			exit(json_encode("informe a operação"));
		}
	}
	 if($_POST)
	 {
	 	if($_POST["operacao"] == "inserir_visita")
		{
				$retorno = $obj->inserir_visita($_POST["idcliente"], 
				$_POST["idassistencia"], $_POST["datavisita"]);
				exit($retorno);
	 		}
		
	 	else
	 	{
	 		exit(json_encode("informe a operação"));
		}
	}

?>