#  Confeccionar una función que reciba una serie de edades y me retorne la
# cantidad que son mayores o iguales a 18 (como mínimo se envía una edad
# por parámetro a la función)

def cuentaMayores(edad1,*edades):
    cant=0
    if edad1>=18:
        cant=cant+1
    for x in range(len(edades)):
        if edades[x]>=18:
            cant=cant+1
    return cant


# bloque principal

print("La cantidad de personas mayores a 18 son:", cuentaMayores(23,6,8,19,24))