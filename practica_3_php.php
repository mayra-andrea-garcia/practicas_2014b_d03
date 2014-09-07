<?php

//Mayra Andrea Garcia Martinez
function multiplicar($inicioTabla=1, $numTablas=10, $numMultiplicar=12)
{

	for($i=1; $i <= $numTablas; $i++)
	{

		for($y=1; $y <= $numMultiplicar; $y++)
		{
			$resultado = $inicioTabla*$y;
			print $inicioTabla.'*'.$y.'='.$resultado.'<br/>';
		}
		$inicioTabla++;
		print '<br/>';
	}
}

if((isset($_GET['inicioTabla'])) && (isset($_GET['numTablas'])) && (isset($_GET['numMultiplicar'])))
{
	multiplicar($_GET['inicioTabla'], $_GET['numTablas'], $_GET['numMultiplicar']);
}
else if ((isset($_GET['inicioTabla'])) && (isset($_GET['numTablas'])))
{
	multiplicar($_GET['inicioTabla'],$_GET['numTablas']);
}
else if(isset($_GET['inicioTabla']) || isset($_GET['numTablas']) || isset($_GET['numMultiplicar']))
{
	if(isset($_GET['inicioTabla']))
	{
		multiplicar($_GET['inicioTabla']);
	}
	else if (isset($_GET['numTablas']))
	{
		multiplicar($_GET['numTablas']);
	}
	else
	{
		multiplicar($_GET['numMultiplicar']);
	}
}
else
{
	multiplicar();
}

?>
