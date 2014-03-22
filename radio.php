<?php
	$number1=$_GET['number1'];
	$number2=$_GET['number2'];
	$calc=$_GET['calc'];
	if(isset($calc) && $calc=="addition")
	{
		$ans=$number1+$number2;
		echo "Addition of $number1 & $number2 is :".$ans;
	}
	else if($calc=="subtraction")
	{
		$ans=$number1-$number2;
		echo "Subtraction of $number1 & $number2 is :".$ans;
	}
	else
	{
                $ans=$number1*$number2;
                echo "Multiplication of $number1 & $number2 is :".$ans;
	}

?>
