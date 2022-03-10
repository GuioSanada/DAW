# Para una entrevista de trabajo, realizan un test de capacitación, y se obtuvo
# la siguiente información: cantidad total de preguntas que se le realizaron y la
# cantidad de preguntas que contestó correctamente. Se pide confeccionar un
# programa que ingrese los dos datos por teclado e informe el nivel del mismo
# según el porcentaje de respuestas correctas que ha obtenido, y sabiendo
# que:
# Nivel máximo: Porcentaje>=90%.
# Nivel medio: Porcentaje>=75% y <90%.
# Nivel regular:Porcentaje>=50% y <75%.
# Fuera de nivel: Porcentaje<50%.

askNum = int(input("Numero de preguntas: "))
rightNum = int(input("Numero de aciertos: "))

accurate = float((rightNum * 100)/askNum)
accurate = round(accurate)

if accurate >= 90:
    print("Nivel maximo.")
if accurate >= 75 and accurate < 90:
    print("Nivel medio")
if accurate >= 50 and accurate < 75:
    print("Nivel regular")
if accurate < 50: 
    print("Fuera de nivel")