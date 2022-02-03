let chiquito = "Lorem fistrum no puedor de la pradera apetecan amatomaa pupita a peich. Quietooor tiene musho peligro ese hombree llevame al sircoo a gramenawer apetecan no puedor. Quietooor torpedo quietooor mamaar no te digo trigo por no llamarte Rodrigor qué dise usteer papaar papaar no te digo trigo por no llamarte Rodrigor llevame al sircoo. Ese que llega ahorarr no puedor benemeritaar ese hombree jarl sexuarl. Ese hombree te va a hasé pupitaa hasta luego Lucas al ataquerl fistro pupita. Se calle ustée amatomaa de la pradera apetecan. Fistro benemeritaar te voy a borrar el cerito amatomaa hasta luego Lucas apetecan sexuarl diodeno quietooor la caidita. Al ataquerl te va a hasé pupitaa se calle ustée diodenoo me cago en tus muelas al ataquerl a gramenawer fistro quietooor.";

function change(){
    let tag = document.createElement("p");
    let text = document.createTextNode(chiquito);
    tag.appendChild(text);
    let element = document.getElementById("container");
    element.appendChild(tag);
}

function changeJQ(){
    $("#container").html(`<p>${chiquito}</p>`);
}