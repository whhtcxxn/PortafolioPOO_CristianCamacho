<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Captura de Productos</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 30px; background-color: #f4f4f9; }
        .form-container { max-width: 500px; background: white; padding: 20px; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
        .product-row { display: flex; gap: 10px; margin-bottom: 12px; }
        .product-row input { padding: 8px; border: 1px solid #ccc; border-radius: 4px; flex: 1; }
        input[type="number"] { max-width: 120px; }
        button { background-color: #4CAF50; color: white; padding: 10px 15px; border: none; border-radius: 4px; cursor: pointer; width: 100%; font-size: 16px; }
        button:hover { background-color: #45a049; }
        h2 { color: #333; }
    </style>
</head>
<body>

<div class="form-container">
    <h2>Registro de Productos</h2>
    <form action="procesar.php" method="POST">
        
        <?php for($i = 1; $i <= 5; $i++): ?>
            <div class="product-row">
                <input type="text" name="productos[]" placeholder="Producto <?php echo $i; ?>" required>
                <input type="number" name="precios[]" placeholder="Precio" step="0.01" min="0" required>
            </div>
        <?php endfor; ?>

        <button type="submit">Procesar Datos</button>
    </form>
</div>

</body>
</html>