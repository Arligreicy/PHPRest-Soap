<?php
    class Conexao{
        
        public function __construct(
            protected $db = null
        ){
            try {
                $host = 'localhost';
                $dbname = 'assistencia';

                $args = "mysql:host={$host};dbname={$dbname};charset=utf8mb4";
                $user = 'root';
                $password = '';
    
                $this->db = new \PDO($args, $user, $password);
            } catch (\PDOException $e) {
                echo "Erro na conexãor: {$e->getCode()}<br>Mensagem: {$e->getMessage()}";
                die();
            }

        }
    }
?>