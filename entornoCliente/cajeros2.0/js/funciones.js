let caja1 = new caja(1);
let caja2 = new caja(2);
let caja3 = new caja(3);
let caja4 = new caja(4);
let cajas = new Array(caja1, caja2, caja3, caja4);
let contador = parseInt(document.getElementById("contadorClientes").innerHTML);

function procesoCaja(cajaRegistradora){ // Funcion para abrir cajas al hacer click en ellas
    if(!cajaRegistradora.estado) // Si el estado es false (cerrada) -> la abre
      cajaRegistradora.cambiarEstado();
}

function crearCliente(){ //Esta funcion crea un objeto cliente y lanza la funcion asignarClienteCaja para introducir dicho cliente en el objeto caja
    let clienteAuxiliar = new cliente(contador); 
    asignarClienteCaja(clienteAuxiliar);
    // Con estas lineas cambiamos el contador de clientes totales que han pasado por el super mercado.
    contador++;
    document.getElementById("contadorClientes").innerHTML = contador;

}

function asignarClienteCaja(clienteAux){ // Funcion para asignar un cliente a una caja

    let control = false; // variable para controlar si se ha añadido o no
    let contador = 0; // contador para realizar el recorrido del array
    let auxCajaFactura = 0; // Nos apoyaremos en esta variable auxiliar para saber cual caja es la que debe facturar el cliente que asignamos


    while(!control && contador <= 3){ // recorremos el array con un while para poder salir en cuanto encontremos un resultado positivo.
      if(cajas[contador].apta){ // Si es apta 
        cajas[contador].listaClientes.push(clienteAux); // añadimos cliente
        control = true; // digito de control a true para salir del bucle
        cajas[contador].aumentarContador(); // aumentamos el contador. Recordamos que este atributo es para mostrar la cantidad de clientes que hay esperando
        cajas[contador].tiempoTotalEspera += clienteAux.tiempoEspera; // Aqui añadimos el tiempo de espera en cola del cliente al total de la caja
        auxCajaFactura = contador;
      }
      contador++; // aumentamos contador para seguir recorriendo bucle en caso negativo.
    }
    // en el caso de que no encontremos una caja apta empezamos de 0.
    // Recorremos el array de cajas buscando una caja cerrada.
    // Abrimos la caja, y asignamos el cliente.
    contador = 0;

    while(!control && contador <= 3){ //Recorremos array

      if(cajas[contador].estado == false && cajas[contador].contadorCola < 4){ // Si la caja esta cerrada y la cantidad de clientes esperando es menor que 4 que añada un cliente. Esto lo hacemos por que sino, nunca va añadir mas de 4 clientes por caja y queremos que eso pase. 
          cajas[contador].cambiarEstado(); // Abrimos caja
          cajas[contador].listaClientes.push(clienteAux); //metemos cliente
          cajas[contador].aumentarContador(); // aumentamos el contador para mostrar la cantidad de clientes que hay esperando
          cajas[contador].tiempoTotalEspera += clienteAux.tiempoEspera; // Añadimos el tiempo de espera en cola del cliente al total de la caja
          auxCajaFactura = contador;
          control = true;
      }
      contador++;
    } 
    // Ya solo nos queda el caso de que todas las cajas esten abiertas y tengan 4 clientes. Por lo tanto lo que debemos hacer es comprobar que caja
    // es la que tiene menor tiempo de espera.

    while(!control){ // Vemos que no hemos conseguid añadir un cliente
      let arrayTiempos = []; // creamos un array numerico donde añadiremos tiempoTotalEspera, atributo de la clase caja que nos dicta el tiempo en s que van a atender a todos los clientes en cola.
      let indiceCaja = null; // En esta variable guardaremos el indice de la caja que menos tiempo total de espera tiene.

      // Recorremos el array de cajas e introducimos el tiempoTotalEspera de cada caja en el nuevo array
      for(let i = 0; i<=3; i++){

          arrayTiempos[i] = cajas[i].tiempoTotalEspera;          
      }

      //Aqui conseguimos el indnce con indexOf del menor valor que se encuentra en el arrayTiempos. Para ello usamos la funcion de Math.min.apply
      // esto nos va a sacar el valor menor de un array. por parametros tenemos que pasarle la funcion Math, y el array que queremos comparar.
      auxCajaFactura = indiceCaja = arrayTiempos.indexOf(Math.min.apply(Math, arrayTiempos));
      cajas[indiceCaja].listaClientes.push(clienteAux); //añadimos cliente
      cajas[indiceCaja].aumentarContador();// aumentamos el contador para mostrar la cantidad de clientes que hay esperando
      cajas[indiceCaja].tiempoTotalEspera += clienteAux.tiempoEspera; // añadimos el tiempo de espera en cola del cliente al total de la caja.
      control = true; // lo hemos conseguido! por lo tanto pasamos el digito a true para salir del bucle

      // WIIIII CONGRATZ

    }

    // Procedemos a timear el proceso de facturacion mediante setTimeout 
    setTimeout(facturar, clienteAux.tiempoEspera, auxCajaFactura, clienteAux.numeroCliente);
  
} 

