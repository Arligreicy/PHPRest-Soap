<?php
	class visitaDAO extends Conexao
	{
		public function __construct()
		{
			parent:: __construct();
		}
        
        public function inserir($visita)
		{
			$sql = "INSERT INTO visita (idcliente, idassistencia, dataVisita) 
            VALUES (?,?,?)";
        try
        {
            $stm = $this->db->prepare($sql);
            $stm->bindValue(1, $visita->getCliente()->getIdcliente());
            $stm->bindValue(2, $visita->getAssistencia()->getIdassistencia());
            $stm->bindValue(3, $visita->getData());
            $stm->execute();
            return "Visita cadastrada com sucesso";
        }
        catch(PDOException $e)
        {
            $this->db = null;
            return "Tente mais tarde";
        }
      
        }
    }
?>