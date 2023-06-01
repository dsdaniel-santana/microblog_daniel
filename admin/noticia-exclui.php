<?php
require_once "../inc/funcoes-noticias.php";
require_once "../inc/funcoes_sessao.php";

verificaAcesso();

// pegando o id da notícia vindo do parâmentro de URL
$idNoticia = $_GET['id'];

//Pegando o id e o tipo do usuário logado vindos da SESSION
$idUsuario = $_SESSION['id'];
$tipoUsuario = $_SESSION['tipo'];

//Executando a função a DELETE com os parâmentros
excluirNoticia($conexao, $idNoticia, $idUsuario, $tipoUsuario);

//voltando para páginas das notícias
header("location:noticias.php");

