let contador = 0;
$(document).ready(function(){
    $("body").keydown(function(event){
        if(event.which == 53){
            contador++;
            alert("key: " + event.which);
            $("#mensaje").html("key: " + event.which + " Pulsado " + contador + " veces<br>");
        }
                        
                         
    })
})
