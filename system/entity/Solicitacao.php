<?php

namespace system\entity;

class Portaria {
	
	private $sistema;
	private $id;
	private $modulo;
	private $usuario;
	private $dataSolicitacao;
	private $dataPublicacao;
	private $alteracao;
	private $observacao;
	
	public function setModulo($modulo) {
		$this->modulo = $modulo;
		return $this;
	}
	public function getModulo() {
		return $this->modulo;
	}
	public function setId($id) {
		$this->id = $id;
		return $this;
	}
	public function getId() {
		return $this->id;
	}
	
	public function setSistema($sistema) {
		$this->sistema = $sistema;
		return $this;
	}
	public function getSistema() {
		return $this->sistema;
	}
	
	public function setUsuario($usuario) {
		$this->usuario = $usuario;
		return $this;
	}
	public function getUsuario() {
		return $this->usuario;
	}
	
	public function setDataSolicitacao($dataSolicitacao) {
		$this->dataSolicitacao = $dataSolicitacao;
		return $this;
	}
	public function getDataSolicitacao() {
		return $this->dataSolicitacao;
	}
	
	public function setDataPublicacao($dataPublicacao) {
		$this->dataPublicacao = $dataPublicacao;
		return $this;
	}
	public function getDataPublicacao() {
		return $this->dataPublicacao;
	}
	
	public function setAlteracao($alteracao) {
		$this->alteracao = $alteracao;
		return $this;
	}
	public function getAlteracao() {
		return $this->alteracao;
	}
	public function setObservacao($observacao) {
		$this->observacao = $observacao;
		return $this;
	}
	public function getObservacao() {
		return $this->observacao;
	}
}