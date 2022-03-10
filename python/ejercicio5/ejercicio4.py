# Ingresar una frase que pueden tener letras tanto en mayúsculas como
# minúsculas. Contar la cantidad de vocales. Crear un segundo string con toda
# la frase en minúsculas para que sea más fácil disponer la condición que
# verifica que es una vocal.

phrase = input("Introduce una frase")
phrase = phrase.lower()

vocales = 0
contador = 0

while contador < len(phrase):
    if phrase[contador] == "a" or phrase[contador] == "e" or phrase[contador] == "i" or phrase[contador] == "o" or phrase[contador] == "u":
        vocales += 1

    contador +=1

print("Vocales: " + str(vocales))
