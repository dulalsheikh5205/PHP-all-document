<?php 

class Vachile
{
	private $model;

	public function setModel($model)
	{
		$this->model = $model;
	}

	public function message()
	{
		return "Im a <b>".$this->model."</b><br>";
	}
}

class Mycar extends Vachile
{
	
}

$mycar = new Mycar();
$mycar->setModel("Mercedes Benz");
echo $mycar->message();

/* 
output: Im a Mercedes Benz
*/
?>