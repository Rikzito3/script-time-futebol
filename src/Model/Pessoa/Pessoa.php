<?php

namespace src\Model\Pessoa;

class Pessoa
{
    protected $nome;
    protected $idade;
    protected $nacionalidade;

    public function __construct($nome, $idade, $nacionalidade)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->nacionalidade = $nacionalidade;
    }
    public function getNome()
    {
        return $this->nome;
    }
    public function getIdade()
    {
        return $this->idade;
    }
    public function getNacionalidade()
    {
        return $this->nacionalidade;
    }
}
