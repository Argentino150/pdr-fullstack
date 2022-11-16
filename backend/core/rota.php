<?php
    // If Ternário
    $pagina = isset($_GET['pagina']) ? $_GET['pagina'] : '';
    switch ($pagina) {
        // VIEWS
        case "telainicial":
            include ("views/telainicial.php");
        break;
        case "cadastroempresa":
            include ("views/cadastroempresa.php");
        break;
        case "cadastroempresa1":
            include ("views/cadastroempresa1.php");
        break;
        case "cadastroONG":
            include ("views/cadastroONG.php");
        break;
        case "cadastroONG1":
            include ("views/cadastroONG1.php");
        break;
        case "login":
            include ("views/login.php");
        break;
        case "cadastroreceptor":
            include ("views/cadastroreceptor.php");
        break;
        case "catalogo":
            include ("views/catalogo.php");
        break;
        case "inicialreceptor":
            include ("views/inicialreceptor.php");
        break;
        case "inicialong":
            include ("views/inicialong.php");
        break;
        case "contatarong":
            include ("views/contatarong.php");
        break;
        case "inicialempresa":
            include ("views/inicialempresa.php");
        break;
        case "empresasparceiras":
            include ("views/empresasparceiras.php");
        break;
        case "cadastroreceptor1":
            include ("views/cadastroreceptor1.php");
        break;

        // CONTROLLERS
        case "autenticacao":
            include ("controllers/autenticacao.php");
        break;

        case 'cadastro.empresa':
            include ("controllers/cadastroempresa.php");
        break;

        // HOME
        default:
            include ("views/telainicial.php");
    }