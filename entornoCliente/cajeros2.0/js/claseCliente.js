class cliente{
    constructor(num){
        this.numeroCliente = num; //Un identificador para un futuro
        // this.tiempoCompra = Math.random() * (61 - 20) + 20; // Por el momento no la vamos a usar.
        //this.tiempoEspera = (Math.random() * (41 - 20) + 20)*1000; 
        this.tiempoEspera = 5000;
        // TIempo que el cliente va a gastar en el proceso de compra
        this.totalPagar = Math.round((Math.random() * (151 - 10) + 10)*100)/100; // Dinero que va a pagar por su compra.
    }
}