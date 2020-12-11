<?php

session_start();									//Crea una sesión o reanuda la actual basada en un identificador de sesión pasado mediante una petición GET o POST, o pasado mediante una cookie.

session_unset();									//Libera todas las variables de sesión actualmente registradas.

session_destroy();									//Destruye toda la información asociada con la sesión actual. No destruye ninguna de las variables globales asociadas con la sesión, ni destruye la cookie de sesión. Para volver a utilizar las variables de sesión se debe llamar a session_start().

header('Location: /ProyectoTitulo/index.php');		//Vincula con index.php luego de cerrar la sesión.

?>
