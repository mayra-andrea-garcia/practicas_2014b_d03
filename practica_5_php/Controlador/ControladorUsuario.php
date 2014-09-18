<?php

class ControladorUsuario
{
	public $modelo;


	function __construct()
	{
		require('Modelo/ModeloUsuario.php');
		$this->modelo = new ModeloUsuario();
	}

	function run()
	{
		switch ($_GET['actividad']) {
			case 'listar':
				$this->listar();
				break;
			
			default:
				# code...
				break;
		}
	}

	public function listar()
	{
		
		
		$nombre = $this->validaTexto($_POST['nombre']);
		$email = $this->validaTexto($_POST['email']);
		$telefono = $this->validaTexto($_POST['telefono']);
		$direccion = $this->validaTexto($_POST['direccion']);

		
		$result = $this->modelo->listar($nombre, $email, $telefono, $direccion);

		//Insert succesful
		if(isset($result))
		{
			//load the view
			require('Vista/ListaUsuario.php');
		}
		else
		{
			echo 'Error: el usuario no se a insertado';
			//require('vista/error');
		}

		/**
		*@param string $data
		*@return string $data
		*validate a string to be a number and clean it if number
		*/
	}

	public function validaTexto($cadenaAValidar)
	{
		if(isset($cadenaAValidar))
		{
			if(is_string($cadenaAValidar))
			{
				return $cadenaAValidar;
			}
			else
			{
				echo 'Error: Datos Proporcionados no son texto';
			}
		}
	}

}