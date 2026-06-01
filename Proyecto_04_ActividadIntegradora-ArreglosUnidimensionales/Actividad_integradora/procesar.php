<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 2. Almacenar los datos en dos arreglos unidimensionales paralelos
    $productos = isset($_POST['productos']) ? $_POST['productos'] : [];
    $precios = isset($_POST['precios']) ? array_map('floatval', $_POST['precios']) : [];

    // Validar que tengamos datos para trabajar
    if (count($productos) >= 5 && count($precios) >= 5) {
        
        // 3. Calcular y mostrar utilizando funciones nativas
        
        // - Precio total usando array_sum()
        $precioTotal = array_sum($precios);
        
        // - Promedio de precios
        $totalElementos = count($precios);
        $promedioPrecios = $precioTotal / $totalElementos;
        
        // - Producto más caro usando max() y array_search()
        $precioMaximo = max($precios);
        $indiceCaro = array_search($precioMaximo, $precios);
        $productoMasCaro = $productos[$indiceCaro];
        
        // - Producto más barato usando min() y array_search()
        $precioMinimo = min($precios);
        $indiceBarato = array_search($precioMinimo, $precios);
        $productoMasBarato = $productos[$indiceBarato];

    } else {
        echo "Por favor, completa todos los campos del formulario.";
        exit;
    }
} else {
    // Redireccionar si se intenta entrar directamente a este script
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados del Análisis</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 30px; background-color: #f4f4f9; color: #333; }
        .container { max-width: 600px; background: white; padding: 20px; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
        h2, h3 { color: #2c3e50; }
        table { width: 100%; border-collapse: collapse; margin-bottom: 25px; }
        table, th, td { border: 1px solid #dbdbdb; }
        th, td { padding: 10px; text-align: left; }
        th { background-color: #f2f2f2; }
        .result-table th { background-color: #34495e; color: white; }
        .back-btn { display: inline-block; margin-top: 15px; padding: 10px 15px; background-color: #3498db; color: white; text-decoration: none; border-radius: 4px; }
        .back-btn:hover { background-color: #2980b9; }
    </style>
</head>
<body>

<div class="container">
    <h2>Análisis de Inventario</h2>
    
    <h3>Productos Capturados</h3>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Nombre del Producto</th>
                <th>Precio</th>
            </tr>
        </thead>
        <tbody>
            <?php for($i = 0; $i < count($productos); $i++): ?>
                <tr>
                    <td><?php echo $i + 1; ?></td>
                    <td><?php echo htmlspecialchars($productos[$i]); ?></td>
                    <td>$<?php echo number_format($precios[$i], 2); ?></td>
                </tr>
            <?php endfor; ?>
        </tbody>
    </table>

    <h3>Métricas Calculadas</h3>
    <table class="result-table">
        <thead>
            <tr>
                <th>Concepto</th>
                <th>Resultado</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><strong>Precio Total (array_sum)</strong></td>
                <td>$<?php echo number_format($precioTotal, 2); ?></td>
            </tr>
            <tr>
                <td><strong>Promedio de Precios</strong></td>
                <td>$<?php echo number_format($promedioPrecios, 2); ?></td>
            </tr>
            <tr>
                <td><strong>Producto más Caro (max)</strong></td>
                <td><?php echo htmlspecialchars($productoMasCaro) . " ($" . number_format($precioMaximo, 2) . ")"; ?></td>
            </tr>
            <tr>
                <td><strong>Producto más Barato (min)</strong></td>
                <td><?php echo htmlspecialchars($productoMasBarato) . " ($" . number_format($precioMinimo, 2) . ")"; ?></td>
            </tr>
        </tbody>
    </table>

    <a href="index.php" class="back-btn">← Volver a capturar</a>
</div>

</body>
</html>