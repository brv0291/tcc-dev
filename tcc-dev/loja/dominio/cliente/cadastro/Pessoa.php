<?php

abstract class Pessoa{
	private $telefone;
	private $endereco;
	private $email;
	
	public function __construct(){
		$this->telefone = new Telefone();
		$this->endereco = new Endereco();
		$this->email = new Email();
	}
		
}