# . Desarrollar un programa con dos funciones. La primera solicite el ingreso de
# un entero y muestre el cuadrado de dicho valor. La segunda que solicite la
# carga de dos valores y muestre el producto de los mismos. Llamar desde el
# bloque del programa principal a ambas funciones.

def cuadrado():
    num = int(input("Ingrese un entero: "))
    num *= num
    print("El cuadrado es: " + str(num))

def producto():
    num1 = int(input("Introduce un entero: "))
    num2 = int(input("Introduce un segundo entero: "))
    resultado = num1 * num2
    print("El resultado es: " + str(resultado))



#
#
#Bloque principal

cuadrado()
producto()