<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8" />
        <title>Aula 02</title>
    </head>

    <body>
        <dl id = "lista-usuarios">

        </dl>
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
            let url = "https://jsonplaceholder.typicode.com/users/";
            const listaUsuarios = document.getElementById('#lista-usuarios');
            xhr.open("GET", url);
            xhr.send(null);
            xhr.onreadystatechange = verificaAjax;

            function verificaAjax() {
                // console.log(xhr);

                if(xhr.readyState === 4) {
                    if(xhr.status === 200 || xhr.status === 304) {
                        let resposta = xhr.responseText;
                        resposta = JSON.parse(resposta);
                        mostraUsuarios(resposta);
                    } else {
                        alert('Deu ruim na resposta ! ');
                    }
                }
            }


            function mostraUsuarios(usuarios) {
                var usuario;
                usuario.forEach( usuario => {
                    adicionarElemento(container, 'dt', info);
                });
            }
        </script>
    </body>

</html>