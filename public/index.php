<?php

require_once '../vendor/autoload.php';

use src\Model\Jogador\Jogador;
use src\Model\Goleiro\Goleiro;
use src\Model\Tecnico\Tecnico;
use src\Model\Medico\Medico;
use src\Model\Elenco\Elenco;

$jogador = new Jogador("Neymar", 29, "Atacante", 10, "Brasileira");
$goleiro = new Goleiro("Alisson", 28, "Goleiro", 1, "Brasileira");
$tecnico = new Tecnico("Tite", 60, "Técnico", "Brasileira");
$medico = new Medico("Dr. Silva", 45, "Ortopedia", "Brasileira");

$elenco = new Elenco();

$elenco->adicionarPessoa($jogador);
$elenco->adicionarPessoa($goleiro);
$elenco->adicionarPessoa($tecnico);
$elenco->adicionarPessoa($medico);

$elenco->imprimirElenco();
