from admin import Admin
from cliente import Cliente
from invitado import Invitado

def mostrar_menu():
    print("\n--- MENÚ DEL SISTEMA ---")
    print("1. Ver lista de usuarios (Polimorfismo)")
    print("2. Salir")
    return input("Selecciona una opción: ")

def ejecutar():
    # Requerimiento: Crear al menos 1 admin, 1 cliente y 1 invitado 
    usuarios = [
        Admin("Valeria Herrera Soto", "valeria.h@uadec.edu.mx", 1),
        Cliente("Cristian Enrique Camacho Moreno", "cristian.c@gmail.com", 250),
        Invitado("Visitante Web", "invitado@temp.com")
    ]

    while True:
        opcion = mostrar_menu()

        if opcion == "1":
            print("\n--- EJECUTANDO POLIMORFISMO ---")
            # Recorriendo la lista para demostrar polimorfismo 
            for u in usuarios:
                u.mostrar_datos()
                u.saludar()
                u.acceso_sistema()
                print("-" * 30)
        elif opcion == "2":
            print("Cerrando sistema...")
            break
        else:
            print("Opción inválida, intenta de nuevo.")

if __name__ == "__main__":
    ejecutar()