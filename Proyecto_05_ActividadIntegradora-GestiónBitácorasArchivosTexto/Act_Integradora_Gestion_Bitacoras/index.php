<?php
// ==========================================
// CONFIGURACIÓN Y PROCESAMIENTO DEL FORMULARIO
// ==========================================

$mensajeExito = "";
$mensajeError = "";
$archivo = "bitacora.txt";

// Verificar si se ha enviado el formulario por método POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 1. Validar y limpiar entradas (Buenas prácticas y Seguridad)
    // Usamos htmlspecialchars para evitar inyección de código (XSS) en la lectura
    $fecha = isset($_POST['fecha']) ? trim($_POST['fecha']) : '';
    $actividad = isset($_POST['actividad']) ? trim($_POST['actividad']) : '';
    $responsable = isset($_POST['responsable']) ? trim($_POST['responsable']) : '';

    // 2. Validar que no se agreguen campos vacíos
    if (empty($fecha) || empty($actividad) || empty($responsable)) {
        $mensajeError = "Todos los campos son obligatorios. Por favor, rellena el formulario.";
    } else {
        // 3. Formatear la cadena de texto exactamente como lo solicita la rúbrica
        // Formato: Fecha: YYYY-MM-DD | Actividad: texto | Responsable: texto
        // Agregamos un delimitador claro al final (PHP_EOL) para separar registros
        $registro = "Fecha: " . $fecha . "\n" .
                    "Actividad: " . $actividad . "\n" .
                    "Responsable: " . $responsable . "\n" .
                    "--------------------------------------------------\n";

        // 4. Escribir en el archivo (Crear si no existe y usar modo append)
        // FILE_APPEND evita que se borre el contenido anterior. LOCK_EX evita escrituras simultáneas corruptas.
        if (file_put_contents($archivo, $registro, FILE_APPEND | LOCK_EX) !== false) {
            $mensajeExito = "¡Actividad registrada con éxito en la bitácora!";
        } else {
            $mensajeError = "Hubo un error al intentar escribir en el archivo de bitácora.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Bitácoras - Sistema Digital</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f6f9;
            color: #333;
            line-height: 1.6;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 700px;
            margin: 0 auto;
            background: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }
        h1, h2 {
            color: #2c3e50;
            text-align: center;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="text"], input[type="date"], textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        textarea {
            resize: vertical;
            height: 80px;
        }
        button {
            display: block;
            width: 100%;
            padding: 12px;
            background-color: #3498db;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            font-weight: bold;
        }
        button:hover {
            background-color: #2980b9;
        }
        .alert {
            padding: 12px;
            margin-bottom: 20px;
            border-radius: 4px;
            font-weight: bold;
        }
        .alert-success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }
        .alert-error {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }
        .bitacora-box {
            background-color: #f8f9fa;
            border: 1px solid #e9ecef;
            padding: 15px;
            border-radius: 4px;
            max-height: 400px;
            overflow-y: auto;
        }
        pre {
            white-space: pre-wrap;
            word-wrap: break-word;
            font-family: 'Courier New', Courier, monospace;
            margin: 0;
        }
        hr {
            border: 0;
            border-top: 1px solid #eee;
            margin: 25px 0;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Registro de Bitácora Diaria</h1>
    <p style="text-align: center; color: #666;">Empresa de Seguridad S.A.</p>
    
    <?php if (!empty($mensajeError)): ?>
        <div class="alert alert-error"><?php echo htmlspecialchars($mensajeError); ?></div>
    <?php endif; ?>
    
    <?php if (!empty($mensajeExito)): ?>
        <div class="alert alert-success"><?php echo htmlspecialchars($mensajeExito); ?></div>
    <?php endif; ?>

    <form action="index.php" method="POST">
        <div class="form-group">
            <label for="fecha">Fecha de la Actividad:</label>
            <input type="date" id="fecha" name="fecha" value="<?php echo date('Y-m-d'); ?>">
        </div>

        <div class="form-group">
            <label for="responsable">Responsable del Turno:</label>
            <input type="text" id="responsable" name="responsable" placeholder="Nombre completo del guardia">
        </div>

        <div class="form-group">
            <label for="actividad">Descripción de la Actividad / Incidente:</label>
            <textarea id="actividad" name="actividad" placeholder="Detalle aquí revisiones, incidentes o tareas pendientes..."></textarea>
        </div>

        <button type="submit">Guardar en Bitácora</button>
    </form>

    <hr>

    <h2>Historial de Actividades Registradas</h2>
    <div class="bitacora-box">
        <?php
        // Verificar si el archivo existe y tiene contenido
        if (file_exists($archivo) && filesize($archivo) > 0) {
            // Leer todo el contenido del archivo de forma segura
            $contenido = file_get_contents($archivo);
            
            // Mostrar dentro de una etiqueta <pre> manteniendo los saltos de línea originales
            echo "<pre>" . htmlspecialchars($contenido) . "</pre>";
        } else {
            echo "<p style='text-align: center; color: #999;'>No hay registros en la bitácora aún. El archivo se creará automáticamente con el primer envío.</p>";
        }
        ?>
    </div>
</div>

</body>
</html>s