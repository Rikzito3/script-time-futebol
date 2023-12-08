<?php

namespace src\Model\Medico;

use src\Model\Profissional\Profissional;

class Medico extends Profissional
{
    protected $especialidade;

    public function __construct($nome, $idade, $especialidade, $nacionalidade)
    {
        parent::__construct($nome, $idade, 'Médico', $nacionalidade);
        $this->especialidade = $especialidade;
    }
    public function getEspecialidade()
    {
        return $this->especialidade;
    }
}
