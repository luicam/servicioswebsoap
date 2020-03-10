<?php
header('Content-Type: text/html; charset=UTF-8');

$url="http://localhost/ExaRecuperacionServicios/servicio.php"; 
$uri="http://localhost/ExaRecuperacionServicios"; 
$cliente = new SoapClient(null,array('encoding'=>'UTF8','location'=>$url,'uri'=>$uri)); 

echo "Datos a mostrar: ";
echo "<br><br>";
echo "Precio con Descuento: ";
require_once('formulario1.html');
if($_POST['precio']){
	$p=$_POST['precio'];
	echo "$p<br>";
	$aux1 = $cliente->precio_con_descuento($p);
	echo "precio con descuento = "+$aux1+"<br>";
}
echo "<br>next<br>";
//$aux1 = $cliente->precio_con_descuento($precio);
//print("".$datosComerciales);
//print_r($datosComerciales);

echo "<br><br>";
echo "Multilpos de 5: ";
require_once('formulario2.html');
if($_POST['num1']&&$_POST['num1']){
	$a=$_POST['num1'];
	$b=$_POST['num2'];
	echo "$a<br>";
	echo "$b<br>";
	//$array=[];
	//print_r($array);
	$aux2 = $cliente->multiplo_de_5($a,$b);
	echo "multiplos de 5 entre los numeros dados en un array:"+"<br>";
	print_r($aux2);
}
echo "<br>fin<br>";
//$productosCatalogo = $cliente->multiplos_de_5($a, $b);
//print("".$productosCatalogo);
//print_r($productosCatalogo);
?>


