<?php

use system\core\Grid;
use system\model\TbFuncionarios;
use system\core\Painel;
use system\core\GridOption;
use system\core\FormController;
use system\core\Button;
use system\core\ActionController;
use system\model\TbSolicitacao;

include_once '../../bootstrap.php';
include_once 'config.php';
include '../../componente/topo.php';
include '../../componente/menuprincipal.php';
include 'ModuloSolicitacao.php';


$form = new FormController();
$form->setForm()
->getForm();

$coluns = array('','N�mero','Sistema', 'Modulo', 'Usu�rio Solicitante', 'Data Solicita��o', 'Altera��o', 'Data Publica��o', 'Observa��o');

$users = new TbSolicitacao();

$grid = new Grid($coluns, $users->findAll());

$gridOption = new GridOption('');
$gridOption->setName('editar')
			->setIco('edit')
			->setUrl('#');
$grid->addOption($gridOption);

$painel = new Painel();
$painel->setPainelTitle('Lista de Solicita��es')
		->setPainelColor('primary')
		->addGrid($grid)
		->show(!isset($_SESSION['action']));
		

include '../../componente/rodape.php';