<?php 

var_dump($_POST);

echo "hola mundo ".$_POST['firstName'];
 ?>

 <?php
$link= mysqli_connect("localhost", "root", "", "base_datos_repasofornulario") or die('error en la conexcion ');
if($link){
	echo "true";
}
else
{
	echo "false";
}


$query="INSERT into usuarios (primer_nombre, segundo_nombre, primer_apellido, segundo_apellido, celular, email,	recomendariLaPagina) 
		values ('".$_POST['firstName']."',
		'".$_POST['SecondName']."',
		'".$_POST['apellidos']."',
		'".$_POST['segundoApellido']."',
		'".$_POST['celular']."',
		'".$_POST['email']."',
		'".$_POST['recomendacion']."')"	;





$result= mysqli_query($link, $query)or die('erroe en la sentencia');
var_dump($result);


?>