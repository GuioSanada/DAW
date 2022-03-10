# Escribir un programa que solicite al usuario ingresar un número con
# decimales y almacenarlo en una variable. A continuación, el programa debe
# solicitar al usuario que ingrese un número entero y guardarlo en otra variable.
# En una tercera variable se deberá guardar el resultado de la suma de los dos
# números ingresados por el usuario. Por último, se debe mostrar en pantalla el
# Ejercicios Python Jorge Martínez Mostazo 5

num = float(input("Inserte un numero con decimales: "))
numInt = int(input("Inserte un numero sin decimales: "))
resultado = num + numInt

print("El resultado de la suma es: " + str(resultado))