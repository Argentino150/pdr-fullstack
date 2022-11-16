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

          <form class="card">

                <div class="card-header">
                    <?php
                        //<h2>Cadastrado com Sucesso   </h2>

                        require 'conexao.php';

                        $conn = conexao();

                        $nome   = $_POST['nome'];
                        $cpf    = $_POST['cpf'];
                        $rg     = $_POST['rg'];
                        $senha  = md5($_POST['senha']);
                        $sql = "
                            INSERT INTO receptor
                            (nome,cpf,rg)
                            VALUES
                            ('{$nome}','{$cpf}','{$rg}');
                        ";
                        $sql2 = "INSERT INTO usuario (nome,senha)  VALUES  ('$nome','$senha')";
                        $insere = mysqli_query($conn,$sql);
                        if($insere){
                        echo "<br>CADASTRADO COM SUCESSO";
                        }
                        $insere = mysqli_query($conn,$sql2);
                        if($insere){
                       // echo "<br>Cadastrou viado";
                        }
                    ?>


                    <h2>  <li> <a href="login.html">VOLTAR</a></li> </h2>


                <div class="card-content">






                </div>

            </form>

        </div>

    </body>

</html>
