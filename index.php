<?php

	/*
	 *	Autor: Anderson Rodrigo Cassiano dos Santos
	 *	Início: 07/08/2018
	 *	GitHub: https://github.com/ARCassiano/bis2bis
	 *	Detalhes: Arquivo responsável por permitir testes da função saque($placar)[helpers.php]
	 */

	# Inclusão do arquivo one está localizada a função saque($placar)
	require_once("helpers.php");

	# recolher a pontuação de cada jogador
	$jogadorA	= (isset($_GET["x"])) ? $_GET["x"] : 0;
	$jogadorB	= (isset($_GET["y"])) ? $_GET["y"] : 0;
	$placar		= $jogadorA . ":" . $jogadorB;
	
	/*
	 * Resultados esperados:
	 *	OK - saque("0:0"); // retorna "jogador a"
	 *	OK - saque("3:2"); // retorna "jogador b"
	 *	OK - saque("21:20"); // retorna "jogador a"
	 *	OK - saque("21:22"); // retorna "jogador b"
	 */
	#echo "Parâmetro sendo passado na função saque($placar): " . $placar . "<br>";
	echo "O saque pertence ao " . saque($placar);
?>