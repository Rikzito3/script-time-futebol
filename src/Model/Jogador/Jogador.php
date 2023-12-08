<?php

namespace src\Model\Jogador;

use src\Model\Pessoa\Pessoa;

class Jogador extends Pessoa
{
    protected $posicao;
    protected $numeroCamisa;
    protected $golsMarcados = 0;

    protected static $quantidadeJogadores = 20;

    public function __construct($nome, $idade, $posicao, $numeroCamisa, $nacionalidade)
    {
        self::$quantidadeJogadores++;

        if (self::$quantidadeJogadores > 22) {
            throw new \Exception("Limite máximo de jogadores atingido.");
        }

        parent::__construct($nome, $idade, $nacionalidade);
        $this->posicao = $posicao;
        $this->numeroCamisa = $numeroCamisa;
    }

    public function getPosicao()
    {
        return $this->posicao;
    }

    public function getNumeroCamisa()
    {
        return $this->numeroCamisa;
    }

    public function getGolsMarcados()
    {
        return $this->golsMarcados;
    }

    public function marcarGol()
    {
        $this->golsMarcados++;
    }
}
