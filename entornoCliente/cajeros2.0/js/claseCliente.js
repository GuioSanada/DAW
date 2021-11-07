class cliente{
    constructor(num){
        this.numerocliente = parseInt(num);
        this.tiempoCompra = Math.random() * (61 - 20) + 20;
        this.tiempoEspera = Math.random() * (41 - 20) + 20;
        this.totalPagar = Math.random() * (151 - 10) + 10;
    }


}