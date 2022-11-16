<?php
$descricao = isset ($_GET['descricao']) ? $_GET['descricao'] : '';
if ($descricao == ''){
  echo 'tem que escrever';
  exit;
}
require_once 'conexao.php';

$sql = "INSERT INTO tipo_usuario (descricao,nivel)
VALUES ('$descricao',3);";

if($conexao ->exec($sql)){
  echo 'salvo com sucesso';
}else{
  echo 'erro ao salvar';
}
