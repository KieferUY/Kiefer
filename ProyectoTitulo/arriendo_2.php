<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">																<!--Tipo de caracteres utilizados-->
		<title>Catálogo</title>																<!--Titulo de Pagina-->
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">		<!--Estilo de letra Roboto-->
		<link rel="stylesheet" href="assets/css/style.css">									<!--Estilo de letra, asignada en "style.css"-->
	</head>
	<body>

		<?php require 'partials/header.php' ?>												<!--Llama a el encabezado "header.php"-->

<!--Imagen de fondo / funcion de recuadro azul-->
    <style type="text/css">																	
    body {
      background-image: url("images/fondo/Local.jpg");
      background-size: 100%;
    }
    #recuadro1 {
      height: 200px;
      width: 490px;
      background-color: #00008B;
      margin: 0px auto;
    }
    </style>

    <h1>INDUMOTORA 0NE</h1><br><br>															<!--Texto en h1-->
    <div id='recuadro1'>																	<!--Invoca a recuadro azul-->
    <br><br>
    Felicidades! Su arriendo se ha realizado con exito.
    <br><br>
		<?php
		$tarifa = $_POST['tarifa'];															//Asigna mediante metodo POST a $tarifa como el valor contenido en el input 'tarifa' de catalogo.php.
		$retiro = $_POST['retiro'];															//Asigna mediante metodo POST a $retiro como el valor contenido en el input 'retiro' de catalogo.php.
		$devolucion = $_POST['devolucion'];													//Asigna mediante metodo POST a $devolucion como el valor contenido en el input 'devolucion' de catalogo.php.
		$nomAuto = $_POST['nombreAuto'];													//Asigna mediante metodo POST a $nomAuto como el valor contenido en el input 'nombreAuto' de catalogo.php.
		echo "Has arrendado un/a "."$nomAuto"." desde el "."$retiro"." hasta ". "$devolucion, "." con un cargo de $"."$tarifa"." por día.";			//Muestra en pantalla un texto que contiene el nombre del auto, fecha de retiro, devolución y tarifa diaria del ultimo auto seleccionado en catalogo.php
		?>
		<br><br>
    Nos contactaremos con usted a la brevedad.
    </div>
    <br><br><br><br>
    <a href="catalogo.php"><h3>Volver al catálogo</a>										<!--Texto "Volver al catalogo" con enlace a "catalogo.php"-->
    <br><br>
    <a href="index.php">Volver a inicio</a></h3>											<!--Texto "Volver a inicio" con enlace a "index.php"-->
