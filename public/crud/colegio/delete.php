<?php
include '../../../../analisis2/includes/db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM colegio WHERE id_colegio=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Colegio eliminado correctamente";
    } else {
        echo "Error al eliminar: " . $conn->error;
    }

    // Redirige de nuevo a index.php después de eliminar
    header("Location: index.php");
    exit();
}
?>