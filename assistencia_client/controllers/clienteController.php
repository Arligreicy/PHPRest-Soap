<?php
    class ClienteController{
        public function BuscarTodosClientes(){
            $retorno = file_get_contents("http://localhost/assistencia_server/services/assistenciaRest.php?operacao=cliente");
			
			$retorno = json_decode($retorno);
			if(is_array($retorno))
			{
				require_once "views/listar_cliente.php";

			}
			else{
				echo $retorno;
			}
        }
        public function BuscarTodosAssistencias()
		{			
			$client = new SoapClient("http://localhost/assistencia_server/services/assistenciaSOAP.php?wsdl");
			
			$aut_param = new stdClass();
			$aut_param->username = "Arligreicy";
			$aut_param->password = "123";

			$header_parm = new soapVar($aut_param, SOAP_ENC_OBJECT);

			$header = new soapHeader("assistencia","security",$header_parm,false);

			$client->__setSoapHeaders(array($header));
				
			$retorno = json_decode($client->assistencias());
			
			if(is_array($retorno))
			{
				require_once "views/listar_assistencia.php";
			}
			else
			{
				 echo $retorno;
			}
			
		}
    }
?>