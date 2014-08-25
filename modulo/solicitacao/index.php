<?php

use system\core\Grid;
use system\model\TbFuncionarios;
use system\core\Painel;
use system\core\GridOption;
use system\core\FormController;
use system\core\Button;
use system\core\ActionController;

include_once '../../bootstrap.php';
include_once 'config.php';
include '../../componente/topo.php';
include '../../componente/menuprincipal.php';

$coluns = array('','id','nome', 'email', 'endereço', 'telefone');

$users = new TbFuncionarios();

$grid = new Grid($coluns, $users->findAll());

$gridOption = new GridOption('');
$gridOption->setName('editar')
			->setIco('edit')
			->setUrl('#');
$grid->addOption($gridOption);

$form = new FormController();
$form->setForm('../forms/formDefault')
	 ->getForm();

$button = new Button();
$button->setButtonType('submit')
		->setButtonColor('primary')
		->setButtonTitle('Nova')
		->setButtonIco('plus');
		
		
		
$painel2 = new Painel();
$painel2->setPainelTitle('Solicitações')
		->setPainelColor('primary')
		->addButton($button)
		->show(!isset($_SESSION['action']));


$painel = new Painel();
$painel->setPainelTitle('Lista de Solicitações')
		->setPainelColor('primary')
		->addGrid($grid)
		->show(!isset($_SESSION['action']));
		

include '../../componente/rodape.php';