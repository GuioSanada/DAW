# Escribir un programa para solicitar al usuario tres números y mostrar en
# pantalla al menor de los tres.

num1 = int(input("Introduce el numero 1: "))
num2 = int(input("Introduce el numero 2: "))
num3 = int(input("Introduce el numero 3: "))

if num1 < num2 and num1 <= num3:
    print("El menor de los numeros es: " + str(num1))
if num2< num1 and num2 <= num3:
    print("El menor de los numeros es: " + str(num2))
if num3 < num1 and num3 < num2:
    print("El menor de los numeros es: " + str(num3))
if num1 == num2 and num1 == num3:
    print("Los numeros son iguales")