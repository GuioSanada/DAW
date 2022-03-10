# Desarrollar una función que reciba un string como parametro y nos muestre la
# cantidad de vocales. Llamarla desde el bloque principal del programa 3 veces
# con string distintos.

def cuentaVocales(a):
    a = a.lower()
    vocales = 0

    for x in a:
        if x == "a" or x == "e" or x == "i" or x == "o" or x == "u":
            vocales +=1
    else:
        print("Vocales: " + str(vocales))


#
#

#BLOQUE PRINCIPAL

cad1 = input("Introduce una cadena: ")
cuentaVocales(cad1)

cad2 = input("Introduce una cadena: ")
cuentaVocales(cad2)

cad3 = input("Introduce una cadena: ")
cuentaVocales(cad3)