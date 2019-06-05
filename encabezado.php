<!doctype html>
<html lang="es">
<!--
CRUD con SQL Server y PHP
@author parzibyte [parzibyte.me/blog]
@date 2019-06-03

================================
Este archivo define un encabezado que es
incluido y reutilizado por otros archivos
================================


  Plantilla inicial de Bootstrap 4
  @author parzibyte
  Visita: parzibyte.me/blog
-->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Conexión de PHP con SQL Server usando PDO">
    <meta name="author" content="Parzibyte">
    <title>SQL Server y PHP usando PDO | By Parzibyte</title>
    <!-- Cargar el CSS de Boostrap-->
    <link href="./bootstrap.min.css" rel="stylesheet">
    <!-- Cargar estilos propios -->
    <link href="style.css" rel="stylesheet">
</head>

<body>
    <!-- Definición del menú -->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" target="_blank" href="//parzibyte.me/blog">SQL Server + PHP | By Parzibyte</a>
        <div class="collapse navbar-collapse" id="miNavbar">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="./listar.php">Listar (arreglo)</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./listarCursor.php">Listar (cursor)</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./formulario.php">Agregar</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- Termina la definición del menú -->
    <main role="main" class="container">
        