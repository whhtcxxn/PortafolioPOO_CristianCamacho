# Proyecto_05_ActividadIntegradora-Gestión de Bitácoras en Archivos de Texto

### Objetivo del proyecto
Crear una herramienta web funcional para registrar y visualizar actividades de manera persistente en un archivo de texto, utilizando PHP para el manejo del lado del servidor.

### Problema que resuelve
Resuelve la necesidad de automatizar el registro de actividades diarias de un equipo, evitando el uso de papel y la pérdida de información al guardar los datos en un archivo externo persistente, en lugar de depender únicamente de la memoria de ejecución volátil.

### Tecnologías utilizadas
* PHP
* HTML
* Archivos de texto plano (.txt)

### Conceptos aplicados
* **Manejo de Formularios:** Uso de la superglobal `$_POST` para capturar e interactuar con la información ingresada por el usuario.
* **Manejo de Archivos en PHP:** Apertura, escritura y lectura de archivos de texto plano para lograr persistencia de datos local.
* **Arreglos indexados y asociativos:** Estructuración de la información recuperada para su correcta manipulación en memoria.
* **Iteración con estructuras de control:** Uso de ciclos `foreach` para recorrer los registros y renderizarlos de forma dinámica en la interfaz web.

### Instrucciones de uso
1. Asegúrate de tener instalado un servidor local como XAMPP.
2. Copia la carpeta de tu proyecto en el directorio `htdocs` de XAMPP.
3. Inicia los servicios de Apache en el Panel de Control de XAMPP.
4. Abre tu navegador web y accede a `http://127.0.0.1/` o `http://localhost/`.
5. Ingresa a la carpeta del proyecto y abre el archivo `index.php`.

### Reflexión personal
* **¿Qué aprendí?:** Aprendí a conectar interfaces HTML con la lógica de backend en PHP para almacenar y leer información persistente a través de archivos de texto plano, asimilando cómo los arreglos ordenan secuencialmente cada línea de datos recuperada como si fuera una lista organizada.
* **¿Qué fue difícil?:** Me confunde un poco cómo los arreglos guardan los datos, aunque estoy empezando a ver que funcionan como listas organizadas.
* **¿Qué mejoraría?:** Reestructuraría el formato de almacenamiento transformando las líneas planas de texto en arreglos asociativos serializados (como el formato JSON), lo que permitiría clasificar, filtrar y recuperar las tareas de forma mucho más eficiente mediante claves específicas como "nombre", "fecha" o "prioridad".
