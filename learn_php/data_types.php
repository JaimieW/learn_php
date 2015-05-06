<?php

$str = "hello";
var_dump($str);

$int = 5980;
var_dump($int);

$float = 59.80;
var_dump($float);

$bool = true;
var_dump($bool);

$arr = array("a", "b", 3);
var_dump($arr);

class Pizza {
	function Pizza(){
		$this->topping = "margarhita";
		$this->crust = "regular";
	}
}
$pizza = new Pizza();
var_dump($pizza);
echo $pizza->crust;

$xxx = null;
var_dump($xxx);


?>