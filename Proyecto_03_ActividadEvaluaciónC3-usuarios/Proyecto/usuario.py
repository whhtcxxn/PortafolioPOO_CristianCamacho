import re

class Usuario:
    def __init__(self, nombre, email):
        self.nombre = nombre
        self.email = self.validar_email(email)

    def validar_email(self, email):
        # Desafío: Validación de email 
        patron = r'^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$'
        if re.match(patron, email):
            return email
        return "Email no válido"

    def mostrar_datos(self):
        print(f"Nombre: {self.nombre} | Email: {self.email}")

    def acceso_sistema(self):
        print(f"Acceso general al sistema para {self.nombre}.")
    
    def saludar(self):
        print(f"Hola, soy {self.nombre}. ¡Bienvenido!")