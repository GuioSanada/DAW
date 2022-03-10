# Escribir una función que reciba un string y retorne True si es un palíndromo
# (esto es, si se lee igual de izquierda a derecha o de derecha a izquierda),
# False en caso contrario. Utilizar esta función en un programa que permita al
# usuario ingresar palabras hasta que ingrese la palabra “fin” (suponer que
# todas las palabras son en minúsculas o todas en mayúsculas, de forma
# consistente). Al finalizar, mostrar la cantidad de palíndromos ingresados.

def esPalindromo(a):
    a = a.lower() #Cadena a en miniscula
    b = "" #La intencion es recorrer a la inversa el array y crear una nueva cadena para comparar. Inicializo variable para dicha tarea de comparacion
    

    contador = len(a) #medimos la longitud de la cadena

    palindromo = True #flag para ver si es palindromo. Valor a retornar. 

    while(contador>0): #Bucle para recorrer el la cadena inversa
        contador -= 1 #resto antes para a la hora de concatenar la cadena
        b = b + a[contador] #voy concatenando para crear la cadena inversa
    
    contador = len(a)

    for x in range (contador):
        if a[x] != b[x]:
            palindromo = False
    return palindromo
    




#BLOQUE PRINCIPAL
palabra = "nofin"
while(palabra!="fin"):
    palabra = input("Inserte una nueva palabra: ")
    if palabra != "fin":
        if esPalindromo(palabra):
            print("Es palindroma.")
        else:
            print("No es palindroma")
    

