import pymongo
# Creamos el cliente
client = pymongo.MongoClient("mongodb://localhost:27017/")

# Conexión a base de datos
db = client['practicaFinalPyMongo']

# Obtenemos la conexión
series_collection = db["series"]



###### FUNCION PARA INSERTAR DOCUMENTOS EN NUESTRA COLECCION ######
def insert_document(collection, data):
#  Función que inserta un documento (objeto) en una
# colección. Devuelve su id.

    return collection.insert_one(data).inserted_id


# Definimos una función para realizar búsquedas con find
def find_document(collection, elements, multiple=False):
# Función que obtiene uno o varios documentos dependiendo
# del valor de multiple

    if multiple:
        results = collection.find(elements)
        return [r for r in results]
    else:
        return collection.find_one(elements)

#FUNCION PARA ACTUALIZAR UN SOLO DOCUMENTO
def update_document(collection, query_elements, new_values):

#Función que actualiza un documento en una colección.
    collection.update_one(query_elements, {'$set': new_values})

#Funcion para borrar UN SOLO documento
def delete_document(collection, query):
#Función para borrar un único documento de una colección.
    collection.delete_one(query)




##########################
##########################
##########################
#### BLOQUE PRINCIPAL ####
##########################
##########################
##########################
series_collection.drop()

# CREAMOS UN NUEVO DOCUMENTO
new_show = {
"_id": "1",
"name": "FRIENDS",
"year": 1994
}

#IMPRIMIMOS EL ID DEL DOCUMENTO CREADO
print("Este es el id del primer documento creado:")
print(insert_document(series_collection, new_show))

#BUSCAMOS EL DOCUMENTO
result = find_document(series_collection, {'name': 'FRIENDSS'})
print("Buscamos los datos del documento creado con find_document:")
print(result)

#INSERTAMOS NUEVO DOCUMENTO
new_show3 = {
"name": "HOW i MET YOUR MOTHER",
"year": 2008
}
id_ = insert_document(series_collection, new_show3)

#MODIFICAMOS EL DOCUMENTO
update_document(series_collection, {'_id': id_}, {'name': 'H.I.M.Y.M'})

#COMPROBAMOS RESULTADO
result = find_document(series_collection, {'_id': id_})
print("Creamos un objeto nuevo de How i met your mother, y le modificamos el titulo. Lo mostramos por pantalla")
print(result)

#Borramos un documento
##Inserto un nuevo documento
new_show4 = {
    "name":"Bersekr",
    "year": 2010
}
id_ = insert_document(series_collection, new_show4)
#Procedo a borrarlo
delete_document(series_collection, {'_id': id_})
#Compruebo si lo he borrado
result = find_document(series_collection, {'_id': id_})
print("Hemos creado un documento Bersekr, lo borramos y procedemos a buscarlo:")
print(result)
