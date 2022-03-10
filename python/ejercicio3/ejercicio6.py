# Confeccionar un programa que permita cargar un número entero positivo de
# hasta tres cifras y muestre un mensaje indicando si tiene 1, 2, o 3 cifras.
# Mostrar un mensaje de error si el número de cifras es mayor.


num = int(input("introduzca un numero de 3 cifras: "))

if num>999 or num<-999:
    print("El numero tiene que ser de 3 cifras")
else:
    if num<10 and num>-10:
        print("El numero tiene solo 1 cifra")
    if num<100 and num>-100:
        print("El numero tiene 2 cifras")
    if num<1000 and num>-1000:
        print("El numero tiene 3 cifras")