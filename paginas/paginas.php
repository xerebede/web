<?php
	$pagina = $_GET['pagina'];
	
	switch ($pagina) 
	{
		//MENU
		case "home":
			include "home.php";
			break;
		case "quem_somos":
			include "quem_somos.php";
			break;
		case "noticias":
			include "noticias.php";
			break;
		case "objetivo":
			include "objetivo.php";
			break;
		case "sobre":
			include "sobre.php";
			break;
		case "depoimentos":
			include "depoimentos.php";
			break;
		case "servicos":
			include "servicos.php";
			break;		
		case "aulas_online":
			include "aulas_online.php";
			break;		
		case "suporte_online":
			include "suporte_online.php";
			break;
		case "produtos":
			include "produtos.php";
			break;
		case "artigos":
			include "artigos.php";
			break;
		case "contato":
			include "contato.php";
			break;
		//RODAPE
		case "promocoes":
			include "promocoes.php";
			break;
		case "cadastro":
			include "cadastro.php";
			break;
		//DEFAULT
		default:
			include "home.php";
			break;
	}
?>
