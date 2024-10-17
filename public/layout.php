<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/style.css">
    <title>Gestión de Colegios</title>
</head>
<body>
    <header>
        <h1>Gestión de Colegios</h1>
        <nav>
            <ul>
                <li><a href="/public/crud/colegio/index.php">Colegios</a></li>
                <li><a href="/public/crud/estudiantes/index.php">Estudiantes</a></li>
                <!-- Añadir más enlaces según las tablas -->
            </ul>
        </nav>
    </header>

    <main>
        <!-- Aquí va el contenido específico de cada página -->
        <?php echo $content; ?>
    </main>

    <footer>
        <p>&copy; 2024 Sistema de Gestión Escolar</p>
    </footer>
</body>
</html>
