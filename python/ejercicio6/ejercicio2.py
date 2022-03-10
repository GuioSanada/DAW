# Escribir una función llamada esPar que reciba como parámetro un número y
# retorne True si el número es par ó False si es impar. Utilizar esta función en
# un programa que solicite al usuario el ingreso de 10 números y que luego
# muestre, por separado, la suma de todos los pares y la suma de todos los
# impares.


def esPar(a):
    if a % 2 == 0:
        return True
    return False




#
#
#
# BLOQUE PRINCIPAL

cuentaPar = 0
cuentaImpar = 0

for x in range (10):
    num = int(input("Introduce un numero: "))
    if esPar(num):
        cuentaPar += num
    else:
        cuentaImpar += num
else:
    print("Total suma pares: " + str(cuentaPar))
    print("Total suma impares: " + str(cuentaImpar))
