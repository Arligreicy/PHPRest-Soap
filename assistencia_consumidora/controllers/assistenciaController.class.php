<?php
	class assistenciaController
	{		
		public function inserir()
		{	
			//serviço rest post
			if($_POST){
				$dados = array("operacao"=>"inserir_visita", 
				"idcliente"=>$_POST["cliente"],"idassistencia"=>$_POST["assistencia"],
				"datavisita"=>$_POST["data"]);
				$curl = curl_init("http://localhost/assistencia_server/services/assistenciaRest.php");

				curl_setopt($curl, CURLOPT_POST, true);
				curl_setopt($curl, CURLOPT_POSTFIELDS, $dados);
				curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

				$retorno = curl_exec($curl);
				curl_close($curl);
				$retorno = json_decode($retorno);
				echo $retorno;
				
			}
			//serviço soap		
			$client = new SoapClient("http://localhost/assistencia_server/services/assistenciaSOAP.php?wsdl");
			
			$aut_param = new stdClass();
			$aut_param->username = "Arligreicy";
			$aut_param->password = "123";

			$header_parm = new soapVar($aut_param, SOAP_ENC_OBJECT);

			$header = new soapHeader("assistencia_server","security",$header_parm,false); //namespace do wsdl

			$client->__setSoapHeaders(array($header));
				
			$assistencia = json_decode($client->assistencias());
			
			//serviço rest get

			$cliente = file_get_contents("http://localhost/assistencia_server/services/assistenciaRest.php?operacao=cliente");
			$cliente = 	json_decode($cliente);

			require_once "views/form_visita.php";
		}
		
	}
?>