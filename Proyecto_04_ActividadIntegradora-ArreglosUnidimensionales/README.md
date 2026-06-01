# Proyecto_04_ActividadIntegradora-Arreglos

### Objetivo del proyecto
Desarrollar una aplicación web básica para el registro y procesamiento estadístico de una lista de productos, calculando totales, promedios y valores extremos (máximos y mínimos).

### Problema que resuelve
Resuelve la necesidad de automatizar el cálculo de métricas financieras básicas sobre un lote de productos ingresados por un usuario, evitando errores manuales al determinar qué artículo tiene el precio más alto o más bajo.

### Technologies utilizadas
* PHP
* HTML
* CSS

### Conceptos aplicados
* Expresiones Aritméticas
* Arreglos en PHP
* Constructor `array()`
* Arreglos asociativos e indexados
* La función `print_r()`

### Instrucciones de ejecución
1. Coloca los archivos `index.php`, `procesar.php` y `resultados.php` dentro de la carpeta `htdocs` de tu servidor local (XAMPP).
2. Inicia los servicios de Apache en el panel de control de XAMPP.
3. Abre tu navegador y accede a `http://127.0.0.1/`.
4. Completa el formulario con los datos de los 5 productos y presiona "Procesar" para ver los resultados.

### Reflexión personal
* **¿Qué aprendí?:** Aprendí a manipular e iterar arreglos indexados y asociativos en PHP para estructurar datos complejos, además de implementar funciones nativas que facilitan la obtención de métricas estadísticas de forma automatizada.
* **¿Qué fue difícil?:** La parte más compleja fue la lógica de redirección mediante el formulario oculto en `procesar.php` para mantener la integridad de los datos hacia la vista final.
* **¿Qué mejoraría?:** Optimizaría la estructura implementando colecciones de objetos en lugar de arreglos multidimensionales puros, permitiendo una mayor modularidad, legibilidad y movilidad en el flujo del código.
