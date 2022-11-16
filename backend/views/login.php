<!DOCTYPE html>

<html lang="pt-br">

<head>
        <meta charset="UTF-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="viewport"content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="style.css">

        <title>LOGIN</title>

    </head>

    <body>

      

        <div id="login">

            <form class="card" action="autenticacao" method="POST" target="iframe-autenticacao">

                <div class="card-header">
                    <h2>Logar</h2>

                </div>

                <div class="card-content">

                    <div class="card-content-area">

                        <label for="usuario">Usuário</label>

                        <input id="usuario" name="usuario" required="required" type="text" />

                    </div>

                    <div class="card-content-area">

                        <label for="password">Senha</label>

                        <input id="senha" name="senha" required="required" type="password" />

                    </div>

                </div>

                <div class="card-footer">

                    <input type="submit" value="login" class="submit">

                    <a href="#" class="recuperar_senha">Esqueceu a senha?</a>

                </div>

            </form>
            <iframe name="iframe-autenticacao" id="iframe-autenticacao"></iframe>
        </div>

    </body>

</html>
