<?php

class Cliente 
{
    public function __construct(
        private int $idcliente = 0,
        private string $nome = "",
        private string $celular = ""
    ) {}
        
    public function getIdcliente()
    {
        return $this->idcliente;

    }
}
