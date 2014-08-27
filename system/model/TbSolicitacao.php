<?php

namespace system\model; 

use system\core\DataBase;
use system; 

class TbSolicitacao extends DataBase
{
	
	public function findAll()
	{
		try {
			
			$stmt = $this->conexao->prepare('SELECT * FROM tb_solicitacao');
			
			$stmt->execute();
			
			return $stmt->fetchAll(\PDO::FETCH_ASSOC);
			
		} catch (\Exception $e) {
			throw new \Exception($e->getMessage(),$e->getCode());
		}

		
	}
	
	public function findOne($codigo)
	{
	    try {
	        	
	        $stmt = $this->conexao->prepare('SELECT * FROM tb_solicitacao WHERE sol_codigo = ?');
	        	
	        $stmt->bindParam(1, $codigo,\PDO::PARAM_INT);
	        
	        $stmt->execute();
	        	
	        return $stmt->fetch(\PDO::FETCH_ASSOC);
	        	
	    } catch (\Exception $e) {
	        throw new \Exception($e->getMessage(),$e->getCode());
	    }
	
	
	}
	
	
	public function save(system\entity\Solicitacao $Solicitacao)
	{
	    
	    try {
	    
	        $statement = ("insert into tb_solicitacao (sol_sistemas, sol_modulo, sol_usuario, sol_alteracao, sol_dataSolicitacao, 
	        		sol_dataPublicacao, sol_observacao) value(?,?,?,?,?,?)");
	        $stmt = $this->conexao->prepare($statement);
	         
	        $stmt->bindParam('?', $Solicitacao->getSistema,\PDO::PARAM_STR);
	        $stmt->bindParam('?', $Solicitacao->getModulo,\PDO::PARAM_STR);
	        $stmt->bindParam('?', $Solicitacao->getUsuario,\PDO::PARAM_STR);
	        $stmt->bindParam('?', $Solicitacao->getAlteracao,\PDO::PARAM_STR);
	        $stmt->bindParam('?', $Solicitacao->getDataSolicitacao,\PDO::PARAM_STR);
	        $stmt->bindParam('?', $Solicitacao->getDataPublicacao,\PDO::PARAM_STR);
	        $stmt->bindParam('?', $Solicitacao->getObservacao,\PDO::PARAM_STR);
	        
	        
	        $stmt->execute();
	        
	    } catch (\Exception $e) {
	        throw new \Exception($e->getMessage(),$e->getCode());
	    }
	}
	
	public function update(system\entity\Doca $Doca)
	{
	     
	    try {
	
	        $statement = ("UPDATE test set test_descripton = :test_descripton
	                       WHERE cod_test = :cod_test");
	        $stmt = $this->conexao->prepare($statement);
	
	        $stmt->bindParam(':test_descripton', $Doca->getName(),\PDO::PARAM_STR);
	        $stmt->bindParam(':cod_test', $Doca->getId(),\PDO::PARAM_INT);
	        	         
	        $stmt->execute();
	         
	    } catch (\Exception $e) {
	        throw new \Exception($e->getMessage(),$e->getCode());
	    }
	}
	
}