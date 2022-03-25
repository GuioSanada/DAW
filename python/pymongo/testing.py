import pymongo

myclient = pymongo.MongoClient("mongodb://localhost:27017/")
mydb = myclient["mydatabase"]

#IMPRIMO lista de nombres de databases
print(myclient.list_database_names())

#Vamos a comprobar que la database existe
dblist = myclient.list_database_names()

if "mydatabase" in dblist:
    print("La base de datos existe")

# CREAMOS DATABASE
mycol = mydb["customers"]

# comprobar si existe una colección en una base de datos enumerando todas
# las colecciones:

print(mydb.list_collection_names())
collist = mydb.list_collection_names()

if "customers" in collist:
    print("The collection exists.")

mydict = { "name": "John", "address": "Highway 37" }
x = mycol.insert_one(mydict)