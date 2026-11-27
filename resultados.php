<?php
$totalinksi = 0;
function mostrarLista($titulo, $datos)
{
  global $totalinksi;
    echo "<h3>$titulo</h3>";
    if (!empty($datos)) {
        foreach ($datos as $dato) {
          echo htmlspecialchars($dato) . "<br>";
        }
        $total = count($datos);
        echo "<strong>Total de $titulo: $total</strong><br><br>";
        $totalinksi += $total;
    } else {
    echo "No seleccionaste nignuno<br>";    echo "<strong>Total de $titulo: 0</strong><br><br>";
    }
}
mostrarLista("Destinos", $_POST['destinos'] ?? []);
mostrarLista("Actividades", $_POST['actividades'] ?? []);
mostrarLista("Servicios", $_POST['servicios'] ?? []);
echo "<h3>Nombre</h3>";
$nombre = trim($_POST['nombre'] ?? '');
if (!empty($nombre)) {
    echo htmlspecialchars($nombre) . "<br>";
} else {
    echo "No ingresaste ningún nombre.<br>";
}
echo "<br><h3>Correo</h3>";
$correo = trim($_POST['correo'] ?? '');
if (!empty($correo)) {
    echo htmlspecialchars($correo) . "<br>";
} else {
    echo "No escribiste coreo<br>";
}
echo "<hr>";
echo "<h2>Total de todo seleccionado $totalinksi</h2>";

?>