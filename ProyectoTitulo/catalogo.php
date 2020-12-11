<?php
function redirect($url) {
    ob_start();
    header('Location: '.$url);
    ob_end_flush();
    die();
	}
  ?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">																	<!--Tipo de caracteres utilizados-->
		<title>Catálogo</title>																	<!--Titulo de Pagina-->
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">			<!--Estilo de letra Roboto-->
		<link rel="stylesheet" href="assets/css/style.css">										<!--Estilo de letra, asignada en "style.css"-->
	</head>
	<body>

		<?php require 'partials/header.php' ?>													<!--Llama a el encabezado "header.php"-->

<!--Imagen de fondo / funcion de recuadro azul 1 y recuadro blanco(que rodea auto elegido)-->
    <style type="text/css">																		
    body {
      background-image: url("images/fondo/Local.jpg");
      background-size: 100%;
    }
    #recuadro1 {
      height: 1030px;
      width: 450px;
      background-color: #00008B;
      margin: 0px auto;
    }
    #recuadro2 {
      height: 304px;
      width: 400px;
      background-color: white;
      margin: 0px auto;
    }
    </style>

<h1>CATÁLOGO</h1>																				<!--Texto en h1-->

<form action="catalogo.php" method="post">														<!--Enviar a catalogo.php por metodo post-->
<br>
  <?php
echo  "<select name='autos' style='width:350px'>";												//Genera un desplegable de nombre interno 'autos' de 350px.
echo  "<option value='empty'></option>";														//Agrega la opción de nombre interno 'empty' con el valor "nulo" al desplegable.
echo  "<option value='citroenc3'>ECONÓMICO - CITROEN C3</option>";								//Agrega la opción de nombre interno 'citroenc3' con el valor "ECONÓMICO - CITROEN C3" al desplegable.
echo  "<option value='peugeot208'>ECONÓMICO - PEUGEOT 208 HDI</option>";						//Agrega la opción de nombre interno 'peugeot208' con el valor "ECONÓMICO - PEUGEOT 208 HDI" al desplegable.
echo  "<option value='peugeot308at'>ECONÓMICO - PEUGEOT 308 DIESEL AT</option>";				//Agrega la opción de nombre interno 'peugeot308at' con el valor "ECONÓMICO - PEUGEOT 308 DIESEL AT" al desplegable.
echo  "<option value='hyundaii20at'>ECONÓMICO - HYUNDAI I20 AT</option>";						//Agrega la opción de nombre interno 'hyundaii20at' con el valor "ECONÓMICO - HYUNDAI I20 AT" al desplegable.
echo  "<option value='hyundaii20'>ECONÓMICO - HYUNDAI I20 MT</option>";							//Agrega la opción de nombre interno 'hyundaii20' con el valor "ECONÓMICO - HYUNDAI I20 MT" al desplegable.
echo  "<option value='peugeot301'>SEDÁN - PEUGEOT 301</option>";								//Agrega la opción de nombre interno 'peugeot301' con el valor "SEDÁN - PEUGEOT 301" al desplegable.
echo  "<option value='nissansentra'>SEDÁN - NISSAN SENTRA CVT</option>";						//Agrega la opción de nombre interno 'nissansentra' con el valor "SEDÁN - NISSAN SENTRA CVT" al desplegable.
echo  "<option value='volvoxc90'>LUJO - VOLVO XC90 D5</option>";								//Agrega la opción de nombre interno 'volvoxc90' con el valor "LUJO - VOLVO XC90 D5" al desplegable.
echo  "<option value='bmw520'>LUJO - BMW 520</option>";											//Agrega la opción de nombre interno 'bmw520' con el valor "LUJO - BMW 520" al desplegable.
echo  "<option value='hyundaicreta'>SUV - HYUNDAI CRETA AT</option>";							//Agrega la opción de nombre interno 'hyundaicreta' con el valor "SUV - HYUNDAI CRETA AT" al desplegable.
echo  "<option value='peugeot3008'>SUV - PEUGEOT 3008 HDI</option>";							//Agrega la opción de nombre interno 'peugeot3008' con el valor "SUV - PEUGEOT 3008 HDI" al desplegable.
echo  "<option value='peugeot5008'>SUV - PEUGEOT 5008 HDI</option>";							//Agrega la opción de nombre interno 'peugeot5008' con el valor "SUV - PEUGEOT 5008 HDI" al desplegable.
echo  "<option value='volkswagentiguan'>SUV - VOLKSWAGEN TIGUAN 4X4 AT</option>";				//Agrega la opción de nombre interno 'volkswagentiguan' con el valor "SUV - VOLKSWAGEN TIGUAN 4X4 AT" al desplegable.
echo  "<option value='hyundaitucson'>SUV - HYUNDAI TUCSON 4X4 DIESEL</option>";					//Agrega la opción de nombre interno 'hyundaitucson' con el valor "SUV - HYUNDAI TUCSON 4X4 DIESEL" al desplegable.
echo  "<option value='hyundaisantafe'>SUV - HYUNDAI SANTA FE</option>";							//Agrega la opción de nombre interno 'hyundaisantafe' con el valor "SUV - HYUNDAI SANTA FE" al desplegable.
echo  "<option value='hyundaih1'>VAN - HYUNDAI H1</option>";									//Agrega la opción de nombre interno 'hyundaih1' con el valor "VAN - HYUNDAI H1" al desplegable.
echo  "<option value='hyundaih19pax'>VAN - HYUNDAI H1 9PAX AT</option>";						//Agrega la opción de nombre interno 'hyundaih19pax' con el valor "VAN - HYUNDAI H1 9PAX AT" al desplegable.
echo  "<option value='kiagc'>VAN - KIA GRAND CARNIVAL AT DS</option>";							//Agrega la opción de nombre interno 'kiagc' con el valor "VAN - KIA GRAND CARNIVAL AT DS" al desplegable.
echo  "<option value='katana'>CAMIONETA - MITSUBISHI NEW KATANA CR 4X2</option>";				//Agrega la opción de nombre interno 'katana' con el valor "CAMIONETA - MITSUBISHI NEW KATANA CR 4X2" al desplegable.
echo  "<option value='mitsubishinewkatana'>CAMIONETA - MITSUBISHI NEW KATANA CRT 4X4</option>"; //Agrega la opción de nombre interno 'mitsubishinewkatana' con el valor "CAMIONETA - MITSUBISHI NEW KATANA CRT 4X4" al desplegable.
echo  "<option value='nissannp300'>CAMIONETA - NISSAN NP300 4X2</option>";						//Agrega la opción de nombre interno 'nissannp300' con el valor "CAMIONETA - NISSAN NP300 4X2" al desplegable.
echo  "<option value='toyotanewhilux'>CAMIONETA - TOYOTA NEW HILUX 2.4 4X2</option>";			//Agrega la opción de nombre interno 'toyotanewhilux' con el valor "CAMIONETA - TOYOTA NEW HILUX 2.4 4X2" al desplegable.
echo  "<option value='toyotanewhilux4x4'>CAMIONETA - TOYOTA NEW HILUX 2.4 4X4</option>";		//Agrega la opción de nombre interno 'toyotanewhilux4x4' con el valor "CAMIONETA - TOYOTA NEW HILUX 2.4 4X4" al desplegable.
echo  "<option value='audia4'>PREMIUM - AUDI A4</option>";										//Agrega la opción de nombre interno 'audia4' con el valor "PREMIUM - AUDI A4" al desplegable.
echo  "</select>";
  ?>
  <br><br>
  <input type="submit" value="VER INFORMACIÓN" name="ver">										<!--Boton tipo submit de nombre interno 'ver' con el valor "VER INFORMACION"-->
