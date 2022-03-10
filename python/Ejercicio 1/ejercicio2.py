# Realizar un programa que lea cuatro valores numéricos e informar su suma y
# promedio.

num1 = int(input("Ingrese el numero 1: "))
num2 = int(input("Ingrese el numero 2: "))
num3 = int(input("Ingrese el numero 3: "))
num4 = int(input("Ingrese el numero 4: "))

total = num1 + num2 + num3 + num4
promedio = total/4

print("La suma de todos los numeros es: " + str(total) + " y el promedio es: " + str(promedio))