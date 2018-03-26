<!DOCTYPE html>
<html>
    <head>  
        <meta charset = "utf-8" />
        <meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
        <meta name = "X-UACompatible" content = "ie=edge" />
        <title>Aulas Javascript</title>
    </head>
    <body>
    
        <script>
             
        // TESTANDO O CODIGO

            // const variavel; // Definir constante ainda não disponivel em todos os browsers
             // let valiavel// Declarar variavel ainda não valido a todos os browsers 
            // var teste = "ola";
            // if( teste == "ola") {
            //     alert( 20 + "" + teste);
            // } else {
            //     alert(20 + 'Diferente' );
            // }
                // function comt(a, b) {
                //     return a + b;
                // }


                

                // console.log(comt(305, 81));
                    
                    // class Caneta{
                    //      function defineCor(cor) {
                    //         console.clear("Minha caneta é " + cor);
                    //     }
                    // }



                    //         var minhaCaneta = new Caneta();
                    //         minhaCaneta.defineCor("red");
        // FIM TESTANDO O CODIGO

        // TESTANDO FUNCTION PADRÃO PROJETO
                        // Function Literal
                //             function minhaFuncao(a, b) {
                //                 return a + b;// Corpo da funcao
                //             }

                //             var soma = minhaFuncao(56, 50);
                


                //                 function som() {
                //                     var y = 13;
                //                     a = 510;

                //                     console.log(y);
                //                 }

                //                 console.log(a);


                //             console.log(soma);
                
                // // Function Anonima
                //             var teste = function(){
                //                 console.log('Teste');
                //             };

                //             teste();

                        //    console.log(minhaFuncao.teste);
        // FIM TESTANDO FUNCTION PADRÃO PROJETO


       // AULA DE FUNCTION         
                // (function(){
                //     // IFIEE
                //     // 'use strict';
                //     var isValid = false;
                //     console.log(isValid);
                
                //     function somar(arr) {
                //         // var n1 = 10;
                //         // var n2 = 20;

                //         console.log(arguments);
                //         var result = 0;
                //         var x = 0;

                //         while(arguments[x]) {
                //             result += arguments[x];
                //             x++;
                //         }
                //         console.log('result: ' + result); 
                //     } 
                    
                //     somar(20,10,20,902,48,52196);
       // FIM AULA DE FUNCTION
                



            (function(){
                function calcularMedia(arr) {

                   var result = 0;
//                   var  x = 0;

                    console.log(arguments);
                    var x = 0;
                    var qtd = arguments.length;
                    while(x < arguments[x]) {
                        result += arguments[x];
                        x++;
                    }

                    return result / qtd;
                    // var media1 = calcularMedia(2, 3);
                 
                };

                var media = calcularMedia(2, 3);
                var media1 = calcularMedia(2, 3, 5);
                var media2 = calcularMedia(2, 3, 55, 5);
                console.log(media);
                console.log(media1);
                console.log(media2);
            })();

        
        </script>
    </body>
</html>