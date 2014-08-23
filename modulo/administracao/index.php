<?php

use system\core\Grid;
use system\model\TbFuncionarios;
use system\core\Painel;
use system\core\GridOption;
use system\core\FormController;
use system\core\Button;

include_once '../../bootstrap.php';
include_once 'config.php';
include '../../componente/topo.php';
include '../../componente/menuprincipal.php';

$button = new Button();
$button->setButtonType('Button')
		->setButtonColor('primary')
		->setButtonTitle('Nova')
		->setButtonIco('plus');
		

$painel = new Painel();
$painel->setPainelTitle('Administração')
		->setPainelColor('primary')
		->addButton($button)
		->show(!isset($_SESSION['action']));
		

include '../../componente/rodape.php';