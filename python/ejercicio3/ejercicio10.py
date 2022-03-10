# Se ingresan tres notas de un alumno, si el promedio es mayor o igual a
# siete mostrar un mensaje "Vas a la universidad”.

nota1 = float(input("Introduce nota: "))
nota2 = float(input("Introduce nota: "))
nota3 = float(input("Introduce nota: "))

if (nota1+nota2+nota3)/3 >= 7:
    print("Vas a la universidad.")
else:
    print("La cagaste broh!")
    