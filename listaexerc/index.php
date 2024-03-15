<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Lista de Exercicios</title>

</head>

<body>

<h1>Exercicio 1</h1>

<?php

$a=2; 

$b=4; 

$c=6; 

$m = (($c+$b)/2)**(--$c); 

$t = --$c**($b+$a); 

$x= --$c + $b; 

$y= $b++ + $a; 

$z= $a - $b--;


echo "Valor de a: $a<br>";

echo "Valor de b: $b<br>";

echo "Valor de c: $c<br>";

echo "Valor de m: $m<br>";

echo "Valor de t: $t<br>";

echo "Valor de x: $x<br>";

echo "Valor de y: $y<br>";

echo "Valor de z: $z<br>";


$a = (double) $a;

$b = (double) $b;

$c = (string) $c; 


echo "Valor convertido a: $a<br>";

echo "Valor convertido b: $b<br>";

echo "Valor convertido c: $c<br>";

?>


<h1>Exercicio 2</h1>


<?php


$raio = 10;

$pi = 3.14;

$perimetro = $pi * $raio;

$area = $pi * ($raio * $raio);


echo "Raio: $raio <br>";

echo "Perimetro: $perimetro <br>";

echo "Area: $area <br>";


?>

<h1>Exercicio 3</h1>

<?php


$num1 = 6;

$num2 = 5;

echo "Soma: ". $num1 + $num2 ."<br>";

echo "Subtracao: ". $num1 - $num2 ."<br>";

echo "Multiplicacao: ". $num1 * $num2 ."<br>";

echo "Divisao: ". $num1 / $num2 ."<br>";

echo "Resto: ". $num1 % $num2 ."<br>";

echo "Exponenciacao: ". pow($num1 , $num2) ."<br>";

echo "Media: ". (($num1 + $num2) / 2) ."<br>";

echo "Raiz quadrada:". sqrt($num1 + $num2) ."<br>";

?>

<h1>Exercicio 4</h1>


<?php


$a = 2*(pow($x, 2)) -3*(pow($x, $x+1))/ 2*$x;


$b = sqrt($x + 1) / 4;


$c = sqrt(4 * $x + (pow(2,$x)));


echo $a + $b / $c;


?>

<h1>Exercicio 5</h1>


<?php

$g = 6;

$h = 4;

$j = 2;


$a = pow($g + $h, 2);

$b = pow($h + $j, 2);

$c = ($g + $h ) / 2;


echo "Resultado: $j";

?>

</body>

</html>