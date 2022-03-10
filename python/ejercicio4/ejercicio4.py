# Se realiza la carga de 10 valores enteros por teclado. Se desea conocer:
# a) La cantidad de valores ingresados negativos.
# b) La cantidad de valores ingresados positivos.
# c) La cantidad de múltiplos de 15.
# d) El valor acumulado de los números ingresados que son pares.

cantidadNegativos = 0
cantidadPositivos = 0
cantidadMultiplos = 0
valorTodosPares = 0

for x in range(11):
    if x < 0:
        cantidadNegativos += 1
    if x > 0:
        cantidadPositivos += 1
    if x % 15 == 0:
        cantidadMultiplos += 1
    if x % 2 == 0:
        valorTodosPares += x
    