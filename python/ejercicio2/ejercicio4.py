# Escribir un programa que le solicite al usuario ingresar una fecha formada por
# 8 números, donde los primeros dos representan el día, los siguientes dos el
# mes y los últimos cuatro el año (DDMMAAAA). Este dato debe guardarse en
# una variable con tipo int (número entero). Finalmente, mostrar al usuario la
# fecha con el formato DD / MM / AAAA.


dateInt = int(input("Introduzca la fecha como numero entero DDMMAAAA: "))
dateStr = str(dateInt)
day = dateStr[0:2]
month = dateStr[2:4]
year = dateStr[4:8]
print(day+"/"+month+"/"+year)