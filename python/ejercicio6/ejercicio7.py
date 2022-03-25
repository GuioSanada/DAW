# Confeccionar una función que reciba entre 2 y 5 enteros. La misma nos debe
# retornar la suma de dichos valores. Debe tener tres parámetros por defecto
# con valor 0

def sumar(v1,v2,v3=0,v4=0,v5=0):
    s=v1+v2+v3+v4+v5
    return s


# bloque principal

print("6 + 6")
print(sumar(6,6))
print("1 + 8 + 3")
print(sumar(1,8,3))
print("1 + 1 + 1 + 1 + 1")
print(sumar(1,1,1,1,1))
