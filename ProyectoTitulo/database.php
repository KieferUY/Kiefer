<?php									//Valores de logueo
  $server = 'localhost';
  $username = 'root';
  $password = '';
  $database = 'login_database';

try {
  $conn = new PDO("mysql:host=$server;dbname=$database;",$username,$password);   //Asigna $conn como un nuevo PDO (Representa una conexión entre PHP y un servidor de bases de datos) y le asigna los valores de logueo asignados arriba.
} catch (PDOException $e) {
  die('Conexion fallida: '.$e->getMessage());
}
//Try para realizar la siguiente accion:
//catch (PDOException $e) = asigna a $e como el error por el cual no se ha conectado.
//die('Conexion fallida: '.$e->getMessage()); = Si falla la conexión saldrá el mensaje "Conexion fallida: + el error contenido en $e".
?>
