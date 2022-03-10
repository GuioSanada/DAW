# De un operario se conoce su sueldo y los años de antigüedad. Se pide
# confeccionar un programa que lea los datos de entrada e informe:
# a) Si el sueldo es inferior a 500 y su antigüedad es igual o superior a 10 años,
# otorgarle un aumento del 20 %, mostrar el sueldo a pagar.
# b)Si el sueldo es inferior a 500 pero su antigüedad es menor a 10 años,
# otorgarle un aumento de 5 %.
# c) Si el sueldo es mayor o igual a 500 mostrar el sueldo en pantalla sin
# cambios. el segundo y a este resultado se lo multiplica por el tercero.

salary = float(input("Introduce el sueldo del operario: "))
seniority = int(input("Introduce los años de antigüedad: "))

if salary<500 and seniority>=10:
    salary = salary + (salary*20/100)
    print("Sueldo a pagar: " +str(salary))
if salary<500 and seniority<10:
    salary = salary + (salary*5/100)
    print("Sueldo a pagar: "+ str(salary))
if salary>=500:
    print("Sueldo a pagar: " + str(salary))

