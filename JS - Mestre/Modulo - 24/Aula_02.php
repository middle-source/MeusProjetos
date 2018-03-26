<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8" />
        <title>Aula 02</title>
    </head>

    <body>
  
        <script>

    // PROTOCOLO HTTP
        //                             HTTP REQUEST
        //            '---------------------------------------------> 
        //     CLIENT ---------------------------------------------  SERVER
        //            <---------------------------------------------
        //                             HTTP RESPONSE 
    // FIM PROTOCOLO HTTP
                                    
        // HTTP -> Hyper Text transfer protocol
        

            let xhr = new XMLHttpRequest();
            xhr.open("GET", "aula24-alunos.json");
            xhr.send(null);
            xhr.onreadystatechange = verificaAjax;

            function verificaAjax() {
                // console.log(xhr);

                if(xhr.readyState === 4) {
                    if(xhr.status === 200 || xhr.status === 304) {
                        let resposta = xhr.responseText;
                        resposta = JSON.parse(resposta);
                        console.log(resposta[0]);
                    } else {
                        alert('Deu ruim na resposta ! ');
                    }
                }
            }
        </script>
    </body>

</html>