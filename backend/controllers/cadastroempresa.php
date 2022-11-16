<?php    
    $nome       = $_GET['nome'];
    $cnpj       = $_GET['cnpj'];
    $endereco   = $_GET['endereco'];
    $usuario    = $_GET['usuario'];
    $senha      = md5($_GET['senha']);

    // Instrução SQL
    $sql_inserir_empresa = "
        INSERT INTO empresa
        (nome,cnpj,endereco)
        VALUES
        ('{$nome}','{$cnpj}','{$endereco}')
    ";

    // Executa a instrução no MySQL
    $conexao->exec($sql_inserir_empresa);

    $sql_inserir_usuario = "INSERT INTO usuario (nome,senha)  VALUES  ('$nome','$senha')";
    $query  = $conexao->query($sql_inserir_usuario);
    
    if($query){
        echo "<br>CADASTRADO COM SUCESSO";
    }else{
        echo 'Erro ao cadastrar.';
    }