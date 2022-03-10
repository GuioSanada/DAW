# Desarrollar un programa que permita cargar n números enteros y luego nos
# informe cuántos valores fueron pares y cuántos impares.
# Emplear el operador “%” en la condición de la estructura condicional (este
# operador retorna el resto de la división de dos valores.


cuentaPares = 0
cuentaImpares = 0

contador = 1
numeroVeces = int(input("Introduce el numero de veces que se pedira un numero: "))

while contador <= numeroVeces:
    num = int(input("Introduce un numero: "))
    if num%2 == 0:
        cuentaPares += 1
    else:
        cuentaImpares += 1
    
    contador += 1

print("Pares: " + str(cuentaPares))
print("Impares: " + str(cuentaImpares))
