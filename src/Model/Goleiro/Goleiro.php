<?php

namespace src\Model\Goleiro;

use src\Model\Jogador\Jogador;

class Goleiro extends Jogador
{
    protected $defesasRealizadas = 0;

    protected static $quantidadeGoleiros = 2;

    public function __construct($nome, $idade, $numeroCamisa, $nacionalidade)
    {
        self::$quantidadeGoleiros++;

        if (self::$quantidadeGoleiros > 3) {
            throw new \Exception("Limite máximo de goleiros atingidos.");
        }
        parent::__construct($nome, $idade, "Goleiro", $numeroCamisa, $nacionalidade);
    }

    public function realizarDefesa()
    {
        $this->defesasRealizadas++;
    }
    public function getDefesasRealizadas()
    {
        return $this->defesasRealizadas;
    }
    public static function getQuantidadeGoleiros()
    {
        return self::$quantidadeGoleiros;
    }
}
