<?php

	/*
	 *	Autor: Anderson Rodrigo Cassiano dos Santos
	 *	Início: 07/08/2018
	 *	GitHub: https://github.com/ARCassiano/bis2bis
	 *	Detalhes: Arquivo responsável por manter a função saque($placar)
	 */



	/*
	 *	Função responsável por retornar informar qual jogador possui a vez de saque.
	 *	A função deve receber como parâmetro uma string que possui dois números inteiro separados por ":".
	 *	O valor passado por parâmetro reresenta o placar do jogo, onde os números serão referentes a pontuação do "jogador a" e "jogador b", respectivamente.
	 *	A função irá retorna sempre qual jogador deve realizar o saque, sendo eles: "jogador a" ou "jogador b".
	 */
	function saque($placar = "0:0"){
		
		$jogador			= "jogador a";
		$placarVet			= explode(":", $placar);
		$pontuacaoJogadorA	= $placarVet[0];
		$pontuacaoJogadorB	= $placarVet[1];
		$pontuacaoTotal		= $pontuacaoJogadorA + $pontuacaoJogadorB;	
		$qtdSaquePorJogador	= 5;

		if($pontuacaoJogadorA >= 20 && $pontuacaoJogadorB >= 20)
			$qtdSaquePorJogador	= 2;

		$qtdSaque			= (int) $pontuacaoTotal / $qtdSaquePorJogador;

		echo "Quantidade de saques por jogador: " . $qtdSaquePorJogador . "<br>";
		echo "Soma do placar: " . $pontuacaoTotal . "<br>";
		echo "Quantidade de Saques utilizados: " . $qtdSaque . "<br>";

		if($qtdSaque % 2 == 0)
			$jogador 	= "jogador a";
		else
			$jogador 	= "jogador b";


		if($placar == "0:0")
			$jogador 	= "jogador a";

		return $jogador;
	}
?>