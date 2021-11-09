function procesoCaja(cajaRegistradora){
    if(cajaRegistradora.estado)
      cajaRegistradora.aumentarContador();
    else
      cajaRegistradora.cambiarEstado();
  }

  function obtenerCajaMenorTiempo(caja1, caja2, caja3, caja4){
    let menor = caja1.tiempoEspera;
    let cajaDevolver = caja1;
    if(menor > caja2.tiempoEspera){
      menor = caja2.tiempoEspera;
      cajaDevolver = caja2;
    }
    
    if(menor > caja3.tiempoEspera){
      menor = caja3.tiempoEspera;
      cajaDevolver = caja3;
    }

    if(menor > caja4.tiempoEspera){
      menor = caja3.tiempoEspera;
      cajaDevolver = caja4;
    }

  }

  window.onload=function () {
    var objDiv = document.getElementById("pantallaConsola");
    objDiv.scrollTop = objDiv.scrollHeight;
}

document.getElementById('pantallaConsola').scrollTop = 9999999;

/*2 5 1 9

menor = 2;
menor > 5? ->No
menor > 1? -> si menor = 1;
menor >9? ->No


5 2 9 1

menor =5;
menor > 2; ->Si menor =2 ;
menor >1; -> Si menor = 1;
menor >9? -> no;*/