# Escribir un programa para pedir al usuario su nombre y luego el nombre de
# otra persona, almacenando cada nombre en una variable. Luego mostrar en
# pantalla un valor de verdad que indique si: los nombres de ambas personas
# comienzan con la misma letra o si terminan con la misma letra. Por ejemplo,
# si los nombres ingresados son María y Marcos, se mostrará True, ya que
# ambos comienzan con la misma letra. Si los nombres son Ricardo y Gonzalo
# se mostrará True, ya que ambos terminan con la misma letra. Si los nombres
# son Florencia y Lautaro se mostrará False, ya que no coinciden ni la primera ni
# la última letra.


name1 = input("Inserte el primer nombre: ")
name2 = input("Inserte el segundo nombre: ")

print(name1[0]==name2[0] or name1[len(name1)-1] == name2[len(name2)-1])
