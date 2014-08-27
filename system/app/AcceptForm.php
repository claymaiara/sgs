<?php

namespace system\app;

use Respect\Validation\Validator as v;
use system\core\PostController;
use system\model\TbUsuario;
use system\entity\Doca;
use system\model\TbSistema;
use system\entity\Sistema;

class AcceptForm extends PostController {
	public function cadastrarComercial() {
		try {
			
			v::string ()->notEmpty ()
						->setName ( 'Doca' )
						->setTemplate ( 'O campo {{name}} é obrigatório' )
						->assert ( $this->post ['doca'] );
			
			try {
				
				$tbUser = new TbUsuario ();
				$dados = 1;
				return $tbUser->save ( $dados );
			} catch ( Exception $e ) {
				
				throw new \Exception ();
			}
		} catch ( Exception $e ) {
			
			throw new Exception ();
		}
	}
	
	public function alterarSistema() {
		try {
			
			v::string ()->notEmpty ()
						->setName ( 'Sistema' )
						->setTemplate ( 'O campo {{name}} é obrigatório' )
						->assert ( $this->post ['sistema'] );
			
			try {
				
				$sistema = new Sistema ();
				$sistema->setName ( $this->post ['sis_descricao'] )->setId ( $this->post ['sis_codigo'] );
				
				$tbSistema = new TbSistema ();
				$tbSistema->update ( $sistema );
				return $this;
			} catch ( Exception $e ) {
			}
		} catch ( Exception $e ) {
			
			throw new Exception ();
		}
		
		return $this;
	}
}