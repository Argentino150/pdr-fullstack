<!DOCTYPE html>

<html lang="pt-br">

    <head>

        <meta charset="UTF-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="viewport"content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="style.css">

        <title>Receptor</title>

    </head>

    <body>

        <div id="login">

            <form class="card" method="POST" action= "?pagina=cadastroreceptor1">

                <div class="card-header">

                    <h2>cadastro do receptor</h2>

                </div>

                <div class="card-content">

                    <div class="card-content-area">

                        <label for="nome">insira seu nome</label>

                        <input id="nome" name="nome" required="required" type="text"/>

                    </div>

                    <div>

                 <div class="card-content-area">

                        <label for="cpf">insira o seu CPF</label>

                        <input type="text" id="cpf" name="cpf" placeholder="não obrigatorio">

                      </div>

                      <div>

                        <div class="card-content-area">

                        <label for="rg">insira o seu RG</label>

                        <input type="text" id="rg" name="rg" placeholder="não obrigatorio">

                      </div>


                    <div class="card-content-area">

                        <label for="senha">Senha</label>

                        <input id="senha" name="senha" required="required" type="text" />

                    </div>

                </div>

                <div class="card-footer">

                    <input type="submit" value="cadastrar" class="submit">


                </div>

            </form>

        </div>

    </body>

</html>
