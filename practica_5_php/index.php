<?php

switch($_GET['control'])
{
	case 'usuario':
		//crear y ejecutar controlador
		require('Controlador/ControladorUsuario.php');
		//crear el objeto
		$control = new ControladorUsuario();
		$control->run();
		break;
	default: 'Error: No existe el controlador';
	    break;
}


