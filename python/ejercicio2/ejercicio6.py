# Calcular el sueldo mensual de un trabajador. Pedimos por teclado la
# cantidad de horas trabajadas al mes y el valor por hora trabajada. Mostrar
# un mensaje indicando ambos valores

hours = int(input("Cantidad de horas trabajadas: "))
price = float(input("Precio de la hora: "))

print("horas trabajadas: " + str(hours))
print("Precio €/h: " + str(price))
print("Total a percibir: " + str(price * hours))