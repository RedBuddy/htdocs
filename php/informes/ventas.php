<?php
session_start();

if (!isset($_SESSION['username'])) {
  header("Location: ../../index.php");
}

if ($_SESSION['username'] != 'admin') {
  header("Location: ../productos.php");
}

?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Página de Gestión de Productos</title>
  <!-- Estilos -->
  <link rel="stylesheet" href="../../css/normalize.css" />
  <link rel="stylesheet" href="../../css/informes/ventas.css" />
  <!-- Fuentes -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Island+Moments&display=swap" rel="stylesheet" />
</head>

<body>
  <header class="header">
    <a class="header-logo" href="../productos.php">
      <img src="../../img/cafe.webp" alt="cafe logo" />
      <h1>Café del bosque</h1>
    </a>
    <div class="header-links">
      <a class="link" href="../productos.php">Inicio</a>
      <a class="link" href="../gestion_productos/gestion.php">Gestión de productos</a>
      <a class="link" href="../gestion_usuarios/gestion_usuarios.php">Gestión de usuarios</a>
      <a class="link" href="../gestion_usuarios/ventas_usuarios.php">Ventas por usuario</a>
      <a class="link" href="../mensajes_contacto/notificaciones.php">Notificaciones</a>
      <a class="link seleccionado" href="ventas.php">Informes</a>
    </div>
  </header>
  <div class="banner">
    <div class="subtitulo">
      <h2>Ventas</h2>
    </div>
  </div>

  <!-- Botones de gestión -->
  <div class="gestion-buttons">
    <button class="link-gestion" onclick="window.location.href='ventasCantidad.php'">
      Productos vendidos por cantidad
    </button>
    <button class="link-gestion" onclick="window.location.href='productosIngresos.php'">
      Productos que generan mas ingresos
    </button>
    <button class="link-gestion" onclick="window.location.href='clientesCompras.php'">
      Clientes que compran mas productos
    </button>
    <button class="link-gestion" onclick="window.location.href='clientesIngresos.php'">
      Clientes que generan mas ingresos
    </button>
    <button class="link-gestion" onclick="window.location.href='ventasFecha.php'">
      Ventas por día, semana, mes, rango de fecha
    </button>
  </div>

  <script src="../js/configuracion.js"></script>
  <script src="../js/productos.js"></script>
</body>

</html>