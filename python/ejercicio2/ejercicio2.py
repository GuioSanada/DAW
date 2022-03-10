#  Escribir un programa que solicite al usuario ingresar la cantidad de kilómetros
# recorridos por una motocicleta y la cantidad de litros de combustible que
# consumió durante ese recorrido. Mostrar el consumo de combustible por
# kilómetro.


km = float(input("Ingrese la cantidad de KM recorridos: "))
combustible = float(input("Inserte la cantidad de litros de combustible consumidos: "))

print("El consumo es: " + str(combustible/km) + " L/Km")