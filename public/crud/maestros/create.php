<?php
ob_start();
include '../../../../analisis2_notas/includes/db.php';
include '../../../../analisis2_notas/public/header.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $especialidad = $_POST['especialidad'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $id_colegio = $_POST['id_colegio'];

    // Insertar los datos
    $sql = "INSERT INTO maestros (nombre, apellido, especialidad, telefono, email, password_hash, id_colegio) 
            VALUES ('$nombre', '$apellido', '$especialidad', '$telefono', '$email', '$password', '$id_colegio')";
    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Consulta para obtener los colegios
$sql_colegios = "SELECT id_colegio, nombre FROM colegio";
$result_colegios = $conn->query($sql_colegios);
?>

<h2>Añadir Maestro</h2>
<form method="POST">
    <label>Nombre:</label><br>
    <input type="text" name="nombre" required><br>
    
    <label>Apellido:</label><br>
    <input type="text" name="apellido" required><br>
    
    <label>Especialidad:</label><br>
    <input type="text" name="especialidad" required><br>
    
    <label>Teléfono:</label><br>
    <input type="text" name="telefono" required><br>
    
    <label>Email:</label><br>
    <input type="email" name="email" required><br>
    
    <label>Contraseña:</label><br>
    <input type="password" name="password" required><br>
    
    <label>Colegio:</label><br>
    <select name="id_colegio" required>
        <option value="">Selecciona un colegio</option>
        <?php while ($colegio = $result_colegios->fetch_assoc()) { ?>
            <option value="<?php echo $colegio['id_colegio']; ?>"><?php echo $colegio['nombre']; ?></option>
        <?php } ?>
    </select><br><br>
    
    <input type="submit" value="Guardar" class="btn btn-success">
    <a href="index.php" class="btn btn-secondary">Cancelar</a>
</form>

<?php include '../../../../analisis2_notas/public/footer.php'; ?>
