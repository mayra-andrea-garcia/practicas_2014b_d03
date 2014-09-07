<?php

class Tabla {
  protected $x, $y, $z;

  public function __construct($xVal = 1, $yVal = 10, $zVal = 12) {
    $this->x = $xVal;
    $this->y = $yVal;
    $this->z = $zVal;
  }

  public function multiplicar(){
  	for($i=1; $i <= $this->y; $i++)
	{

		for($y=1; $y <= $this->z; $y++)
		{
			$resultado = $this->x*$y;
			print $this->x.'*'.$y.'='.$resultado.'<br/>';
		}
		$this->x++;
		print '<br/>';
	}
  }    

  public function __toString() {      // the function we're interested in...
    return "inicioTabla=$this->x <br>
    		numTablas=$this->y <br> 
    		numMultiplicar=$this->z";
  }
}

if((isset($_GET['x'])) && (isset($_GET['y'])) && (isset($_GET['z'])))
{
	$tabla = new Tabla($_GET['x'], $_GET['y'], $_GET['z']);
	$tabla->multiplicar();
}
else if ((isset($_GET['x'])) && (isset($_GET['y'])))
{
	$tabla = new Tabla($_GET['x'],$_GET['y']);
	$tabla->multiplicar();;
}
else if(isset($_GET['x']) || isset($_GET['y']) || isset($_GET['z']))
{
	if(isset($_GET['x']))
	{
		$tabla = new Tabla($_GET['x']);
		$tabla->multiplicar();
	}
	else if (isset($_GET['y']))
	{
		$tabla = new Tabla($_GET['y']);
		$tabla->multiplicar();
	}
	else
	{
		$tabla = new Tabla($_GET['z']);
		$tabla->multiplicar();
	}
}
else
{
	$tabla = new Tabla();
	$tabla->multiplicar();
}

?>