<?php
	error_reporting(0); 	//Establece cuáles errores de PHP son notificados, en este caso es 0 para evitar problemas de error.
	session_start();		//Iniciar una nueva sesión o reanudar la existente.
  require 'database.php';	//Llama a database.php que sirve para conectar a la base de datos "login_database".

	if (!empty($_POST['nombre']) && !empty($_POST['password'])) {											//IF - si método POST esta iniciada con algun usuario y con una clave, entonces:
		$records = $conn->prepare('SELECT id, nombre, password FROM usuarios WHERE nombre=:nombre');		//Asigna $records como $conn(parametro asignado en database.php para conectar con la base de datos) mas la verificacion de si el usuario y password coinciden con el id seleccionado.
		$records->bindParam(':nombre',$_POST['nombre']);													//Vincula en $records el id de la bd con id de la sesión.
		$records->execute();																				//Ejecuta $records.
		$results = $records->fetch(PDO::FETCH_ASSOC);														//$results devuelve el array indexado de $records.

		$message = '';																						//Asigna $message como vacio.

		if (count($results) > 0 && password_verify($_POST['password'], $results['password'])) {				//IF - Cuenta el valor $results, si este es mayor a 0 y ademas el password coincide con el password de la BD entonces:
			$_SESSION['user_id'] = $results['id'];															//La sesion es la misma que el id de $results.
			header('Location: /ProyectoTitulo/index.php');													//Te manda a index.php
		} else {																							//De no cumplirse el IF, entonces:

			$message = 'Usuario o contraseña incorrecto';													//Asigna $message como 'Usuario o contraseña incorrecto'.
		}
	}

 ?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">																				<!--Tipo de caracteres utilizados-->
		<title>Ingresar</title>																				<!--Titulo de Pagina-->
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">						<!--Estilo de letra Roboto-->
		<link rel="stylesheet" href="assets/css/style.css">													<!--Estilo de letra, asignada en "style.css"-->
	</head>
	<body>
  <?php require 'partials/header.php' ?>																	<!--Llama a el encabezado "header.php"-->

	<?php if(!empty($message)): ?>																			<!--IF - Si $message no está vacío, entoneces:-->
	<p><?= $message ?></p>																					<!--Mostrar $message-->
	<?php endif; ?>																							<!--FIN del IF-->

<!--Imagen de fondo / funcion de recuadro azul-->
	<style type="text/css">																					
	body {
	  background-image: url("images/fondo/Local.jpg");
	  background-size: 100%;
	}
	#recuadro1 {
		height: 340px;
		width: 400px;
		background-color: #00008B;
		margin: 0px auto;
	}
	</style>

	<h1>ACCESO</h1>																							<!--Texto en h1 "ACCESO"-->

	<form action="login.php" method="post"><div id='recuadro1'><br>											<!--Invoca a recuadro azul-->
		Ingrese con su usuario:																				<!--Texto sobre campo rellenable-->
		<input type="text" name="nombre" value="" placeholder="Escriba aquí su nombre de usuario">			<!--Tipo de input "text"(campo rellenable con texto), nombre "nombre", placeholder(texto escrito en gris)"Escriba aquí su nombre de usuario"-->
		Ingrese su contraseña:																				<!--Texto sobre campo rellenable-->
		<input type="password" name="password" value="" placeholder="Escriba aquí su contraseña">			<!--Tipo de input "password"(campo rellenable con texto oculto), nombre "password", placeholder(texto escrito en gris)"Escriba aquí su contraseña"-->
		<br>
		<input type="submit" value="Entrar"><br></div><br><br><h3>											<!--Tipo de input "submit" (botón), texto "entrar"-->
	  <a href="registrar.php">Registrarse</a><br><br><a href="index.php">Volver a inicio</a></h3>			<!--Texto "Registrarse" con enlace a "registrar.php" y texto "Volver a inicio" con enlace a "index.php"-->
	  </body>
</html>
