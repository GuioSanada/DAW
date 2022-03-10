#  Se ingresan un conjunto de n alturas de personas por teclado. Mostrar la
# altura promedio de las personas


num = int(input("Introduce el numero de personas a medir: "))
x = 1
altura = 0.0

while x <= num:
    altura += float(input("Introduce una altura: "))
    x += 1
altura /= num
print("El promedio es: " + str(altura))