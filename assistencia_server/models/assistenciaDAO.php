<?php
	class assistenciaDAO extends Conexao
	{
		public function __construct()
		{
			parent:: __construct();
		}
        public function buscar_todos_clientes()
		{
			$sql = "SELECT * FROM cliente";
			try
			{
				$stm = $this->db->prepare($sql);
				$stm->execute();
				return $stm->fetchAll(PDO::FETCH_OBJ);
			}
			catch(PDOException $e)
			{
				$this->db = null;
				return "Tente mais tarde";
			}
		}
        public function buscar_todos_assistencia()
		{
			$sql = "SELECT * FROM assistencia";
			try
			{
				$stm = $this->db->prepare($sql);
				$stm->execute();
				return $stm->fetchAll(PDO::FETCH_OBJ);
			}
			catch(PDOException $e)
			{
				$this->db = null;
				return "Tente mais tarde";
			}
		}
       
    }
?>