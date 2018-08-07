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
		
		# Valor de retorno Default em caso de falha
		$jogador			= "jogador a";
		$placarVet			= explode(":", $placar);
		$pontuacaoJogadorA	= $placarVet[0];
		$pontuacaoJogadorB	= $placarVet[1];
		$pontuacaoTotal		= $pontuacaoJogadorA + $pontuacaoJogadorB;	

		# Varável responsável por determinar a quantidade de saques que cada jogador possui
		# O jogo começa alternando o saque entre os jogadores a cada 5 pontos
		$qtdSaquePorJogador	= 5;

		# Quando a partida chegar em 20 a 20, o saque será alternado entre os jogadores a cada dois pontos
		if($pontuacaoJogadorA >= 20 && $pontuacaoJogadorB >= 20)
			$qtdSaquePorJogador	= 2;

		# Quantidade de vezes em que houve a troca de saque
		$qtdSaque 	= (int) $pontuacaoTotal / $qtdSaquePorJogador;


		/*
		 *	Impressão de valores para auxiliar na depuração da função
		 *	echo "Quantidade de saques por jogador: " . $qtdSaquePorJogador . "<br>";
		 *	echo "Soma do placar: " . $pontuacaoTotal . "<br>";
		 *	echo "Quantidade de Saques utilizados: " . $qtdSaque . "<br>";
		*/

		# Caso a quantidade de trocas for par o saque pertencerá ao jogador a, caso contrário pertencerá ao jogador b
		if($qtdSaque % 2 == 0)
			$jogador 	= "jogador a";
		else
			$jogador 	= "jogador b";

		# O saque da partida deve iniciar com o jogador A
		if($placar == "0:0")
			$jogador 	= "jogador a";

		return $jogador;
	}
?>