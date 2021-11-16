function procesoCaja(cajaRegistradora){
    if(cajaRegistradora.estado)
      cajaRegistradora.aumentarContador();
    else
      cajaRegistradora.cambiarEstado();
  }

function crearCliente(contador){
    let cliente1 = cliente(contador);
    return cliente1;
}

function asignarClienteCaja(clienteAux){
    let control = false; // variable para controlar si se ha añadido o no
    let contador = 0; // contador para realizar el recorrido del array
    while(!control && contador <= 3){ // recorremos el array con un while para poder salir en cuanto encontremos un resultado positivo.
      if(cajas[contador].apta){ // Si es apta -> añadimos cliente. Cambiamos var de control a true
        cajas[contador].listaClientes.push(clienteAux);
        control = true;
      }
      contador++; // aumentamos contador. 
    }
    // en el caso de que no encontremos una caja apta empezamos de 0.
    // Recorremos el array de cajas buscando una caja cerrada.
    // Abrimos la caja, y asignamos el cliente.
    contador = 0;

    if(!control){
      while(!control && contador <= 3){
        if(cajas[contador].estado == false){
            cajas[contador].estado = true;
            cajas[contador].listaClientes.push(clienteAux);
            control = true;
        }

      } 
    }

    // En el caso de que todas las cajas esten abiertas. y ninguna sea apta.
    // Recorreremos el array buscando la caja que menos tiempo de espera tiene para añadir al nuevo cliente.

    for(let i = 0, i <= 3, i++){

    }
} 

  window.onload=function () {
    var objDiv = document.getElementById("pantallaConsola");
    objDiv.scrollTop = objDiv.scrollHeight;
}

document.getElementById('pantallaConsola').scrollBot = 9999999;

