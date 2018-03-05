<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8" />
        <meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
        <meta name = "X-UA-Compatible" content = "ie=edge" />
        <title>Aula - 01 - JS Mestre</title>
    </head>
    <body>

        <input type = "button" value = "+" onclick = "calcular(this.value)" />
        <input type = "button" value = "-" onclick = "calcular(this.value)" />
        <input type = "button" value = "*" onclick = "calcular(this.value)" />
        <input type = "button" value = "/" onclick = "calcular(this.value)" />

        <div id = "resultado">
        
        </div>
        <script>
            function calcular(n) {
                var n1 = prompt("Digite o 1° numero ? ");
                n1 = parseInt(n1);

                switch (n) {
                    case '+':
                        var n2 = prompt("Digite o 2° numero ? ");
                        n2 = parseInt(n2);

                        resultado = n1 + n2;
                        document.getElementById("resultado").innerHTML = "<br /> <b>Resultado</b> = " + resultado;
                        
                    break;

                    case '-':
                        var n2 = prompt('Digite o 2° numero ? ');
                        n2 = parseInt(n2);
                        resultado = n1 - n2;
                        document.getElementById("resultado").innerHTML = "<br /> <b>Resultado</b> = " + resultado;
                    break;
                    
                    case '*':
                    var n2 = prompt('Digite o 2° numero ? ');
                        n2 = parseInt(n2);
                        resultado = n1 * n2;
                        document.getElementById("resultado").innerHTML = "<br /> <b>Resultado</b> = " + resultado;
                    break;
                    
                    case '/':
                    var n2 = prompt('Digite o 2° numero ? ');
                        n2 = parseInt(n2);
                        resultado = n1 / n2;
                        document.getElementById("resultado").innerHTML = "<br /> <b>Resultado</b> = " + resultado;
                    break;
                }


            }
            

        </script>
    </body>
</html>