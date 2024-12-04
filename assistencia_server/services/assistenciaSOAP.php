<?php
	require_once "../models/conexao.php";
	require_once "../models/assistenciaDAO.php";
	require_once "../models/assistencia.php";
	require_once "../models/cliente.php";
	require_once "../models/visita.php";
	//usar a variável $opcao quando não tiver wsdl
	//$opcao = array("uri"=>"http://localhost");
	//$server = new soapServer(null, $opcao);
	
	//usar assim quando tiver wsdl
	$server = new soapServer("assistencia.wsdl");
	class assistenciaSOAP
	{
		private $autenticado = false;

		public function security($header)
		{
			if(isset($header->username) && isset($header->password))
			{
				if($header->username == "Arligreicy" && $header->password == "123")
				{
					$this->autenticado = true;
				}
			}
		}
		public function assistencias()
		{
			if($this->autenticado)
			{
				$assistenciaDAO = new assistenciaDAO();
				$retorno = $assistenciaDAO->buscar_todos_assistencia();
				return json_encode($retorno);
			}
			else
			{
				return json_encode("Falha na autenticação");
			}
		}
		
	}
	$server->setObject(new assistenciaSOAP());
	$server->handle();
	
	
?>