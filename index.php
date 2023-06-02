<?php
/**
 *
 * @author Javier Alonso Osma
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Javier Alonso Osma</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-proyectos.css" title="Color">
</head>

<body>
  <h1></h1>

  <main>
<?php

require_once "funciones.php";

$pdo = conectaDb();

borraTodoyCrea();

insertaRegistro($cod_emp, $nombre, $apellidos, $dni);

muestraRegistros();

?>
  </main>

  <footer>
    <p>Javier Alonso Osma</p>
  </footer>
</body>
</html>
