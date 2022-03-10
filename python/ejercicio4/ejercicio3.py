# Escribir un programa que, dada una frase por el usuario, muestre la cantidad
# total de vocales (tanto mayúsculas como minúsculas) que contiene.

phrase = input("Introduce una frase: ")
vocalCounts = 0

phrase = phrase.lower()

for x in phrase:
    if x == "a" or x == "e" or x == "i" or x == "o" or x == "u":
        vocalCounts += 1
        
print("La cantidad de vocales son: " + str(vocalCounts))