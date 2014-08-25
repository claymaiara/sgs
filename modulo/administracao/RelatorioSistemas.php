<?php
use system\model\TbSistema;
use system\core\Painel;
use system\core\Grid;
use system\core\GridOption;

require_once '../../bootstrap.php';
include '../../componente/topo.php';
include '../../componente/menuprincipal.php';
include_once 'config.php';


include '../../modulo/administracao/ModuloAdministracao.php';

$coluns = array('','id','nome');
$sistema = new TbSistema();

$grid = new Grid($coluns, $sistema->findAll());
$option = new GridOption();
$option->setName('editar')
		->setIco('edit')
		->setUrl('#');
$grid->addOption($option);



$painel = new Painel();
$painel->setPainelTitle('Sistemas Cadastrados')
		->setPainelColor('primary')
		->addGrid($grid)
		->show();


include '../../componente/rodape.php';
?>