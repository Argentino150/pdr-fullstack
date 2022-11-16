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

                        $nome   = $_POST['empresa'];
                        $cnpj    = $_POST['cnpj'];
                        $endereco     = $_POST['endereco'];
                        $usuario    = $_POST['usuario'];
                        $senha  = md5($_POST['senha']);
                        $sql = "
                            INSERT INTO empresa
                            (nome,cnpj,endereco)
                            VALUES
                            ('{$nome}','{$cnpj}','{$endereco}')";
                    
                        $sql2 = "INSERT INTO usuario (nome,senha)  VALUES  ('$nome','$senha')";
                        $insere = mysqli_query($conn,$sql);
                        if($insere){
                        echo "<br>CADASTRADO COM SUCESSO";
                        }
                        $insere = mysqli_query($conn,$sql2);
                        if($insere){
                        //echo "<br>Cadastrou";
                        }
                     ?>
                    
                    <h2>  <li> <a href="login.html">VOLTAR</a></li> </h2>


                <div class="card-content">






                </div>

            </form>

        </div>

    </body>

</html>
