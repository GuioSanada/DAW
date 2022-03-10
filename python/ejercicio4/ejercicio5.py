#  Se cuenta con la siguiente información usando bucles:
# Las edades de 5 estudiantes del turno mañana.
# Las edades de 6 estudiantes del turno tarde.
# Las edades de 11 estudiantes del turno noche.
# Las edades de cada estudiante deben ingresarse por teclado.
# a) Obtener el promedio de las edades de cada turno (tres promedios)
# b) Imprimir dichos promedios (promedio de cada turno)
# c) Mostrar por pantalla un mensaje que indique cual de los tres turnos tiene
# un promedio de edades mayor.

mañanaPromedio = 0
tardePromedio = 0
nochePromedio = 0

for x in range(5):
    mañanaPromedio += int(input("Introduce edad de mañana: "))
else:
    mañanaPromedio /= 5

for x in range(6):
    tardePromedio += int(input("Introduce edad de mañana: "))
else:
    tardePromedio /= 6

for x in range(11):
    nochePromedio += int(input("Introduce edad de mañana: "))
else:
    nochePromedio /= 11

print("Promedio de edades en mañana: " + str(mañanaPromedio))
print("Promedio de edades en tarde: " + str(tardePromedio))
print("Promedio de edades en noche: " + str(nochePromedio))

if mañanaPromedio > tardePromedio and mañanaPromedio >= nochePromedio:
    print("El turno de mañanas tiene un promedio de edades mayor")
if tardePromedio > mañanaPromedio and tardePromedio >= nochePromedio:
    print("El turno de tarde tiene un promedio de edades mayor")
if nochePromedio > mañanaPromedio and nochePromedio > tardePromedio:
    print("El turno de la noche tiene un promedio de edades mayor")
    