</form>
<?php
if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['ver']))								//IF - Se utiliza para verificar si los envíos de formularios se realizaron correctamente, de ser así sucede lo siguiente:
    {
        LISTA();																				//Llamar a Funcion LISTA()
    }
function LISTA(){																				//Funcion LISTA()

  if ($_POST['autos']=="mitsubishinewkatana") {   																						//IF - si el valor input 'autos' es identico a "mitsubishinewkatana", pasa lo siguiente:
    echo "<div id='recuadro1'>";																										//Llama a 'recuadro1' que es el cuadro azul que rodea texto e imagenes.
    echo "<form action='arriendo_2.php' method='post'>";																				//Crea una form para que cuando presionemos el input 'submit' nos lleve a "arriendo_2.php" por metodo POST.
    echo "<br>";																														//Pasa a la linea de abajo.
    echo "<input type='text' name='nombreAuto' value='Mitsubishi New Katana CRT 4x4' readonly='readonly' style='text-align:center'>";	//Crea un input de tipo texto con el nombre interno 'nombreAuto' y con valor="Mitsubishi New Katana CRT 4x4", readonly='readonly' es para que no sea solo lectura y style='text-align:center' para alinear el texto al medio.
    echo "<label = for''>Tarifa Diaria($):</label>";																					//Etiqueta que contiene el texto: "Tarifa Diaria($):"
    echo "<input type='text' name='tarifa' value='68.643' readonly='readonly' style='text-align:center'>";								//Crea un input de tipo texto con el nombre interno 'tarifa' y con valor="68.643", readonly='readonly' es para que no sea solo lectura y style='text-align:center' para alinear el texto al medio.
    echo "Tipo: Camioneta"."<br>";																										//Muestra texto "Tipo: Camioneta", luego pasa a la linea de abajo.
    echo "Transmisión: Mecánica"."<br>";																								//Muestra texto "Transmisión: Mecánica", luego pasa a la linea de abajo.
    echo "Motor: 2500 cc"."<br>";																										//Muestra texto "Motor: 2500 cc", luego pasa a la linea de abajo.
    echo "Combustible: Diesel"."<br>";																									//Muestra texto "Combustible: Diesel", luego pasa a la linea de abajo.
    echo "Asientos: 5"."<br>";																											//Muestra texto "Asientos: 5", luego pasa a la linea de abajo.
    echo "Puertas: 4"."<br>";																											//Muestra texto "Puertas: 4", luego pasa a la linea de abajo.
    echo "<br>";																														//Pasa a la linea de abajo.
    echo "<div id='recuadro2'>";																										//Llama a 'recuadro1' que es el cuadro blanco que rodea la imagen del auto.
    echo "<img src='images/catalogo/mitsubishinewkatana.png' width='400' height='300'>";												//Llama a la imagen del auto alojada en images/catalogo/ y la ajusta a 400x300.
    echo "<br><br>";																													//Pasa 2 lineas hacia abajo.
    echo "Fecha de retiro:";																											//Muestra texto "Fecha de retiro:", luego pasa a la linea de abajo.
    echo "<input type='date' name='retiro' value='' style='text-align:center' required>";												//Crea un input de tipo fecha con el nombre interno 'retiro' y con valor="", style='text-align:center' para alinear el texto al medio y required le indica a la forma que no puede continuar sin este campo lleno.
    echo "Fecha de devolución:";																										//Muestra texto "Fecha de devolución".
    echo "<input type='date' name='devolucion' value='' style='text-align:center' required>";											//Crea un input de tipo fecha con el nombre interno 'devolucion' y con valor="", style='text-align:center' para alinear el texto al medio y required le indica a la forma que no puede continuar sin este campo lleno.
    echo "<br>";																														//Pasa a la linea de abajo.
    echo "<input type='submit' value='CONTINUAR'>";																						//Crea un imput de tipo submit (boton) con el valor "CONTINUAR".
    echo "</div>";																														
    echo "</form>";																														
  }
  if ($_POST['autos']=="toyotanewhilux4x4") {																							//IF - si el valor input 'autos' es identico a "toyotanewhilux4x4", en vez de mostrar datos de "mitsubishinewkatana" muestra los de "toyotanewhilux4x4" proporcionados en las siguientes líneas:
    echo "<div id='recuadro1'>";																										
    echo "<form action='arriendo_2.php' method='post'>";																				
    echo "<br>";
    echo "<input type='text' name='nombreAuto' value='Toyota New Hilux 2.4 4x4' readonly='readonly' style='text-align:center'>";
    echo "<label = for''>Tarifa Diaria($):</label>";
    echo "<input type='text' name='tarifa' value='46.794' readonly='readonly' style='text-align:center'>";
    echo "Tipo: Camioneta"."<br>";
    echo "Transmisión: Mecánica"."<br>";
    echo "Motor: 2400 cc"."<br>";
    echo "Combustible: Diesel"."<br>";
    echo "Asientos: 5"."<br>";
    echo "Puertas: 4"."<br>";
    echo "<br>";
    echo "<div id='recuadro2'>";
    echo "<img src='images/catalogo/toyotanewhilux4x4.png' width='400' height='300'>";
    echo "<br><br>";
    echo "Fecha de retiro:";
    echo "<input type='date' name='retiro' value='' style='text-align:center' required>";
    echo "Fecha de devolución:";
    echo "<input type='date' name='devolucion' value='' style='text-align:center' required>";
    echo "<br>";
    echo "<input type='submit' value='CONTINUAR'>";
    echo "</div>";
    echo "</form>";
  }
  if ($_POST['autos']=="toyotanewhilux") {																								//IF exactamente igual a los anteriores 2, pero con datos de otro tipo de vehículo.
    echo "<div id='recuadro1'>";
    echo "<form action='arriendo_2.php' method='post'>";
    echo "<br>";
    echo "<input type='text' name='nombreAuto' value='Toyota New Hilux 2.4 4x2' readonly='readonly' style='text-align:center'>";
    echo "<label = for''>Tarifa Diaria($):</label>";
    echo "<input type='text' name='tarifa' value='46.794' readonly='readonly' style='text-align:center'>";
    echo "Tipo: Camioneta"."<br>";
    echo "Transmisión: Mecánica"."<br>";
    echo "Motor: 2400 cc"."<br>";
    echo "Combustible: Diesel"."<br>";
    echo "Asientos: 5"."<br>";
    echo "Puertas: 4"."<br>";
    echo "<br>";
    echo "<div id='recuadro2'>";
    echo "<img src='images/catalogo/toyotanewhilux.png' width='400' height='300'>";
    echo "<br><br>";
    echo "Fecha de retiro:";
    echo "<input type='date' name='retiro' value='' style='text-align:center' required>";
    echo "Fecha de devolución:";
    echo "<input type='date' name='devolucion' value='' style='text-align:center' required>";
    echo "<br>";
    echo "<input type='submit' value='CONTINUAR'>";
    echo "</div>";
    echo "</form>";
  }
  if ($_POST['autos']=="nissannp300") {
    echo "<div id='recuadro1'>";
    echo "<form action='arriendo_2.php' method='post'>";
    echo "<br>";
    echo "<input type='text' name='nombreAuto' value='Nissan NP300 4x2' readonly='readonly' style='text-align:center'>";
    echo "<label = for''>Tarifa Diaria($):</label>";
    echo "<input type='text' name='tarifa' value='45.113' readonly='readonly' style='text-align:center'>";
    echo "Tipo: Camioneta"."<br>";
    echo "Transmisión: Mecánica"."<br>";
    echo "Motor: 2000 cc"."<br>";
    echo "Combustible: Diesel"."<br>";
    echo "Asientos: 5"."<br>";
    echo "Puertas: 5"."<br>";
    echo "<br>";
    echo "<div id='recuadro2'>";
    echo "<img src='images/catalogo/nissannp300.png' width='400' height='300'>";
    echo "<br><br>";
    echo "Fecha de retiro:";
    echo "<input type='date' name='retiro' value='' style='text-align:center' required>";
    echo "Fecha de devolución:";
    echo "<input type='date' name='devolucion' value='' style='text-align:center' required>";
    echo "<br>";
    echo "<input type='submit' value='CONTINUAR'>";
    echo "</div>";
    echo "</form>";
  }
  if ($_POST['autos']=="katana") {
    echo "<div id='recuadro1'>";
    echo "<form action='arriendo_2.php' method='post'>";
    echo "<br>";
    echo "<input type='text' name='nombreAuto' value='Mitsubishi New Katana CR 4x2' readonly='readonly' style='text-align:center'>";
    echo "<label = for''>Tarifa Diaria($):</label>";
    echo "<input type='text' name='tarifa' value='45.113' readonly='readonly' style='text-align:center'>";
    echo "Tipo: Camioneta"."<br>";
    echo "Transmisión: Mecánica"."<br>";
    echo "Motor: 2500 cc"."<br>";
    echo "Combustible: Diesel"."<br>";
    echo "Asientos: 5"."<br>";
    echo "Puertas: 4"."<br>";
    echo "<br>";
    echo "<div id='recuadro2'>";
    echo "<img src='images/catalogo/katana.png' width='400' height='300'>";
    echo "<br><br>";
    echo "Fecha de retiro:";
    echo "<input type='date' name='retiro' value='' style='text-align:center' required>";
    echo "Fecha de devolución:";
    echo "<input type='date' name='devolucion' value='' style='text-align:center' required>";
    echo "<br>";
    echo "<input type='submit' value='CONTINUAR'>";
    echo "</div>";
    echo "</form>";
  }
  if ($_POST['autos']=="hyundaih19pax") {
    echo "<div id='recuadro1'>";
    echo "<form action='arriendo_2.php' method='post'>";
    echo "<br>";
    echo "<input type='text' name='nombreAuto' value='Hyundai H1 9pax AT' readonly='readonly' style='text-align:center'>";
    echo "<label = for''>Tarifa Diaria($):</label>";
    echo "<input type='text' name='tarifa' value= '78.727' readonly='readonly' style='text-align:center'>";
    echo "Tipo: Van"."<br>";
    echo "Transmisión: Automática"."<br>";
    echo "Motor: 2500 cc"."<br>";
    echo "Combustible: Diesel"."<br>";
    echo "Asientos: 9"."<br>";
    echo "Puertas: 5"."<br>";
    echo "<br>";
    echo "<div id='recuadro2'>";
    echo "<img src='images/catalogo/hyundaih19pax.png' width='400' height='300'>";
    echo "<br><br>";
    echo "Fecha de retiro:";
    echo "<input type='date' name='retiro' value='' style='text-align:center' required>";
    echo "Fecha de devolución:";
    echo "<input type='date' name='devolucion' value='' style='text-align:center' required>";
    echo "<br>";
    echo "<input type='submit' value='CONTINUAR'>";
    echo "</div>";
    echo "</form>";
}
  if ($_POST['autos']=="kiagc") {
    echo "<div id='recuadro1'>";
    echo "<form action='arriendo_2.php' method='post'>";
    echo "<br>";
    echo "<input type='text' name='nombreAuto' value='Kia Grand Carnival AT DS' readonly='readonly' style='text-align:center'>";
    echo "<label = for''>Tarifa Diaria($):</label>";
    echo "<input type='text' name='tarifa' value= '78.727' readonly='readonly' style='text-align:center'>";
    echo "Tipo: Van"."<br>";
    echo "Transmisión: Automática"."<br>";
    echo "Motor: 2200 cc"."<br>";
    echo "Combustible: Diesel"."<br>";
    echo "Asientos: 8"."<br>";
    echo "Puertas: 5"."<br>";
    echo "<br>";
    echo "<div id='recuadro2'>";
    echo "<img src='images/catalogo/kiagc.png' width='400' height='300'>";
    echo "<br><br>";
    echo "Fecha de retiro:";
    echo "<input type='date' name='retiro' value='' style='text-align:center' required>";
    echo "Fecha de devolución:";
    echo "<input type='date' name='devolucion' value='' style='text-align:center' required>";
    echo "<br>";
    echo "<input type='submit' value='CONTINUAR'>";
    echo "</div>";
    echo "</form>";
}
  if ($_POST['autos']=="hyundaih1") {
    echo "<div id='recuadro1'>";
    echo "<form action='arriendo_2.php' method='post'>";
    echo "<br>";
    echo "<input type='text' name='nombreAuto' value='Hyundai H1' readonly='readonly' style='text-align:center'>";
    echo "<label = for''>Tarifa Diaria($):</label>";
    echo "<input type='text' name='tarifa' value= '75.366' readonly='readonly' style='text-align:center'>";
    echo "Tipo: Van"."<br>";
    echo "Transmisión: Mecánica"."<br>";
    echo "Motor: 2500 cc"."<br>";
    echo "Combustible: Diesel"."<br>";
    echo "Asientos: 10"."<br>";
    echo "Puertas: 5"."<br>";
    echo "<br>";
    echo "<div id='recuadro2'>";
    echo "<img src='images/catalogo/hyundaih1.png' width='400' height='300'>";
    echo "<br><br>";
    echo "Fecha de retiro:";
    echo "<input type='date' name='retiro' value='' style='text-align:center' required>";
    echo "Fecha de devolución:";
    echo "<input type='date' name='devolucion' value='' style='text-align:center' required>";
    echo "<br>";
    echo "<input type='submit' value='CONTINUAR'>";
    echo "</div>";
    echo "</form>";
}
  if ($_POST['autos']=="bmw520") {
    echo "<div id='recuadro1'>";
    echo "<form action='arriendo_2.php' method='post'>";
    echo "<br>";
    echo "<input type='text' name='nombreAuto' value='BMW 520' readonly='readonly' style='text-align:center'>";
    echo "<label = for''>Tarifa Diaria($):</label>";
    echo "<input type='text' name='tarifa' value= '75.366' readonly='readonly' style='text-align:center'>";
    echo "Tipo: Lujo"."<br>";
    echo "Transmisión: Automática"."<br>";
    echo "Motor: 2000 cc"."<br>";
    echo "Combustible: Diesel"."<br>";
    echo "Asientos: 5"."<br>";
    echo "Puertas: 5"."<br>";
    echo "<br>";
    echo "<div id='recuadro2'>";
    echo "<img src='images/catalogo/bmw520.png' width='400' height='300'>";
    echo "<br><br>";
    echo "Fecha de retiro:";
    echo "<input type='date' name='retiro' value='' style='text-align:center' required>";
    echo "Fecha de devolución:";
    echo "<input type='date' name='devolucion' value='' style='text-align:center' required>";
    echo "<br>";
    echo "<input type='submit' value='CONTINUAR'>";
    echo "</div>";
    echo "</form>";
}
  if ($_POST['autos']=="volvoxc90") {
    echo "<div id='recuadro1'>";
    echo "<form action='arriendo_2.php' method='post'>";
    echo "<br>";
    echo "<input type='text' name='nombreAuto' value='Volvo XC90 D5' readonly='readonly' style='text-align:center'>";
    echo "<label = for''>Tarifa Diaria($):</label>";
    echo "<input type='text' name='tarifa' value= '75.366' readonly='readonly' style='text-align:center'>";
    echo "Tipo: Lujo"."<br>";
    echo "Transmisión: Automática"."<br>";
    echo "Motor: 2000 cc"."<br>";
    echo "Combustible: Diesel"."<br>";
    echo "Asientos: 5"."<br>";
    echo "Puertas: 5"."<br>";
    echo "<br>";
    echo "<div id='recuadro2'>";
    echo "<img src='images/catalogo/volvoxc90.png' width='400' height='300'>";
    echo "<br><br>";
    echo "Fecha de retiro:";
    echo "<input type='date' name='retiro' value='' style='text-align:center' required>";
    echo "Fecha de devolución:";
    echo "<input type='date' name='devolucion' value='' style='text-align:center' required>";
    echo "<br>";
    echo "<input type='submit' value='CONTINUAR'>";
    echo "</div>";
    echo "</form>";
}
  if ($_POST['autos']=="peugeot308at") {
    echo "<div id='recuadro1'>";
    echo "<form action='arriendo_2.php' method='post'>";
    echo "<br>";
    echo "<input type='text' name='nombreAuto' value='Peugeot 308 Diesel AT' readonly='readonly' style='text-align:center'>";
    echo "<label = for''>Tarifa Diaria($):</label>";
    echo "<input type='text' name='tarifa' value= '35.029' readonly='readonly' style='text-align:center'>";
    echo "Tipo: Económico"."<br>";
    echo "Transmisión: Mecánica"."<br>";
    echo "Motor: 2000 cc"."<br>";
    echo "Combustible: Diesel"."<br>";
    echo "Asientos: 5"."<br>";
    echo "Puertas: 5"."<br>";
    echo "<br>";
    echo "<div id='recuadro2'>";
    echo "<img src='images/catalogo/peugeot308at.png' width='400' height='300'>";
    echo "<br><br>";
    echo "Fecha de retiro:";
    echo "<input type='date' name='retiro' value='' style='text-align:center' required>";
    echo "Fecha de devolución:";
    echo "<input type='date' name='devolucion' value='' style='text-align:center' required>";
    echo "<br>";
    echo "<input type='submit' value='CONTINUAR'>";
    echo "</div>";
    echo "</form>";
}
  if ($_POST['autos']=="citroenc3") {
    echo "<div id='recuadro1'>";
    echo "<form action='arriendo_2.php' method='post'>";
    echo "<br>";
    echo "<input type='text' name='nombreAuto' value='Citroen C3' readonly='readonly' style='text-align:center'>";
    echo "<label = for''>Tarifa Diaria($):</label>";
    echo "<input type='text' name='tarifa' value= '29.987' readonly='readonly' style='text-align:center'>";
    echo "Tipo: Económico"."<br>";
    echo "Transmisión: Mecánica"."<br>";
    echo "Motor: 1600 cc"."<br>";
    echo "Combustible: Diesel"."<br>";
    echo "Asientos: 5"."<br>";
    echo "Puertas: 5"."<br>";
    echo "<br>";
    echo "<div id='recuadro2'>";
    echo "<img src='images/catalogo/citroenc3.png' width='400' height='300'>";
    echo "<br><br>";
    echo "Fecha de retiro:";
    echo "<input type='date' name='retiro' value='' style='text-align:center' required>";
    echo "Fecha de devolución:";
    echo "<input type='date' name='devolucion' value='' style='text-align:center' required>";
    echo "<br>";
    echo "<input type='submit' value='CONTINUAR'>";
    echo "</div>";
    echo "</form>";
}
  if ($_POST['autos']=="peugeot208") {
    echo "<div id='recuadro1'>";
    echo "<form action='arriendo_2.php' method='post'>";
    echo "<br>";
    echo "<input type='text' name='nombreAuto' value='Peugeot 208 HDI' readonly='readonly' style='text-align:center'>";
    echo "<label = for''>Tarifa Diaria($):</label>";
    echo "<input type='text' name='tarifa' value= '29.987' readonly='readonly' style='text-align:center'>";
    echo "Tipo: Económico"."<br>";
    echo "Transmisión: Mecánica"."<br>";
    echo "Motor: 1400 cc"."<br>";
    echo "Combustible: Diesel"."<br>";
    echo "Asientos: 5"."<br>";
    echo "Puertas: 5"."<br>";
    echo "<br>";
    echo "<div id='recuadro2'>";
    echo "<img src='images/catalogo/peugeot208.png' width='400' height='300'>";
    echo "<br><br>";
    echo "Fecha de retiro:";
    echo "<input type='date' name='retiro' value='' style='text-align:center' required>";
    echo "Fecha de devolución:";
    echo "<input type='date' name='devolucion' value='' style='text-align:center' required>";
    echo "<br>";
    echo "<input type='submit' value='CONTINUAR'>";
    echo "</div>";
    echo "</form>";
}
if ($_POST['autos']=="hyundaii20at") {
  echo "<div id='recuadro1'>";
  echo "<form action='arriendo_2.php' method='post'>";
  echo "<br>";
  echo "<input type='text' name='nombreAuto' value='Hyundai i20 AT' readonly='readonly' style='text-align:center'>";
  echo "<label = for''>Tarifa Diaria($):</label>";
  echo "<input type='text' name='tarifa' value= '29.987' readonly='readonly' style='text-align:center'>";
  echo "Tipo: Económico"."<br>";
  echo "Transmisión: Automática"."<br>";
  echo "Motor: 1300 cc"."<br>";
  echo "Combustible: Gasolina"."<br>";
  echo "Asientos: 5"."<br>";
  echo "Puertas: 5"."<br>";
  echo "<br>";
  echo "<div id='recuadro2'>";
  echo "<img src='images/catalogo/hyundaii20at.png' width='400' height='300'>";
  echo "<br><br>";
  echo "Fecha de retiro:";
  echo "<input type='date' name='retiro' value='' style='text-align:center' required>";
  echo "Fecha de devolución:";
  echo "<input type='date' name='devolucion' value='' style='text-align:center' required>";
  echo "<br>";
  echo "<input type='submit' value='CONTINUAR'>";
  echo "</div>";
  echo "</form>";
}
  if ($_POST['autos']=="hyundaii20") {
    echo "<div id='recuadro1'>";
    echo "<form action='arriendo_2.php' method='post'>";
    echo "<br>";
    echo "<input type='text' name='nombreAuto' value='Hyundai i20 MT' readonly='readonly' style='text-align:center'>";
    echo "<label = for''>Tarifa Diaria($):</label>";
    echo "<input type='text' name='tarifa' value= '26.626' readonly='readonly' style='text-align:center'>";
    echo "Tipo: Económico"."<br>";
    echo "Transmisión: Mecánica"."<br>";
    echo "Motor: 1300 cc"."<br>";
    echo "Combustible: Gasolina"."<br>";
    echo "Asientos: 5"."<br>";
    echo "Puertas: 5"."<br>";
    echo "<br>";
    echo "<div id='recuadro2'>";
    echo "<img src='images/catalogo/hyundaii20.png' width='400' height='300'>";
    echo "<br><br>";
    echo "Fecha de retiro:";
    echo "<input type='date' name='retiro' value='' style='text-align:center' required>";
    echo "Fecha de devolución:";
    echo "<input type='date' name='devolucion' value='' style='text-align:center' required>";
    echo "<br>";
    echo "<input type='submit' value='CONTINUAR'>";
    echo "</div>";
    echo "</form>";
}
if ($_POST['autos']=="nissansentra") {
  echo "<div id='recuadro1'>";
  echo "<form action='arriendo_2.php' method='post'>";
  echo "<br>";
  echo "<input type='text' name='nombreAuto' value='Nissan Sentra CVT' readonly='readonly' style='text-align:center'>";
  echo "<label = for''>Tarifa Diaria($):</label>";
  echo "<input type='text' name='tarifa' value='41.752' readonly='readonly' style='text-align:center'>";
  echo "Tipo: Sedán"."<br>";
  echo "Transmisión: Automática"."<br>";
  echo "Motor: 1800 cc"."<br>";
  echo "Combustible: Gasolina"."<br>";
  echo "Asientos: 5"."<br>";
  echo "Puertas: 4"."<br>";
  echo "<br>";
  echo "<div id='recuadro2'>";
  echo "<img src='images/catalogo/Sentra.png' width='400' height='300'>";
  echo "<br><br>";
  echo "Fecha de retiro:";
  echo "<input type='date' name='retiro' value='' style='text-align:center' required>";
  echo "Fecha de devolución:";
  echo "<input type='date' name='devolucion' value='' style='text-align:center' required>";
  echo "<br>";
  echo "<input type='submit' value='CONTINUAR'>";
  echo "</div>";
  echo "</form>";
}

  if ($_POST['autos']=="nissansentra") {
    echo "<div id='recuadro1'>";
    echo "<form action='arriendo_2.php' method='post'>";
    echo "<br>";
    echo "<input type='text' name='nombreAuto' value='Nissan Sentra CVT' readonly='readonly' style='text-align:center'>";
    echo "<label = for''>Tarifa Diaria($):</label>";
    echo "<input type='text' name='tarifa' value='41.752' readonly='readonly' style='text-align:center'>";
    echo "Tipo: Sedán"."<br>";
    echo "Transmisión: Automática"."<br>";
    echo "Motor: 1800 cc"."<br>";
    echo "Combustible: Gasolina"."<br>";
    echo "Asientos: 5"."<br>";
    echo "Puertas: 4"."<br>";
    echo "<br>";
    echo "<div id='recuadro2'>";
    echo "<img src='images/catalogo/Sentra.png' width='400' height='300'>";
    echo "<br><br>";
    echo "Fecha de retiro:";
    echo "<input type='date' name='retiro' value='' style='text-align:center' required>";
    echo "Fecha de devolución:";
    echo "<input type='date' name='devolucion' value='' style='text-align:center' required>";
    echo "<br>";
    echo "<input type='submit' value='CONTINUAR'>";
    echo "</div>";
    echo "</form>";
}
if ($_POST['autos']=="peugeot301") {
  echo "<div id='recuadro1'>";
  echo "<form action='arriendo_2.php' method='post'>";
  echo "<br>";
  echo "<input type='text' name='nombreAuto' value='Peugeot 301 HDI' readonly='readonly' style='text-align:center'>";
  echo "<label = for''>Tarifa Diaria($):</label>";
  echo "<input type='text' name='tarifa' value='35.029' readonly='readonly' style='text-align:center'>";
  echo "Tipo: Sedán"."<br>";
  echo "Transmisión: Mecánica"."<br>";
  echo "Motor: 1600 cc"."<br>";
  echo "Combustible: Diesel"."<br>";
  echo "Asientos: 5"."<br>";
  echo "Puertas: 5"."<br>";
  echo "<br>";
  echo "<div id='recuadro2'>";
  echo "<img src='images/catalogo/peugeot301.png' width='400' height='300'>";
  echo "<br><br>";
  echo "Fecha de retiro:";
  echo "<input type='date' name='retiro' value='' style='text-align:center' required>";
  echo "Fecha de devolución:";
  echo "<input type='date' name='devolucion' value='' style='text-align:center' required>";
  echo "<br>";
  echo "<input type='submit' value='CONTINUAR'>";
  echo "</div>";
  echo "</form>";
}
if ($_POST['autos']=="hyundaisantafe") {
  echo "<div id='recuadro1'>";
  echo "<form action='arriendo_2.php' method='post'>";
  echo "<br>";
  echo "<input type='text' name='nombreAuto' value='Hyundai Grand Santa Fe' readonly='readonly' style='text-align:center'>";
  echo "<label = for''>Tarifa Diaria($):</label>";
  echo "<input type='text' name='tarifa' value='66.962' readonly='readonly' style='text-align:center'>";
  echo "Tipo: SUV"."<br>";
  echo "Transmisión: Automática"."<br>";
  echo "Motor: 2200 cc"."<br>";
  echo "Combustible: Diesel"."<br>";
  echo "Asientos: 7"."<br>";
  echo "Puertas: 5"."<br>";
  echo "<br>";
  echo "<div id='recuadro2'>";
  echo "<img src='images/catalogo/hyundaisantafe.png' width='400' height='300'>";
  echo "<br><br>";
  echo "Fecha de retiro:";
  echo "<input type='date' name='retiro' value='' style='text-align:center' required>";
  echo "Fecha de devolución:";
  echo "<input type='date' name='devolucion' value='' style='text-align:center' required>";
  echo "<br>";
  echo "<input type='submit' value='CONTINUAR'>";
  echo "</div>";
  echo "</form>";
}
if ($_POST['autos']=="hyundaitucson") {
  echo "<div id='recuadro1'>";
  echo "<form action='arriendo_2.php' method='post'>";
  echo "<br>";
  echo "<input type='text' name='nombreAuto' value='Hyundai Tucson 4x4 Diesel' readonly='readonly' style='text-align:center'>";
  echo "<label = for''>Tarifa Diaria($):</label>";
  echo "<input type='text' name='tarifa' value='56.878' readonly='readonly' style='text-align:center'>";
  echo "Tipo: SUV"."<br>";
  echo "Transmisión: Automática"."<br>";
  echo "Motor: 2000 cc"."<br>";
  echo "Combustible: Diesel"."<br>";
  echo "Asientos: 5"."<br>";
  echo "Puertas: 4"."<br>";
  echo "<br>";
  echo "<div id='recuadro2'>";
  echo "<img src='images/catalogo/hyundaitucson.png' width='400' height='300'>";
  echo "<br><br>";
  echo "Fecha de retiro:";
  echo "<input type='date' name='retiro' value='' style='text-align:center' required>";
  echo "Fecha de devolución:";
  echo "<input type='date' name='devolucion' value='' style='text-align:center' required>";
  echo "<br>";
  echo "<input type='submit' value='CONTINUAR'>";
  echo "</div>";
  echo "</form>";
}
if ($_POST['autos']=="volkswagentiguan") {
  echo "<div id='recuadro1'>";
  echo "<form action='arriendo_2.php' method='post'>";
  echo "<br>";
  echo "<input type='text' name='nombreAuto' value='Volkswagen Tiguan 4x4 AT' readonly='readonly' style='text-align:center'>";
  echo "<label = for''>Tarifa Diaria($):</label>";
  echo "<input type='text' name='tarifa' value='55.197' readonly='readonly' style='text-align:center'>";
  echo "Tipo: SUV"."<br>";
  echo "Transmisión: Automática"."<br>";
  echo "Motor: 2000 cc"."<br>";
  echo "Combustible: Diesel"."<br>";
  echo "Asientos: 5"."<br>";
  echo "Puertas: 5"."<br>";
  echo "<br>";
  echo "<div id='recuadro2'>";
  echo "<img src='images/catalogo/volkswagentiguan.png' width='400' height='300'>";
  echo "<br><br>";
  echo "Fecha de retiro:";
  echo "<input type='date' name='retiro' value='' style='text-align:center' required>";
  echo "Fecha de devolución:";
  echo "<input type='date' name='devolucion' value='' style='text-align:center' required>";
  echo "<br>";
  echo "<input type='submit' value='CONTINUAR'>";
  echo "</div>";
  echo "</form>";
}
if ($_POST['autos']=="peugeot5008") {
  echo "<div id='recuadro1'>";
  echo "<form action='arriendo_2.php' method='post'>";
  echo "<br>";
  echo "<input type='text' name='nombreAuto' value='Peugeot 5008 HDI' readonly='readonly' style='text-align:center'>";
  echo "<label = for''>Tarifa Diaria($):</label>";
  echo "<input type='text' name='tarifa' value='50.155' readonly='readonly' style='text-align:center'>";
  echo "Tipo: SUV"."<br>";
  echo "Transmisión: Automática"."<br>";
  echo "Motor: 2000 cc"."<br>";
  echo "Combustible: Diesel"."<br>";
  echo "Asientos: 5"."<br>";
  echo "Puertas: 5"."<br>";
  echo "<br>";
  echo "<div id='recuadro2'>";
  echo "<img src='images/catalogo/peugeot5008.png' width='400' height='300'>";
  echo "<br><br>";
  echo "Fecha de retiro:";
  echo "<input type='date' name='retiro' value='' style='text-align:center' required>";
  echo "Fecha de devolución:";
  echo "<input type='date' name='devolucion' value='' style='text-align:center' required>";
  echo "<br>";
  echo "<input type='submit' value='CONTINUAR'>";
  echo "</div>";
  echo "</form>";
}
if ($_POST['autos']=="peugeot3008") {
  echo "<div id='recuadro1'>";
  echo "<form action='arriendo_2.php' method='post'>";
  echo "<br>";
  echo "<input type='text' name='nombreAuto' value='Peugeot 3008 HDI' readonly='readonly' style='text-align:center'>";
  echo "<label = for''>Tarifa Diaria($):</label>";
  echo "<input type='text' name='tarifa' value='41.752' readonly='readonly' style='text-align:center'>";
  echo "Tipo: SUV"."<br>";
  echo "Transmisión: Automática"."<br>";
  echo "Motor: 1600 cc"."<br>";
  echo "Combustible: Diesel"."<br>";
  echo "Asientos: 5"."<br>";
  echo "Puertas: 5"."<br>";
  echo "<br>";
  echo "<div id='recuadro2'>";
  echo "<img src='images/catalogo/peugeot3008.png' width='400' height='300'>";
  echo "<br><br>";
  echo "Fecha de retiro:";
  echo "<input type='date' name='retiro' value='' style='text-align:center' required>";
  echo "Fecha de devolución:";
  echo "<input type='date' name='devolucion' value='' style='text-align:center' required>";
  echo "<br>";
  echo "<input type='submit' value='CONTINUAR'>";
  echo "</div>";
  echo "</form>";
}
if ($_POST['autos']=="hyundaicreta") {
  echo "<div id='recuadro1'>";
  echo "<form action='arriendo_2.php' method='post'>";
  echo "<br>";
  echo "<input type='text' name='nombreAuto' value='Hyundai Creta 4x2 AT' readonly='readonly' style='text-align:center'>";
  echo "<label = for''>Tarifa Diaria($):</label>";
  echo "<input type='text' name='tarifa' value='33.349' readonly='readonly' style='text-align:center'>";
  echo "Tipo: SUV"."<br>";
  echo "Transmisión: Automática"."<br>";
  echo "Motor: 1600 cc"."<br>";
  echo "Combustible: Gasolina"."<br>";
  echo "Asientos: 5"."<br>";
  echo "Puertas: 5"."<br>";
  echo "<br>";
  echo "<div id='recuadro2'>";
  echo "<img src='images/catalogo/creta.png' width='400' height='300'>";
  echo "<br><br>";
  echo "Fecha de retiro:";
  echo "<input type='date' name='retiro' value='' style='text-align:center' required>";
  echo "Fecha de devolución:";
  echo "<input type='date' name='devolucion' value='' style='text-align:center' required>";
  echo "<br>";
  echo "<input type='submit' value='CONTINUAR'>";
  echo "</div>";
  echo "</form>";
}
if ($_POST['autos']=="audia4") {
  echo "<div id='recuadro1'>";
  echo "<form action='arriendo_2.php' method='post'>";
  echo "<br>";
  echo "<input type='text' name='nombreAuto' value='Audi A4' readonly='readonly' style='text-align:center'>";
  echo "<label = for''>Tarifa Diaria($):</label>";
  echo "<input type='text' name='tarifa' value='55.197' readonly='readonly' style='text-align:center'>";
  echo "Tipo: Premium"."<br>";
  echo "Transmisión: Automática"."<br>";
  echo "Motor: 1400 cc"."<br>";
  echo "Combustible: Gasolina"."<br>";
  echo "Asientos: 5"."<br>";
  echo "Puertas: 5"."<br>";
  echo "<br>";
  echo "<div id='recuadro2'>";
  echo "<img src='images/catalogo/audia4.png' width='400' height='300'>";
  echo "<br><br>";
  echo "Fecha de retiro:";
  echo "<input type='date' name='retiro' value='' style='text-align:center' required>";
  echo "Fecha de devolución:";
  echo "<input type='date' name='devolucion' value='' style='text-align:center' required>";
  echo "<br>";
  echo "<input type='submit' value='CONTINUAR'>";
  echo "</div>";
  echo "</form>";
}
echo "</div>";
}
?>
<br><br>

<a href="index.php"><h3>Volver a inicio</a></h3>								<!--Texto "Volver a inicio" con enlace a "index.php"-->
