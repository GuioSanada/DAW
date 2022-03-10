# Escribir un programa que solicite al usuario una letra y, si es una vocal,
# muestre el mensaje “Es vocal”. Verificar si el usuario ingresó un string de más
# de un carácter y, en ese caso, informarle que no se puede procesar el dato.

letter = input("Introduzca un solo caracter: ")

if(len(letter)>1):
    print("Reinicie el programa, solo se admite 1 caracter.")
else:
    letter = letter.lower()
    if(letter=="a" or letter=="e" or letter=="i" or letter=="u" or letter=="u"):
        print("Es vocal")
    else:
        print("No es vocal")