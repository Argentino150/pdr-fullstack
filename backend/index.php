<?php
	// Evita erro de CORS
	header("Access-Control-Allow-Origin: *");

	// Carrega arquivo de conexão
	require_once 'core/conexao.php';

	// Inclui arquivo de rotas
	include 'core/rota.php';