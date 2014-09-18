<?php

class ModeloUsuario
{

	public $nombre;
	public $email;
	public $telefono;
	public $direccion;


	function listar($nombre,$email,$telefono,$direccion)
	{
		$this->nombre = $nombre;
		$this->email = $email;
		$this->telefono = $telefono;
		$this->direccion = $direccion;
		
		return true;
	}
}