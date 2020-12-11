<?php

session_start(); //Iniciar una nueva sesión o reanudar la existente.

require 'database.php'; //Llama a database.php que sirve para conectar a la base de datos "login_database".

if (isset($_SESSION['user_id'])) {															 //IF - si session esta iniciada con algun usuario, entonces:
	$records = $conn->prepare('SELECT id, nombre, password FROM usuarios WHERE id = :id');	 //Asigna $records como $conn(parametro asignado en database.php para conectar con la base de datos) mas la verificacion de si el usuario y password coinciden con el id seleccionado.
	$records->bindParam(':id', $_SESSION['user_id']);										 //Vincula en $records el id de la bd con id de la sesión.
	$records->execute();																	 //Ejecuta $records.
	$results = $records->fetch(PDO::FETCH_ASSOC);											 //$results devuelve el array indexado de $records.

	$user = null;																			 //Asigna $user como nulo.

	if (count($results) > 0){																 //IF - cuenta $results y si es mayor que 0 entonces:
		$user = $results;																	 //$user = $results.
	}
}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">																 <!--Tipo de caracteres utilizados-->
		<title>Inicio</title>																 <!--Titulo de Pagina-->
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">		 <!--Estilo de letra Roboto-->
		<link rel="stylesheet" href="assets/css/style.css">									 <!--Estilo de letra, asignada en "style.css"-->
	</head>
	<body>
		<?php require 'partials/header.php' ?>											     <!--Llama a el encabezado "header.php"-->



<!--Imagen de fondo / funcion de recuadro azul-->
<style type="text/css">																		 																	 
body {
  background-image: url("images/fondo/Local.jpg");   
  background-size: 100%;							 
}
#recuadro1 {                  						
	height: 370px;									 
	width: 360px;									 
	background-color: #00008B;						
	margin: 0px auto;								
}
</style>

  <h1>BIENVENIDOS A INDUMOTORA 0NE</h1><br><div id='recuadro1'><br>							 <!--Texto en h1 e invoca a recuadro azul-->
  <?php if (!empty($user)): ?>  															 <!--IF - Si usuario no esta vacio entonces mostrar lo siguiente:-->
	<br> Bienvenido/a <?= $user['nombre'] ?>												 <!--Mensaje de bienvenido + nombre-->
	<br> Has ingresado correctamente.<br>													 
	<a href="logout.php">Cerrar Sesión</a>													 <!--Texto "cerrar sesion" que te manda a logout.php-->
	<br>
</form><br><br>
  <form action="catalogo.php" method="post">												 <!--Enviar a catalogo.php por metodo post-->
  <input type="submit" name="catalogo" value="CATÁLOGO">									 <!--Tipo de boton "submit", nombre "catalogo", texto "CATÁLOGO"-->
  </form><br>
  <form action="sucursales.php" method="post">												 <!--Enviar a sucursales.php por metodo post-->
  <input type="submit" name="sucursales" value="SUCURSALES">								 <!--Tipo de boton "submit", nombre "sucursales", texto "SUCURSALES"-->
  </form><br>
  <form action="contacto.php" method="post">												 <!--Enviar a contacto.php por metodo post-->
  <input type="submit" name="contacto" value="CONTACTO">									 <!--Tipo de boton "submit", nombre "contacto", texto "CONTACTO"-->
  </form>

  <?php else: ?>																			 <!--Si usuario esta vacio entonces mostrar lo siguiente:-->

  <br><br>
  <form action="login.php" method="post">													 <!--Enviar a login.php por metodo post-->
	<input type="submit" name="login" value="ACCESO">										 <!--Tipo de boton "submit", nombre "login", texto "ACCESO"-->
  </form><br>
	<form action="registrar.php" method="post">												 <!--Enviar a registrar.php por metodo post-->
  <input type="submit" name="registrar" value="REGISTRARSE">								 <!--Tipo de boton "submit", nombre "registrar", texto "REGISTRARSE"-->
	</form><br>
  <form action="sucursales.php" method="post">												 <!--Enviar a sucursales.php por metodo post-->
  <input type="submit" name="sucursales" value="SUCURSALES">								 <!--Tipo de boton "submit", nombre "sucursales", texto "SUCURSALES"-->
  </form><br>
  <form action="contacto.php" method="post">												 <!--Enviar a contacto.php por metodo post-->
  <input type="submit" name="contacto" value="CONTACTO">									 <!--Tipo de boton "submit", nombre "contacto", texto "CONTACTO"-->
	<?php endif; ?>																			 <!--FIN DEL IF-->
	</div>
	</body>
</html>
