<html>
    <head>

    </head>
    
    <body>
    
        
            <form>
                <input type="button" onClick="incrementar(1)" value="1">
                <input type="button" onClick="incrementar(2)" value="2">
                <input type="button" onClick="incrementar(3)" value="3">
            </form>
        <script>
            var num = 0;

            function incrementar(a){
                num += a;
                alert("El numero es: " + num);
            }
        
        </script>

    </body>
</html>