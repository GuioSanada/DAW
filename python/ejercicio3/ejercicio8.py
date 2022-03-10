# Pedir los datos de dos personas: nombre, edad y altura. Mostrar por pantalla
# el nombre de la persona más alta.
name1 = input("Introduzca el nombre del primer usuario: ")
age1 = int(input("Introduzca la edad del primer usuario: "))
altura1 = float(input("Introduzca la altura del primer usuario: "))

name2 = input("Introduzca el nombre del segundo usuario: ")
age2 = int(input("Introduzca la edad del segundo usuario: "))
altura2 = float(input("Introduzca la altura del segundo usuario: "))


if altura1 > altura2:
    print(name1)
if altura2 > altura1:
    print(name2)
if altura1 == altura2:
    print("Tienen la misma altura")