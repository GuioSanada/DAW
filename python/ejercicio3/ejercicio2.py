# Escribir un programa que solicite al usuario el ingreso de dos números
# diferentes y muestre en pantalla al mayor de los dos.

num1 = int(input("Introduce el primer numero: "))
num2 = int(input("Introduce el segundo numero: "))
print("El mayor numero de los dos introducidos (" +str(num1) +" y " + str(num2) + ") es: ")


if num1 > num2 :
    print(str(num1))
else:
    print(str(num2))