<?php

namespace system\app;

use Respect\Validation\Validator as v;
use system\core\PostController;
use system\model\TbUsuario;
use system\entity\Doca;
use system\entity\Sistema;
use system\model\TbSistema;

class AcceptFormAdministracao extends PostController
{
	public function cadastrarAdmin()
	{

		try {
			
			v::string()->notEmpty()
					   ->setName('Sistema')
					   ->setTemplate('O campo {{name}} � obrigat�rio')
					   ->assert($this->post['sistema']);
					   
			try {

			    $sistema = new Sistema();
			    $sistema->setName($this->post['sistema']);
			    
 				$tbSistema = new TbSistema();
				$dados = $tbSistema->save($sistema);
				return $this;
			   } catch (Exception $e) {
			   }
					   
		} catch (Exception $e) {
			
			throw new Exception();				
			
		}

	return $this;
		
	}
	
}