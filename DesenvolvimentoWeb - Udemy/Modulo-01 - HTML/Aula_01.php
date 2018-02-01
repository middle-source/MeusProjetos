<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8" />
        <meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
        <meta name = "X-UA-Compatible" content = "ie=edge" />
        <title>Modulo 01 - HTML</title>
    </head>
    <body>
           <!-- 
                <h1>Titulo 01</h1>
                <h2>Titulo 02</h2>
                <h3>Titulo 03</h3>
                <h4>Titulo 04</h4>
                <h5>Titulo 05</h5>
                <h6>Titulo 06</h6>
            -->

            
            <!-- 
                Esse é um texto <strong>Negrito</strong> <br />
                Esse é um texto <em>Italico</em> <br />
                Esse é um texto <u>Underline</u> <br />
                Esse é um texto <strike>Errado</strike> 
            -->
            <!-- 
                Lista não Ordenada
                    <ul>
                        <li>Item 01</li>
                        <li>Item 02</li>
                        <li>Item 03</li>
                        <li>Item 04</li>
                    </ul>


                Lista Ordenada
                    <ol>
                        <li>Item 01</li>
                        <li>Item 02</li>
                        <li>Item 03</li>
                        <li>Item 04</li>
                    </ol>        
            -->

            <!-- 
                <h1>Tabelas</h1>

                <table border = "1">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Idade</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Allan Cristian</td>
                            <td>30</td>
                        </tr>
                    </tbody>
                </table> 
            -->

            <form method = "GET">
                <label>Login: </label>
                    <input type = "text" /> <br />
                <label>Senha: </label> 
                    <input type = "password" /> <br />
                    <input type = "submit" style = "color: #fff; background-color: #f80; outline: none; border-radius: 5px; border: none; display: block;  position: absolute; left: 174px; margin: 5px; padding: 5px;" value = "Entrar" />
            <br /><br />

            Sexo: 
                <input type = "radio" >Masculino <br />
                <input type = "radio" >Feminino <br />
            
            <br />

                Interesses: <br />
                    <input type = "checkbox"> PR
                    <input type = "checkbox"> SP
            <br />
            <br />
            <select multiple name = "estado">
                <option value = "PR" > PR</option>
                <option value = "SP" > SP</option>
                <option value = "SC" > SC</option>
            </select>
            
            </form>
    </body>
</html>