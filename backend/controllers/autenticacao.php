<?php
    $login = isset ($_POST['usuario']) ? $_POST['usuario'] : '';
    $senha = isset ($_POST['senha']) ? $_POST['senha'] : '';

    $sql    = "SELECT id_usuario,id_tipo_usuario FROM usuario WHERE email = '$login' AND senha = '$senha';";
    $query  = $conexao->query($sql);
    if ($query->rowCount() > 0){
        $row = $query->fetch();
        if ($row['id_tipo_usuario'] == 1){
            echo '<script>parent.location.href = "inicialreceptor"; </script>';
        }
    }else{
        echo 'E-Mail ou Senha inválidos!';
    }