function facturar(idCaja, idCliente){ //Funcion con la que vamos a facturar la compra del cliente.
    cajas[idCaja].totalFacturado += cajas[idCaja].listaClientes[cajas[idCaja].listaClientes.length-1].totalPagar; //Añadimos al atributo TotalFacturado lo que el cliente lleva comprado
    
    //Añadimos un mensaje en la pantalla de que el cliente se ha ido, y de lo que ha pagado
    let tag = document.createElement("p"); //Creamos etiqueta p
    let text = document.createTextNode(`Muchas gracias por su compra cliente numero: ${idCliente}. La caja ${cajas[idCaja].numeroCaja} ha facturado en total: ${cajas[idCaja].totalFacturado}`); // Texto que pondremos dentro del <p>
    tag.appendChild(text); //añadimos el texto a la etiqueta p creada
    let element = document.getElementById("pantallaConsola"); // almacenamos el elemento donde queremos guardar el p con su respectivo texto
    element.appendChild(tag); // añadimos texto al elemento.

    //Mostramos en el div el total facurado
    let facturaAuxiliar =parseFloat(document.getElementById(`facturacionCaja${cajas[idCaja].numeroCaja}`).innerHTML);
    facturaAuxiliar += cajas[idCaja].totalFacturado; 
    document.getElementById(`facturacionCaja${cajas[idCaja].numeroCaja}`).innerHTML = facturaAuxiliar;
  
    // Procedemos a modificar el valor del contador en el DIV del bton caja. Y a disminuir el contador
    if(cajas[idCaja].contadorCola > 0){ // Si hay gente esperando restamos
      cajas[idCaja].contadorCola--; //Restamos 1 al contador
      let spanContador = document.getElementById("contadorCaja"+cajas[idCaja].numeroCaja).innerHTML;
      document.getElementById("contadorCaja"+cajas[idCaja].numeroCaja).innerHTML = cajas[idCaja].contadorCola;

    }else{ //Si no hay gente esperando. Cerramos caja. 
      cajas[idCaja].estado = false; // cerramos caja
      cajas[idCaja].apta = false; // Al estar la caja cerrada, no es apta para meter nuevos clientes.
        document.getElementById("contadorCaja"+cajas[idCaja].numeroCaja).style('background-color') ='#F2AA61';
    }

    // Procedemos a quitar el cliente del array del 
    //cajas[idCaja].listaClientes.splice(idCliente,1);

    
}

const form = document.getElementById("form");
form.addEventListener('submit',)

function comandoConsolas() {
  let totalFacturado = 0;
  let comando = document.getElementById("comandoConsola").value;
  let arrayComando = comando.split(" ");
  switch(arrayComando[0]){
    case 'totalFacturado':
      totalFacturado += parseFloat(document.getElementById("facturacionCaja1").innerHTML);
      totalFacturado += parseFloat(document.getElementById("facturacionCaja2").innerHTML);
      totalFacturado += parseFloat(document.getElementById("facturacionCaja3").innerHTML);
      totalFacturado += parseFloat(document.getElementById("facturacionCaja4").innerHTML);

      let tag = document.createElement("p"); //Creamos etiqueta p
      let text = document.createTextNode(`El total que ha facturado el supermercado hoy es: ${totalFacturado}`); // Texto que pondremos dentro del <p>
      tag.appendChild(text); //añadimos el texto a la etiqueta p creada
      let element = document.getElementById("pantallaConsola"); // almacenamos el elemento donde queremos guardar el p con su respectivo texto
      element.appendChild(tag); // añadimos texto al elemento.
      break;
      
    default:
      let tag2 = document.createElement("span"); //Creamos etiqueta p
      let text2 = document.createTextNode(`No se encuentra el siguiente comando: ${comando}`); // Texto que pondremos dentro del <p>
      tag2.appendChild(text2); //añadimos el texto a la etiqueta p creada
      let element2 = document.getElementById("pantallaConsola"); // almacenamos el elemento donde queremos guardar el p con su respectivo texto
      element2.appendChild(tag2); // añadimos texto al elemento.
      break;

  }
}


// $("#myId").mousedown(function(ev){
//   if(ev.which == 3)
//   {
//         alert("Right mouse button clicked on element with id myId");
//   }
// });
