# Proyecto_03_ActividadEvaluaciónC3-usuarios

### Objetivo del proyecto
Implementar un sistema modular en Python utilizando los pilares de la Programación Orientada a Objetos (POO) para gestionar diferentes roles de usuario (Admin, Cliente, Invitado) a partir de una clase base común, aplicando de forma práctica los conceptos de herencia y polimorfismo para la reutilización de atributos y métodos.

### Problema que resuelve
Resuelve la necesidad de centralizar la administración de distintos tipos de usuarios en un mismo sistema, permitiendo que cada tipo tenga comportamientos específicos (polimorfismo) manteniendo una estructura de datos unificada (herencia).

### Tecnologías utilizadas
* Python 3.x

### Conceptos aplicados
* **Clase Base y Herencia:** Uso de la clase `Usuario` como superclase, de la cual heredan `Admin`, `Cliente` e `Invitado`.
* **Polimorfismo:** Implementación del mismo método (ej. `acceso_sistema` y `saludar`) con comportamientos distintos en cada subclase.
* **Sobrescritura de métodos:** Uso de `super()` para extender la funcionalidad de la clase base en las clases hijas.
* **Listas dinámicas:** Gestión de objetos en una lista `usuarios` para realizar operaciones en lote.

### Instrucciones de ejecución
1. Descarga todos los archivos `.py` en una misma carpeta.
2. Abre una terminal o consola de comandos en la ubicación de la carpeta.
3. Ejecuta el archivo principal mediante el comando: `python Main.py`
4. Interactúa con el menú numérico (1-5) para gestionar los usuarios.

### Reflexión personal
* **¿Qué aprendí?:** Aprendí cómo la herencia reduce la duplicación de código al definir atributos comunes en una sola clase (`Usuario`).
* **¿Qué fue difícil?:** Entender cómo aplicar el polimorfismo correctamente para que el mismo método `acceso_sistema` se comportara de forma distinta según el tipo de objeto.
* **¿Qué mejoraría?:** El manejo de la herencia y los polimorfismos.
