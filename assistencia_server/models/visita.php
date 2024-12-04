<?php
class Visita
{
    public function __construct(
        private int $idvisita = 0,
        private $cliente = null,
        private $assistencia = null,
        private string $dataVisita = "",
    ) {}
    public function getIdvisita()
    {
        return $this->idvisita;

    }
    public function getData()
    {
        return $this->dataVisita;

    }
    public function getCliente()
    {
        return $this->cliente;

    }
    public function getAssistencia()
    {
        return $this->assistencia;

    }
}
