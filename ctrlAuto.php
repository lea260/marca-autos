<?php

require_once 'Auto.php';  // Asegúrate de que la ruta al archivo de la clase es correcta

// Verificar si el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $marca = $_POST['marca'] ?? '';
    $modelo = $_POST['modelo'] ?? '';
    $fechaCompra = $_POST['fecha_compra'] ?? '';

    // Crear instancia de Auto
    $auto = new Auto($marca, $modelo, $fechaCompra);

    // Insertar en la base de datos
    if ($auto->insertar()) {
        echo "El auto ha sido registrado con éxito.";
    } else {
        echo "Error al registrar el auto.";
    }
} else {
    echo "Método de solicitud no soportado.";
}
