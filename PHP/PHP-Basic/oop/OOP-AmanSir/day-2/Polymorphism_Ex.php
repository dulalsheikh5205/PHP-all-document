<?php 

class Shape
{
	function draw()
	{

	}
}

class Circle extends Shape
{
	function draw()
	{
		echo "Circle has been drawn<br>";
	}
}

class Triangle extends Shape
{
	function draw()
	{
		echo "Triangle has been drawn<br>";
	}
}

class Ellipse extends Shape
{
	function draw()
	{
		echo "Ellipse has been drawn";
	}
}

$val = array();

$val[0] = new Circle();
$val[1] = new Triangle();
$val[2] = new Ellipse();

for($i = 0; $i < 3; $i++)
{
	$val[$i]->draw();
}

/* 
output:
Circle has been drawn
Triangle has been drawn
Ellipse has been drawn
*/

?>