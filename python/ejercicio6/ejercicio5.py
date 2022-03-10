# Elaborar una función que reciba tres enteros y nos retorne el valor promedio
# de los mismos.

def promedio(a,b,c):
    promedio = (a+b+c)/3
    return promedio

#
#
#
#BLOQUE PRINCIPAL

num1 = int(input("Introduce un numero: "))
num2 = int(input("Introduce un numero: "))
num3 = int(input("Introduce un numero: "))

print(str(promedio(num1,num2,num3)))