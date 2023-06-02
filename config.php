<?php
/**
 *
 * @author Javier Alonso Osma
 */

// Configuración para MySQL

$cfg["mysqlHost"]     = "192.168.100.1";               // Nombre de host
$cfg["mysqlUser"]     = "Servidor";                    // Nombre de usuario
$cfg["mysqlPassword"] = "S3rv1d0r";                    // Contraseña de usuario
$cfg["mysqlDatabase"] = "BBDDServidor";                // Nombre de la base de datos

// Configuración de la tabla Empleados

$cfg["tablaEmpleadosTamCod_emp"] = 10;               // Tamaño de la columna Cod_emp
$cfg["tablaEmpleadosTamNombre"] = 20;                   // Tamaño de la columna Nombre 
$cfg["tablaEmpleadosTamApellidos"] = 30;                // Tamaño de la columna Apellidos 
$cfg["tablaEmpleadosTamDNI"] = 10;                      // Tamaño de la columna DNI

// Configuración de la tabla Clientes

$cfg["tablaClientesTamCod_cli"] = 10;               // Tamaño de la columna Cod_cli
$cfg["tablaClientesTamNombre"] = 20;                   // Tamaño de la columna Nombre 
$cfg["tablaClientesTamApellidos"] = 30;                // Tamaño de la columna Apellidos 
$cfg["tablaClientesTamDNI"] = 10;                      // Tamaño de la columna DNI

// Configuración de la tabla Sedes

$cfg["tablaSedesTamCod_sede"] = 10;              // Tamaño de la columna Cod_sede
$cfg["tablaSedesTamNombre"] = 20;                   // Tamaño de la columna Nombre  
$cfg["tablaSedesTamCod_emp"] = 10;               // Tamaño de la columna Cod_emp
$cfg["tablaSedesTamCod_man"] = 10;              // Tamaño de la columna Cod_man

// Configuración de la tabla Manuales

$cfg["tablaServiciosTamCod_man"] = 10;              // Tamaño de la columna Cod_man
$cfg["tablaServiciosTamNombre"] = 30;                   // Tamaño de la columna Nombre 
I$cfg["tablaServiciosTamCod_emp"] = 10;              // Tamaño de la columna Cod_emp
$cfg["tablaServiciosTamCod_cli"] = 10;               // Tamaño de la columna Cod_cli


// Base de datos

$cfg["tablaEmpleados"] = "$cfg[BBDDServidor].empleados";         // Nombre de la tabla Empleados
$cfg["tablaClientes"] = "$cfg[BBDDServidor].clientes";           // Nombre de la tabla Clientes
$cfg["tablaSedes"] = "$cfg[BBDDServidor].sedes";                 // Nombre de la tabla Sedes
$cfg["tablaServicios"] = "$cfg[BBDDServidor].manuales";         // Nombre de la tabla Manuales
?>