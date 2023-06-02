<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Datos a insertar en la base de datos.
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Datos de empleado</h1>

  <form action="funciones.php" method="get">
    <p>Escriba los siguientes datos:</p>

    <table>
      <tr>
        <td>
          <label>
            <strong>Nombre:</strong><br>
            <input type="text" name="nombre" size="20" maxlength="20">
          </label>
        </td>
        <td>
          <label>
            <strong>Apellidos:</strong><br>
            <input type="text" name="apellidos" size="20" maxlength="20">
          </label>
        </td>
        <td>
          <label>
            <strong>Codigo de empleado:</strong><br>
            <input type="number" name="cod_emp" size="20" maxlength="20">
          </label>
        </td>
        <td>
          <label>
            <strong>DNI:</strong><br>
            <input type="text" name="dni" size="20" maxlength="20">
          </label>
        </td>
      </tr>
    </table>
    <p>
      <input type="submit" value="Enviar">
      <input type="reset" value="Borrar">
    </p>
  </form>

  <footer>
    <p>Javier Alonso Osma</p>
  </footer>
</body>
</html>
