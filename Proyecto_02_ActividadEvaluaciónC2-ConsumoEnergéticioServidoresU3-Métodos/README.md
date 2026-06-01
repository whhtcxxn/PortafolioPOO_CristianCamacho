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

#### Funciones de Energía e Integrador Numérico
* **Código de las Funciones de Energía:** ![IntNum3](https://github.com/user-attachments/assets/fe04146d-0987-4075-a184-0cc931249747)

* **Código del Integrador Numérico (Parte 1):** ![IntNum1](https://github.com/user-attachments/assets/0ecac347-7aa9-4469-918d-91ac8dade8dd)

* **Código del Integrador Numérico (Parte 2):** ![IntNum2](https://github.com/user-attachments/assets/7164e02f-ed6c-43d2-b092-2ac5c9a68db1)

####  Archivo de Interfaz (index.php)
* **Configuración Inicial e Importaciones:** ![IndexCAP](https://github.com/user-attachments/assets/0242039e-48d4-4abb-b7e6-f22ca8ebdf67)

* **Estructura HTML del Formulario:** ![Index1 2](https://github.com/user-attachments/assets/7dfc737b-0171-44ff-b85a-4cc18c6e4f20)

* **Procesamiento de Datos y Renderizado de Tabla:** ![Index1 3](https://github.com/user-attachments/assets/cedf8f32-e32b-426f-89a2-b810d3829803)

* **Cierre del Documento Web:** ![Index1 4](https://github.com/user-attachments/assets/43129112-56f2-45d4-92e0-23c1c4a210ac)

####  Estilos Visuales (style.css)
* **Estilos CSS (Parte 1):** ![css_cap1](https://github.com/user-attachments/assets/f6b25c0e-598c-45b4-8252-c825a1c8db8e)

* **Estilos CSS (Parte 2):** ![css_cap2](https://github.com/user-attachments/assets/5cb39ecd-d756-448a-af5e-135560f4c31f)

####  Ejecución del Sistema
* **Resultado del cálculo en el Monitor de Energía:** ![Cap_Ejecucion](https://github.com/user-attachments/assets/d10275de-0732-405f-8dbc-d76c9082f657)

---

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
