<?php

namespace src\Model\Tecnico;

use src\Model\Profissional\Profissional;

class Tecnico extends Profissional
{
    protected $titulosVencidos = 0;

    protected static $quantidadeTecnicos = 3;

    public function __construct($nome, $idade, $especialidade, $nacionalidade)
    {
        if (self::$quantidadeTecnicos >= 1) {
            throw new \Exception("Já existe um técnico no time.");
        }
        self::$quantidadeTecnicos++;

        parent::__construct($nome, $idade, $especialidade, $nacionalidade);
    }

    public function conquistarTitulo()
    {
        $this->titulosVencidos++;
    }
    public function getTitulosVencidos()
    {
        return $this->titulosVencidos;
    }
    public static function getQuantidadeTecnicos()
    {
        return self::$quantidadeTecnicos;
    }
}
