<!DOCTYPE html>
<html>
<head>


<style>
table {
    width:100%;
}
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
    text-align: left;
}
table#t01 tr:nth-child(even) {
    background-color: #eee;
}
table#t01 tr:nth-child(odd) {
   background-color:#fff;
}
table#t01 th {
    background-color: black;
    color: white;
}
</style>

	<title></title>
	<style type="text/css">
		div{
			border: 1px  black;
			width: 500px;
			height: 1000px;
			float: left;
		}
	</style>
</head>
<body>
   

   			<form action="guardarDatos1.php" method="post">
 
					  	<h3>Nombres</h3><input type="text" name="firstName" maxlength="50" placeholder="Primer nombre" autofocus="autofocus">  <input type="text" name="SecondName" maxlength="50" placeholder="segundo nombre">
					  	<h3>Apellidos</h3><input type="text" name="apellidos" maxlength="50" placeholder="primer apellido">  <input type="text" name="segundoApellido" maxlength="50" placeholder="Segundo apellido">
					  	<h3>celular</h3><input type="number" name="celular" placeholder="Ingrese su celular" ><br>
					  	<h3>e-mail</h3><input type="email" name="email" placeholder="ingrese su e-mail"><br>

					 
					    
					    <h3>Recomendaria la pagina</h3>
					    
					    <label for="recomendacion">Si</label>
					    <input type="radio" name="recomendacion" id="recomendacion" value="Si" checked > <!--El checked obliga a la persona a decir una de las dos. sale automaticamente ya en la pantallla-->

					    <label for="recomendacion">No</label>
					    <input type="radio" name="recomendacion" id="recomendacion" value="No">
<br><br><br><br>
					    
<button>Enviar Datos</button>

  
        </form>

</body>
</html>













