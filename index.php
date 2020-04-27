<?php 

require_once("config.php");

	//Carrega um usuário
	//$jose = new Usuário();
	//$jose->LoadById(3);
	//echo $jose;

	//Carregga uma lista de usuários
	//$lista = Usuario::getList();
	//echo json_encode($lista);
	
	//Carrega uma lista de usuários buscando pelo login
	
	//$search = Usuario::search("j");
	//echo json_encode($search);
	
	//Carrega um usuário usando o login e a senha

	//$usuario = new Usuario();
	//$usuario->login("jose","123456");

	//echo ($usuario);
/*

	//Criando um novo usuario 
	$aluno = new Usuario("Aluno","12345");

	$aluno->insert();

	echo $aluno;
*/
/*
	//Alterar um usuario
	$usuario = new Usuario();

	$usuario->LoadById(9);

	$usuario->update("Cassinda", "23@Vanio");

	echo $usuario;
 */

		$usuario = new Usuario();

		$usuario->LoadById(7);

		$usuario->delete();

		echo $usuario;

 ?>