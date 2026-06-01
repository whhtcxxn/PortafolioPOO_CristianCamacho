# Proyecto_01_ExamenContraReloj

### Objetivo del proyecto
El objetivo de este proyecto es implementar los conceptos fundamentales de la Programación Orientada a Objetos en PHP, como el uso de espacios de nombres (namespaces), la definición de clases, la manipulación de atributos con diferentes modificadores de acceso, la creación de constructores y la instanciación de objetos orientados a sistemas lógicos y de monitoreo.

### Problema que resuelve
Permite modelar, estructurar y gestionar de forma automatizada y ordenada los datos correspondientes a la logística de paquetes (`Paquete`) y al monitoreo de hardware a través de sensores (`Sensor`), controlando el flujo y la privacidad de la información interna de cada componente.

### Tecnologías utilizadas
* PHP
* XAMPP (Servidor Apache)
* Navegador Web

### Conceptos aplicados
* Clases y Objetos
* Atributos y Métodos
* Constructores
* Espacios de nombres (`namespace`)
* Modificadores de acceso (`public` y `private`)
* Encapsulamiento y métodos de acceso (`getters`)

### Capturas de pantalla
* **Código de la clase Paquete:** `<img width="997" height="593" alt="Captura de pantalla 1" src="https://github.com/user-attachments/assets/80fa99e6-b6fd-4bc5-a8aa-a45daa6c909e" />
`
* **Código de la clase Sensor:** `<img width="906" height="607" alt="Captura de pantalla 2" src="https://github.com/user-attachments/assets/bf03319b-7da8-4d13-b13a-e950d08de22e" />
`
* **Código del archivo principal index.php:** `<img width="758" height="538" alt="Captura de pantalla 3" src="https://github.com/user-attachments/assets/2f4cecc1-e319-44ad-9e7d-7282663eb452" />
`
* **Resultado de la ejecución en el navegador:** `<img width="1061" height="85" alt="Captura de pantalla 4" src="https://github.com/user-attachments/assets/08465aae-a851-47c5-b416-4bbd73070b43" />
`

### Instrucciones de ejecución
1. Copiar la carpeta `Proyecto_01_ExamenContraReloj` dentro del directorio `C:\xampp\htdocs\`.
2. Iniciar el módulo **Apache** desde el *XAMPP Control Panel*.
3. Abrir el navegador web e ingresar a la URL: `http://localhost/Proyecto_01_ExamenContraReloj/index.php`

### Reflexión personal
* **¿Qué aprendí?:** Aprendí a estructurar correctamente clases independientes utilizando `namespace` en PHP y a instanciar múltiples objetos pasando parámetros específicos a través del método mágico `__construct`.
* **¿Qué fue difícil?:** Lo más complicado fue asegurar que las rutas y los nombres de las clases coincidieran perfectamente al usar `require_once` junto con los espacios de nombres para evitar errores fatales de ejecución.
* **¿Qué mejoraría?:** Mejoraría la interfaz visual del resultado agregando código HTML y estilos CSS con una tabla estructurada para que la información de los paquetes y sensores no se muestre en una sola línea plana de texto.

