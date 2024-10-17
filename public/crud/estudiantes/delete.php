<?php
include '../../../../analisis2_notas/includes/db.php';

// Obtener el ID del estudiante desde la URL
$id_estudiante = $_GET['id'];

// Verificar si el ID existe
if (isset($id_estudiante)) {
    // Consulta para eliminar el estudiante
    $sql = "DELETE FROM estudiantes WHERE id_estudiante='$id_estudiante'";
    
    if ($conn->query($sql) === TRUE) {
        // Redirigir al index después de eliminar
        header("Location: index.php");
    } else {
        echo "Error al eliminar: " . $conn->error;
    }
} else {
    // Si no se proporciona el ID, redirigir al index
    header("Location: index.php");
}
