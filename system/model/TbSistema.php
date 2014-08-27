<?php

namespace system\model; 

use system\core\DataBase;
use system; 

class TbSistema extends DataBase
{
	
	public function findAll()
	{
		try {
			
			$stmt = $this->conexao->prepare('SELECT * FROM tb_sistema');
			
			$stmt->execute();
			
			return $stmt->fetchAll(\PDO::FETCH_ASSOC);
			
		} catch (\Exception $e) {
			throw new \Exception($e->getMessage(),$e->getCode());
		}

		
	}
	
	public function findOne($codigo)
	{
	    try {
	        	
	        $stmt = $this->conexao->prepare('SELECT * FROM tb_sistema WHERE sis_codigo = ?');
	        	
	        $stmt->bindParam(1, $codigo,\PDO::PARAM_INT);
	        
	        $stmt->execute();
	        	
	        return $stmt->fetch(\PDO::FETCH_ASSOC);
	        	
	    } catch (\Exception $e) {
	        throw new \Exception($e->getMessage(),$e->getCode());
	    }
	
	
	}
	
	
	public function save(system\entity\Sistema $sistema)
	{
	    
	    try {
	    
	        $statement = ("INSERT INTO tb_sistema (sis_descricao) value(:sis_descricao)");
	        $stmt = $this->conexao->prepare($statement);
	         
	        $stmt->bindParam(':sis_descricao', $sistema->getName(),\PDO::PARAM_STR);
	        
	        $stmt->execute();
	        
	    } catch (\Exception $e) {
	        throw new \Exception($e->getMessage(),$e->getCode());
	    }
	}
	
	public function update(system\entity\Sistema $sistema)
	{
	     
	    try {
	
	        $statement = ("UPDATE tb_sistema set sis_descricao = :sis_descricao
	                       WHERE sis_codigo = :sis_codigo");
	        $stmt = $this->conexao->prepare($statement);
	
	        $stmt->bindParam(':sis_descricao', $sistema->getName(),\PDO::PARAM_STR);
	        $stmt->bindParam(':sis_codigo', $sistema->getId(),\PDO::PARAM_INT);
	        	         
	        $stmt->execute();
	         
	    } catch (\Exception $e) {
	        throw new \Exception($e->getMessage(),$e->getCode());
	    }
	}
	
}