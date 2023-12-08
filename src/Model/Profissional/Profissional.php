<?php

namespace src\Model\Profissional;

use src\Model\Pessoa\Pessoa;

class Profissional extends Pessoa
{
    protected $funcao;

    public function __construct($nome, $idade, $funcao, $nacionalidade)
    {
        parent::__construct($nome, $idade, $nacionalidade);
        $this->funcao = $funcao;
    }
    public function getFuncao()
    {
        return $this->funcao;
    }
}
