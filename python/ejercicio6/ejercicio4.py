# Confeccionar una función que reciba tres enteros y los muestre ordenados de
# menor a mayor. En otra función solicitar la carga de 3 enteros por teclado y
# proceder a llamar a la primer función definida

def orderBy(a,b,c):
    if a < b and b <= c:
        print(str(a) + " " + str(b) + " " + str(c))
    if a < b and c <= b:
        print(str(a) + " " + str(c) + " " + str(b))
    if b < a and a <= c:
        print(str(b) + " " + str(a) + " " + str(c)) 
    if b < a and c <= a:
        print(str(b) + " " + str(c) + " " + str(a))
    if c < a and b <= a:
        print(str(c) + " " + str(b) + " " + str(a))
    if a == b and b == c:
        print(str(a) + " " + str(b) + " " + str(c)) 
    

def pedirNum():
    num1 = int(input("Introduce un numero"))
    num2 = int(input("Introduce un numero"))
    num3 = int(input("Introduce un numero"))

    orderBy(num1,num2,num3)



#
#
#
#BLOQUE PRINCIPAL 

pedirNum()
