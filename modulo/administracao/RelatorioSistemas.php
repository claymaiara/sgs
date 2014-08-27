<?php
use system\model\TbSistema;
use system\core\Painel;
use system\core\Grid;
use system\core\GridOption;
use system\core\FormController;

require_once '../../bootstrap.php';
include '../../componente/topo.php';
include '../../componente/menuprincipal.php';
include_once 'config.php';


include '../../modulo/administracao/ModuloAdministracao.php';

$form = new FormController();
$form->setForm()
->getForm();

$coluns = array('','id','nome');
$sistema = new TbSistema();

$grid = new Grid($coluns, $sistema->findAll());
$option = new GridOption();
$option->setName('editar')
		->setIco('edit')
		->setUrl('forms/alterar/sistemaAlterar.php?');
$grid->addOption($option);



$painel = new Painel();
$painel->setPainelTitle('Sistemas Cadastrados')
		->setPainelColor('primary')
		->addGrid($grid)
		->show();




include '../../componente/rodape.php';
?>