<?php
class Assistencia
{
    public function __construct(
        private int $idassistencia = 0,
        private string $nome = ""
    ){}    
    public function getIdassistencia()
    {
        return $this->idassistencia;

    }
}
