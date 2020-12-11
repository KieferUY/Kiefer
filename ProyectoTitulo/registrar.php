<?php
require 'database.php';												//Llama a database.php que sirve para conectar a la base de datos "login_database".

  $message = '';													//$message se asigna como vacío
  $message2 = '';													//$message2 se asigna como vacío
  $message3 = '';													//$message3 se asigna como vacío

  if (!empty($_POST['nombre']) && !empty($_POST['password']) && !empty($_POST['password2']) && !empty($_POST['email']) && !empty($_POST['numero'])) {		//IF - si los campos de nombre, password, password2, email y numero no están vacíos entonces:
    $sql = "INSERT INTO usuarios (nombre, password, email, numero) VALUES (:nombre, :password, :email, :numero)";											//Asigna $sql como query para insertar nombre, password, email y numero en la BD.
    $stmt = $conn->prepare($sql);																															//Asigna $stmt como $conn (conexion a la BD) + $sql (query para agregar datos a BD).
    $stmt->bindParam(':nombre',$_POST['nombre']);																											//Agrega a $stmt :nombre con el valor del 'nombre' escrito previamente (para agregar a BD).
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);																							//Se crea la variable $password con el valor 'password' escrito previamente y lo encripta.
    $stmt->bindParam(':password', $password);																												//Agrega a $stmt :password con el valor $password creado previamente (para agregar a BD).
    $stmt->bindParam(':email',$_POST['email']);																												//Agrega a $stmt :email con el valor 'email' creado previamente (para agregar a BD).
    $stmt->bindParam(':numero',$_POST['numero']);																											//Agrega a $stmt :numero con el valor 'numero' creado previamente (para agregar a BD).


    if ($_POST['password']!=$_POST['password2']){																											//IF - Si 'password' y 'password2' no son idénticos entonces:
      $message2 = 'Las contraseñas no coinciden';																											//Asigna a la variable $message2 como "Las contraseñas no coinciden".
    }  elseif ($stmt->execute()) {																															//ELSEIF (En caso contrario) - ejecuta $stmt el cual ingresa toda la información guardada previamente a la BD.
      $message = 'Usuario creado satisfactoriamente!';																										//Asigna a la variable $message como "Usuario creado satisfactoriamente!".
    } else {																																				//ELSE (si no):
      $message = 'Ha ocurrido un error creando su cuenta, usuario o correo ya existen.';																	//Asigna a la variable $message como "Ha ocurrido un error creando su cuenta, usuario o correo ya existen."
    }

} else {																																					//ELSE (si no se cumple el primer IF):
  $message3 = 'Debe llenar todos los campos.';																												//Asigna a la variable $message3 como "Debe llenar todos los campos.".
}

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">																						<!--Tipo de caracteres utilizados-->

		<title>ACCESO</title>																						<!--Titulo-->

		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">								<!--Estilo de letra Roboto-->
		<link rel="stylesheet" href="assets/css/style.css">															<!--Estilo de letra, asignada en "style.css"-->
	</head>
	<body>

  <?php require 'partials/header.php' ?>																			<!--Llama a el encabezado "header.php"-->
	<?php if(!empty($message)): ?>																					<!--IF - Si la variable $message no se encuentra vacía, entonces:-->
  <p><?= $message ?></p>																							<!--Muestra un parrafo con el mensaje almacenado en la variable $message (Usuario creado satisfactoriamente! o Ha ocurrido un error creando su cuenta, usuario o correo ya existen.)-->
  <?php endif; ?>																									<!--ENDIF-->

  <?php if(!empty($message2)): ?>																					<!--IF - Si la variable $message2 no se encuentra vacía, entonces:-->
  <p><?= $message2 ?></p>																							<!--Muestra un parrafo con el mensaje almacenado en la variable $message2 (Las contraseñas no coinciden)-->
  <?php endif; ?>																									<!--ENDIF-->

  <?php if(!empty($message3)): ?>																					<!--IF - Si la variable $message3 no se encuentra vacía, entonces:-->
  <p><?= $message3 ?></p>																							<!--Muestra un parrafo con el mensaje almacenado en la variable $message3 (Debe llenar todos los campos.)-->
  <?php endif; ?>

<!--Imagen de fondo / funcion de recuadro azul-->
  <style type="text/css">
  body {
    background-image: url("images/fondo/Local.jpg");
    background-size: 100%;
  }
  #recuadro1 {
    height: 660px;
    width: 400px;
    background-color: #00008B;
    margin: 0px auto;
  }
  </style>

  <h1>REGISTRARSE</h1>																										<!--Texto tipo h1 "REGISTRARSE"-->

  <form action="registrar.php" method="post"><div id='recuadro1'><br>														<!--Crea una form para que cuando presionemos el input 'submit' nos lleve a "registrar.php" por metodo POST. También llama al recuadro azul-->
    Nombre de usuario:
    <input type="text" name="nombre" value="" placeholder="Ingrese nombre de usuario" required>								<!--Tipo de input "text"(campo rellenable con texto), nombre "nombre", placeholder(texto escrito en gris)"Ingrese nombre de usuario" y required que le indica a la forma que no puede continuar sin este campo lleno.-->
    Contraseña:
    <input type="password" name="password" value="" placeholder="Ingrese su contraseña" required>							<!--Tipo de input "password"(campo rellenable con texto oculto), nombre "password", placeholder(texto escrito en gris)"Ingrese su contraseña" y required que le indica a la forma que no puede continuar sin este campo lleno.-->
    Repetir contraseña:
    <input type="password" name="password2" value="" placeholder="Repetir contraseña" required>								<!--Tipo de input "password"(campo rellenable con texto oculto), nombre "password2", placeholder(texto escrito en gris)"Repetir contraseña" y required que le indica a la forma que no puede continuar sin este campo lleno.-->
    Correo electrónico:
    <input type="email" name="email" value="" placeholder="Ingrese su email" required>										<!--Tipo de input "email"(campo rellenable con texto en formato de correo), nombre "email", placeholder(texto escrito en gris)"Ingrese su email" y required que le indica a la forma que no puede continuar sin este campo lleno.-->
    Teléfono:
		<input type="number" name="numero" min="1" max="999999999999" placeholder="Ingrese su número telefónico" required>	<!--Tipo de input "number"(campo rellenable con numeros), nombre "numero", con los numeros posibles comprendidos entre 1 y 999999999999, placeholder(texto escrito en gris)"Ingrese su número telefónico" y required que le indica a la forma que no puede continuar sin este campo lleno.-->
		<input type="submit" value="Enviar">																				<!--Tipo de input "submit"() con el valor "Enviar"-->
    </div>
    <h3><a href="login.php">Ingresar</a> - <a href="index.php">Volver a inicio</a><br><br></h3>								<!--Texto "Ingresar" con enlace a "login.php" y Texto "Volver a inicio" con enlace a "index.php"-->
	</body>
</html>
