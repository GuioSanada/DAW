# Cargar una frase por teclado. Mostrar luego cuántos espacios en blanco se
# ingresaron. Tener en cuenta que un espacio en blanco es igual a
# " ", en cambio una cadena vacía es ""


phrase = input("Introduce una frase: ")

contador = 0
espacios = 0

while contador < len(phrase):
    if phrase[contador] == " ":
        espacios += 1
    contador += 1

print("Numero de espacios en la frase: " + str(espacios))
