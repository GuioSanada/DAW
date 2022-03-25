import os
import pymongo



###########################################################
###### Funcion para comprobar si la coleccion existe ######
###########################################################


def existCollection(a):
    #conecto con bd
    myclient = pymongo.MongoClient("mongodb://localhost:27017/") 
    mydb = myclient["practicaFinalPyMongo"] #esto es como hacer un use

    a=str(a) # ToString para que no me la lie.
    #Esta linea es para comprobar por consola el listado de colecciones
    # print(a)
    # print(mydb.list_collection_names())
    collist = mydb.list_collection_names() #listado de colecciones

    mydb.close()
    #Recorremos todas las colecciones buscando el objeto que nos pasan por parametro
    if a in collist:
        return True
    else:
        return False
    

################################################################################
###### MODULO PARA COMPROBAR SI EXISTE O NO LA COLECCION INTRODUCIDA POR TECLADO
################################################################################

def createCollection():
    os.system("cls")
    myclient = pymongo.MongoClient("mongodb://localhost:27017/") 
    mydb = myclient["practicaFinalPyMongo"] #esto es como hacer un use

    #RECOGEMOS EL NOMBRE DE LA COLECCION PARA SABER SI EXISTE O NO
    print("Se encuentra en el modulo de busqueda de coleccion.\n")
    collection = input("Introduzca el nombre de la coleccion:")

    if(existCollection(collection)):
        print("La coleccion se encuentra en la base de datos.\n")
    else:
        print("La coleccion no existe. Recuerde que tiene que añadir documentos a una coleccion para que esta sea creada.\n")
    mydb.close()






###################################################################
###### FUNCION PARA INSERTAR DOCUMENTOS EN NUESTRA COLECCION ######
###################################################################
def insert_document(collection, data):
    return collection.insert_one(data).inserted_id


##############################################################
###### MODULO PARA INSERTAR DOCUMENTOS EN UNA COLECCION ######
##############################################################

def insertDocument():
    os.system("cls")
    myclient = pymongo.MongoClient("mongodb://localhost:27017/") 
    mydb = myclient["practicaFinalPyMongo"] #esto es como hacer un use
    mycol = mydb["users"]

    print("Usted se encuentra en el modulo para añadir documentos en la coleccion de series.\n")

    id_ = input("Introduzca el ID del usuario:\n")
    nick = input("Introduzca el nick:\n")
    userPass = input("Introduzca la contraseña:\n")
    name = input("Introduzca el nombre:\n")
    phone = input("Introduzca el numero de telefono:\n")
    roadType = input("Introduzca el tipo de via:\n")
    nameStreet = input("Introduzca el nombre de la via:\n")
    numberBuilding = input("Introduzca el numero de la calle:\n")
    numberHouse = input("Introduzca piso / puerta / numero:\n")
    province = input("Introduzca la provincia:\n")
    accType = input("Introduzca el tipo de cuenta:\n")
    data = {
        "_id": id_,
        "nick": nick,
        "pass": userPass,
        "name": name,
        "phone": phone,
        "address": {
            "roadType": roadType,
            "name": nameStreet,
            "buildingNumber": numberBuilding,
            "houseNumber": numberHouse,
            "province": province
        },
            "accType": accType
    }



    id_ = insert_document(mycol, data)

    print(f"Se ha creado el nuevo documento con ID: {id_}.\n")
    listDocuments()
    mydb.close()









###########################################################################
###### FUNCION QUE LISTA TODOS LOS DOCUMENTOS EN LA COLECCION SERIES ######
###########################################################################

def listDocuments():
    os.system("cls")
    myclient = pymongo.MongoClient("mongodb://localhost:27017/") 
    mydb = myclient["practicaFinalPyMongo"] #esto es como hacer un use
    mycol = mydb["users"]

    print("Usted se encuentra en el modulo de listar documentos de la coleccion Series:\n")
    for x in mycol.find({}, {"_id":1, "nick":1, "name":1}):
        print (x)

    mydb.close()








########################################################
###### FUNCION PARA ENCONTRAR UNO O MAS ELEMENTOS ######
########################################################

def find_document(collection, elements, multiple=False):
# Función que obtiene uno o varios documentos dependiendo
# del valor de multiple

    if multiple:
        results = collection.find(elements)
        return [r for r in results]
    else:
        return collection.find_one(elements)

############################################################
###### FUNCION PARA ENCONTRAR UN DOCUMENTO POR NOMBRE ######
############################################################

def findDocument():
    os.system("cls")
    myclient = pymongo.MongoClient("mongodb://localhost:27017/") 
    mydb = myclient["practicaFinalPyMongo"] #esto es como hacer un use
    mycol = mydb["users"]

    print("Usted se encuentra en el modulo de busqueda de documento en la coleccion Users: \n")
    name = input("Introduzca el nombre de la persona a buscar:\n")
    name = str(name)

    result = find_document(mycol, {'name': name})
    print(result)
    print("")
    mydb.close()







########################################################
###### FUNCION PARA ACTUALIZAR UN SOLO DOCUMENTO #######
########################################################


def update_document(collection, query_elements, new_values):
#Función que actualiza un documento en una colección.
    collection.update_one(query_elements, {'$set': new_values})


########################################################
###### FUNCION PARA MODIFICAR UN DOCUMENTO POR ID ######
########################################################

def updateDocument():
    os.system("cls")
    myclient = pymongo.MongoClient("mongodb://localhost:27017/") 
    mydb = myclient["practicaFinalPyMongo"] #esto es como hacer un use
    mycol = mydb["users"]

    print("Usted se encuentra en el modulo de modificacion de documento en la coleccion users: \n")
    name = input("Introduzca el nuevo nombre:\n")


    update_document(mycol, {'name' :  name})
    listDocuments()
    mydb.close()







###################################################
###### Funcion para borrar UN SOLO documento ######
###################################################

def delete_document(collection, query):
#Función para borrar un único documento de una colección.
    collection.delete_one(query)

###############################################################
###### FUNCION PARA BORRAR DOCUMENTO EN COLECCION SERIES ######
###############################################################

def deleteDocument():
    os.system("cls")
    myclient = pymongo.MongoClient("mongodb://localhost:27017/") 
    mydb = myclient["practicaFinalPyMongo"] #esto es como hacer un use
    mycol = mydb["users"]

    print("Usted se encuentra en el modulo de borrado de documento en la coleccion Series: \n")
    id_ = input("Introduzca el id del usuario a borrar:\n")

    delete_document(mycol, {'_id' : id_})
    listDocuments()




######################################
###### Funcion que muestra menu ######
######################################

def mostrarMenu():
    print("Elija una opción:\n")
    print("1 Comprobar si existe la coleccion. Recuerde que para crear una coleccion en MongoDB tiene que insertar un documento.")
    print("2 Listar todos los documentos de la coleccion Users:")
    print("3 Insertar documentos en una coleccion.")
    print("4 Busqueda de documento por nombre.")
    print("5 Actualizar un documento de la coleccion users.")
    print("6 Borrar un documento de la coleccion users.")

    option = int(input("Elija la opcion (inserte numero):"))

    if(option < 1 or option >6):
        print("Ha insertado un dato erroneo. Las opciones posibles son 1, 2, 3, 4. Compruebelo.")
    if option == 1:
        createCollection()
    if option == 2:
        listDocuments()
    if option == 3:
        insertDocument()
    if option == 4:
        findDocument()
    if option == 5:
        updateDocument()
    if option == 6:
        deleteDocument()
    


