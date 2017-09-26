<?php 

var_dump($_POST);
echo "<br>";

echo "hola mundo ".$_POST['primerNombre']."<br>";
 ?>

 <?php
$link= mysqli_connect("localhost", "root", "", "basededatosplantillaparacrud") or die('error en la conexcion ');
if($link){
	echo "true";
}
else
{
	echo "false";
}


if($_POST['primerNombre']=='' ){
	echo "Usted necesita agregar su primer nombre obligatoriamente <br>";

}elseif ($_POST['segundoNombre']=='') {
	echo "Usted necesita agregar su segund nombre obligatoriamente <br>";
}
elseif ($_POST['primerApellido']=='') {
	echo "Usted necesita agregar su primer apellido obligatoriamente <br>";
}
elseif ($_POST['segundoApellido']=='') {
	echo "Usted necesita agregar su segundo nombre obligatoriamente <br>";
}
elseif ($_POST['celular']=='') {
	echo "Usted necesita agregar su celular<br>";
}
elseif ($_POST['email']=='') {
	echo "Usted necesita agregar su email <br>";
}
elseif ($_POST['edad']=='' or $_POST['edad']<18) {
	echo "Usted necesita adicionar su edad y ser mayor de 18 años <br>";
}
elseif ($_POST['recomendacion']=='') {
	echo "Usted necesita hacer una recomendacion <br>";
}
elseif ($_POST['seleccione']=='seleccione') {

	

       echo "debe seleccionar una opcion <br>";

	}
	

   

   
else{


	$query="INSERT into usuarios (primer_nombre, segundo_nombre, primer_apellido, segundo_apellido, celular, email,	recomendariLaPagina,edad,seleccione) 
		values ('".$_POST['primerNombre']."',
		'".$_POST['segundoNombre']."',
		'".$_POST['primerApellido']."',
		'".$_POST['segundoApellido']."',
		'".$_POST['celular']."',
		'".$_POST['email']."',
	    '".$_POST['recomendacion']."',
		".$_POST['edad'].",
		'".$_POST['seleccione']."')";

		echo $query;


		


	echo "proceso exitoso";
	$result= mysqli_query($link, $query)or die('erroe en la sentencia');

}




/*

$query="INSERT into usuarios (primer_nombre, segundo_nombre, primer_apellido, segundo_apellido, celular, email,	recomendariLaPagina) 
		values ('".$_POST['primerNombre']."',
		'".$_POST['segundoNombre']."',
		'".$_POST['primerApellido']."',
		'".$_POST['segundoApellido']."',
		'".$_POST['celular']."',
		'".$_POST['email']."',
		'".$_POST['recomendacion']."')"	;





$result= mysqli_query($link, $query)or die('erroe en la sentencia');
var_dump($result);

*/
?>