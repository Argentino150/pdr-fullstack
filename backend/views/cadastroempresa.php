<!DOCTYPE html>

<html lang="pt-br">

    <head>

        <meta charset="UTF-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="viewport"content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="style.css">

        <title>empresa</title>

    </head>

    <body>

        <div id="login">

          <form class="card" method=POST action= "?pagina=cadastroempresa1">

                <div class="card-header">

                    <h2>cadastro da empresa</h2>

                </div>


                <div class="card-content">

                    <div class="card-content-area">

                        <label for="empresa">insira o nome da empresa</label>

                        <input id="empresa" name="empresa" required="required" type="text"/>

                    </div>

                    <div>

                 <div class="card-content-area">

                        <label for="cnpj">insira o CNPJ</label>

                        <input id="cnpj" name="cnpj" required="required" type="text"/>

                      </div>

                      <div>

                        <div class="card-content-area">

                        <label for="endereco">insira o endereço</label>

                        <input id="endereco" name="endereco" required="required" type="text"/>

                      </div>


                      <div class="card-content-area">

                        <label for="usuario">nome de usuario</label>

                        <input id="usuario" name="usuario" required="required" type="text"/>


                    <div class="card-content-area">

                        <label for="senha">Senha</label>

                        <input id="senha" name="senha" required="required" type="text"/>

                    </div>

                </div>

                <div class="card-footer">
                   <input type="submit" value="cadastrar" class="submit">
                </div>

            </form>

        </div>

    </body>

</html>
