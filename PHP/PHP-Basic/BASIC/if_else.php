<?php 

	$priceOfBeef = 550;

	if($priceOfBeef <=100)
	{
		echo "Buy 5 kg beef";
	}

	else if($priceOfBeef == 200)
	{
		echo "Buy 3 kg beef";
	}

	else if($priceOfBeef == 350)
	{
		echo "Buy 2 kg beef";
	}

	elseif ($priceOfBeef == 400)
	 {
		echo "Buy 1 kg beef";
	}

	else
	{
		echo "Dont buy beef";
	}

?>