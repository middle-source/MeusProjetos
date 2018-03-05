<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8" />
        <title>Aula - 02</title>
    </head>
    <body>
    
        <script>
        

        // function Literal
            function somar(n1, n2) {
                return n1 + n2;
            }

            var soma = somar(50, 30);
            console.log("Resultado: " + soma);
        

            somar.teste = 'propriedade da function';

            console.log(somar.teste);


            // Function anonima
            var teste = function () {
                console.log('teste');
            }

            teste();
        </script>
    </body>
</html>