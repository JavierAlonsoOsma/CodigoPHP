<?php
/**
 *
 * @author Javier Alonso Osma
 */
require_once "config.php";
// MYSQL: FUNCIÓN DE CONEXIÓN CON LA BASE DE DATOS

function conectaDb()
{
    global $cfg;

    try {
        $tmp = new PDO("mysql:host=$cfg[mysqlHost];charset=utf8mb4", $cfg["mysqlUser"], $cfg["mysqlPassword"]);
        $tmp->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);
        $tmp->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true);
        return $tmp;
    } catch (PDOException $e) {
        print "    <p class=\"aviso\">Error: No puede conectarse con la base de datos. {$e->getMessage()}</p>\n";
        exit;
    }
}

// MYSQL: FUNCIÓN DE BORRADO Y CREACIÓN DE BASE DE DATOS Y TABLAS

function borraTodoyCrea()
{
    global $pdo, $cfg;

    $consulta = "DROP DATABASE IF EXISTS $cfg[mysqlDatabase]";

    if (!$pdo->query($consulta)) {
        print "    <p class=\"aviso\">Error al borrar la base de datos. SQLSTATE[{$pdo->errorCode()}]: {$pdo->errorInfo()[2]}</p>\n";
    } else {
        print "    <p>Base de datos borrada correctamente (si existía).</p>\n";
    }
    print "\n";

    $consulta = "CREATE DATABASE $cfg[mysqlDatabase]
    CHARACTER SET utf8mb4
    COLLATE utf8mb4_unicode_ci";

    if (!$pdo->query($consulta)) {
        print "    <p class=\"aviso\">Error al crear la base de datos. SQLSTATE[{$pdo->errorCode()}]: {$pdo->errorInfo()[2]}</p>\n";
    } else {
        print "    <p>Base de datos creada correctamente.</p>\n";
        print "\n";
    }

    $consulta = "CREATE TABLE $cfg[tablaEmpleados]  (
        Cod_emp INTEGER UNSIGNED AUTO_INCREMENT,
        nombre VARCHAR($cfg[tablaEmpleadosTamNombre]),
        apellidos VARCHAR($cfg[tablaEmpleadosTamApellidos]),
        dni VARCHAR($cfg[tablaEmpleadosTamDNI]),
        PRIMARY KEY(Cod_emp)
        )";

    if (!$pdo->query($consulta)) {
        print "    <p class=\"aviso\">Error al crear la tabla. SQLSTATE[{$pdo->errorCode()}]: {$pdo->errorInfo()[2]}</p>\n";
    } else {
        print "    <p>Tabla creada correctamente.</p>\n";
    }
}

// FUNCIÓN DE RECOGIDA DE DATOS
function recoge($a)
{
  if(isset($_REQUEST[$a]))
  {
    if(!is_array($_REQUEST[$a]))
    {
      $b = trim(htmlspecialchars($_REQUEST[$a]));
      return $b;
    }
  }
  
}

$nombre = recoge("nombre");
$apellidos = recoge("apellidos");
$cod_emp = recoge("cod_emp");
$dni = recoge("dni");


// FUNCIÓN DE INSERCIÓN DE REGISTRO

function insertaRegistro($cod_emp, $nombre, $apellidos, $dni)
{
    global $pdo, $cfg;

    $consulta = "INSERT INTO $cfg[tablaEmpleados]
                 (cod_emp, nombre, apellidos, dni)
                 VALUES (cod_emp, nombre, apellidos, dni)";
    $resultado = $pdo->prepare($consulta);
    if (!$resultado) {
        print "    <p class=\"aviso\">Error al preparar la consulta. SQLSTATE[{$pdo->errorCode()}]: {$pdo->errorInfo()[2]}</p>\n";
    } elseif (!$resultado->execute(["cod_emp" => $cod_emp, "nombre" => $nombre, "apellidos" => $apellidos, "dni" => $dni])) {
        print "    <p class=\"aviso\">Error al ejecutar la consulta. SQLSTATE[{$pdo->errorCode()}]: {$pdo->errorInfo()[2]}</p>\n";
    } else {
        print "    <p>Registro creado correctamente.</p>\n";
        print "\n";
    } 
}


// FUNCIÓN DE SELECCIÓN DE TODOS LOS REGISTROS

function muestraRegistros()
{
    global $pdo, $cfg;

    $consulta = "SELECT * FROM $cfg[tablaEmpleados]";

    $resultado = $pdo->query($consulta);
    if (!$resultado) {
        print "    <p class=\"aviso\">Error en la consulta. SQLSTATE[{$pdo->errorCode()}]: {$pdo->errorInfo()[2]}</p>\n";
    } else {
        print "    <p><strong>Registro(s) obtenido(s):</strong></p>\n";
        print "    <ul>\n";
        foreach ($resultado as $registro) {
            print "      <li>$registro[cod_emp] - $registro[nombre] - $registro[apellidos] - $registro[dni]</li>\n";
        }
        print "    </ul>\n";
        print "\n";
    }
}

?>