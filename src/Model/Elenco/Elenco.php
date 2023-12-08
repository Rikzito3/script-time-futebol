<?php

namespace src\Model\Elenco;

use src\Model\Pessoa\Pessoa;
use src\Model\Jogador\Jogador;
use src\Model\Tecnico\Tecnico;
use src\Model\Medico\Medico;

class Elenco
{
    protected $listaPessoas = [];

    public function adicionarPessoa(Pessoa $pessoa)
    {
        $this->listaPessoas[] = $pessoa;
    }

    public function imprimirElenco()
    {
        foreach ($this->listaPessoas as $pessoa) {
            echo "Nome: {$pessoa->getNome()}, Idade: {$pessoa->getIdade()}, Nacionalidade: {$pessoa->getNacionalidade()}";

            if ($pessoa instanceof Jogador) {
                echo ", Posição: {$pessoa->getPosicao()}, Camisa: {$pessoa->getNumeroCamisa()}, Gols: {$pessoa->getGolsMarcados()}";
            } elseif ($pessoa instanceof Tecnico) {
                echo ", Função: {$pessoa->getFuncao()}, Títulos: {$pessoa->getTitulosVencidos()}";
            } elseif ($pessoa instanceof Medico) {
                echo ", Especialidade: {$pessoa->getEspecialidade()}";
            }

            echo "\n";
        }
    }
}
