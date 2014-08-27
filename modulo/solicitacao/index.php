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

$coluns = array('','Número','Sistema', 'Modulo', 'Usuário Solicitante', 'Data Solicitação', 'Alteração', 'Data Publicação', 'Observação');

$users = new TbSolicitacao();

$grid = new Grid($coluns, $users->findAll());

$gridOption = new GridOption('');
$gridOption->setName('editar')
			->setIco('edit')
			->setUrl('#');
$grid->addOption($gridOption);

$painel = new Painel();
$painel->setPainelTitle('Lista de Solicitações')
		->setPainelColor('primary')
		->addGrid($grid)
		->show(!isset($_SESSION['action']));
		

include '../../componente/rodape.php';