function getPos(event){
    console.log(event.clientY);
    let caja = document.getElementById("cajita");

    if(event.clientY <= 50){
        caja.style.top = `0`;
    }else{
        caja.style.top = `calc(${event.clientY}px - 50px)`;
    }
}

document.addEventListener('click', getPos);