# Escribir un programa que solicite ingresar un nombre de usuario y una
# contraseña. Si el nombre es “Alumno” y la contraseña es “Cenec”, mostrar en
# pantalla “Usuario y contraseña correctos. Puede entrar al Campus online”. Si
# el nombre o la contraseña no coinciden, mostrar “Acceso denegado”

nombre =input("Inserte un nombre: ")
userPass = input("Inserte una contraseña: ")

if nombre=="Alumno" and userPass=="Cenec":
    print("Usuario y contraseña correctos. Puede entrar al Campus online")
else:
    print("Acceso denegado")
    
