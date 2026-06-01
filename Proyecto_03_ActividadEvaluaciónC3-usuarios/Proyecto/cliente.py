from usuario import Usuario

class Cliente(Usuario):
    def __init__(self, nombre, email, puntos):
        super().__init__(nombre, email)
        self.puntos = puntos

    def acceso_sistema(self):
        print(f"Acceso CLIENTE. Puntos acumulados: {self.puntos}.")