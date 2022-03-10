# Escribir un programa que solicite al usuario el ingreso de una temperatura en
# escala Fahrenheit (debe permitir decimales) y le muestre el equivalente en
# grados Celsius. La fórmula de conversión que se usa para este cálculo es:
# Celsius = (5/9) * (Fahrenheit-32)

faremheit = float(input("Inserte los F: "))

celsius = (5/9) * (faremheit-32)
celsius = round(celsius,2)

print("La conversion es: " + str(celsius) + " grados celsius")
