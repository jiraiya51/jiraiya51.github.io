<?php 
$num1=$_POST['numero1'];
$num2=$_POST['numero2'];
$operaciones=$_POST['operacion'];

if ($operaciones=="suma"){
    $suma=$num1+$num2;
    echo "el resultado de la suma es: ".$suma;

}
elseif($operaciones=="resta"){
    $resta=$num1-$num2;
    echo "el resultado de la resta es: ".$resta;    
}
elseif($operaciones=="multiplicar"){
    $mul=$num1*$num2;
    echo "el resultado de la multiplicacion es: ".$mul;
}
elseif($operaciones=="division"){
    $div=$num1/$num2;
    echo "el resultado de la division es: ".$div;
}
 ?>
