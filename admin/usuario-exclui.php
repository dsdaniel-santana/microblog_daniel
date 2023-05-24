<?php
require_once "../inc/funcoes_sessao.php";
require_once "../inc/funcoes-usuarios.php";

//Se o usuário logado NÃO FOR ADMIN
if ($_SESSION['tipo'] != "admin"){
	//ENTÃO REDIRECIONE PARA NÃO AUTORIZADO
	header("location:nao-autorizado.php");
	exit;
}


verificaAcesso();

/* Capturando o valor recebido pelo parâmetro
id através da URL */
$id = $_GET["id"];

/* Chamando a função de excluir usuário passando
o id do usuário que será excluído */
excluiUsuario($conexao, $id);

/* Voltando para a página com a tabela/lista de usuários */
header("location:usuarios.php");
