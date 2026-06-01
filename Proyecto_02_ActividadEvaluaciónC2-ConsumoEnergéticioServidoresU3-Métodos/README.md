# Proyecto_02_ActividadEvaluaciónC2-ConsumoEnergéticioServidoresU3-Métodos

### Objetivo del proyecto
Desarrollar una herramienta web capaz de calcular el consumo energético (en Joules y convertido a kWh) de un centro de datos mediante métodos de integración numérica, permitiendo evaluar el rendimiento bajo diferentes perfiles de carga.

### Problema que resuelve
El proyecto resuelve la dificultad de estimar el consumo energético acumulado de un servidor a lo largo de un intervalo de tiempo específico, cuando la tasa de potencia no es constante sino que varía según el modo de operación (IDLE, AVERAGE, STRESS).

### Tecnologías utilizadas
* PHP
* HTML
* CSS
* XAMPP (Servidor Apache)
* Programación Orientada a Objetos (POO)

### Conceptos aplicados
* **Integración numérica:** Aplicación de la Regla del Trapecio para calcular el área bajo la curva de la función de potencia P(t), estimando así la energía total consumida.
* **POO en PHP:** Uso de clases (`IntegradorNumerico`), namespaces (`App\Calculo`), manejo de excepciones (`Exception`) y métodos lógicos estructurados.
* **Formularios y superglobales:** Procesamiento y validación de datos de entrada enviados por el usuario mediante el método `$_POST`.

### Capturas de pantalla

* **Código de las Funciones de Energía:** ![Funciones de Energía](IntNum3.png)

* **Código del Integrador Numérico (Parte 1):** ![Integrador Numérico 1](IntNum1.png)

* **Código del Integrador Numérico (Parte 2):** ![Integrador Numérico 2](IntNum2.png)

* **Código del archivo principal index.php:** ![Archivo index.php](IndexCAP.png)

* **Estructura HTML del Formulario y Tabla:** ![Estructura Index](Index1.2.png)

* **Procesamiento de Datos en el Frontend:** ![Procesamiento Frontend](Index1.3.png)

* **Cierre de Estructura Web:** ![Cierre Index](Index1.4.png)

* **Código de los Estilos CSS (Parte 1):** ![Estilos CSS 1](css_cap1.png)

* **Código de los Estilos CSS (Parte 2):** ![Estilos CSS 2](css_cap2.png)

* **Interfaz del Monitor de Energía en Ejecución:** ![Resultado en el Navegador](image_503681.png)

* **Resultados Calculados de Consumo:** ![Cap Ejecucion](Cap_Ejecucion.png)

### Instrucciones de ejecución
1. Copiar la carpeta del proyecto dentro del directorio `htdocs` de XAMPP.
2. Iniciar el módulo **Apache** desde el *XAMPP Control Panel*.
3. Abrir el navegador web e ingresar a la dirección IP local: `http://127.0.0.1/` o `http://localhost/`.
4. Buscar y seleccionar la carpeta correspondiente al proyecto para ejecutar el archivo `index.php`.
5. Ingresar los parámetros requeridos: tiempo inicial, tiempo final, número de subintervalos (precisión) y seleccionar el perfil de consumo deseado.
6. Dar clic en el botón "Calcular" para verificar los resultados reflejados en la tabla comparativa.

### Reflexión personal
* **¿Qué aprendí?:** Aprendí a mapear y aplicar métodos matemáticos como la Regla del Trapecio mediante código PHP puro, además de comprender cómo los namespaces y la división de clases limpian la arquitectura de un software web.
* **¿Qué fue difícil?:** Lo más complejo fue implementar la lógica algorítmica de la integración asegurando que la variable de precisión ($n$) escalara de forma dinámica en los ciclos y que las conversiones matemáticas de unidades a kWh mantuvieran total exactitud.
* **¿Qué mejoraría?:** Añadiría gráficas visuales interactivas (usando librerías de JavaScript como Chart.js) para que el usuario pueda ver la curva de potencia simulada y cómo se distribuyen los subintervalos del trapecio directamente en la pantalla.
