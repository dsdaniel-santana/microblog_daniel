<?php
require "inc/funcoes-noticias.php"; 
require "inc/cabecalho.php";

$id = $_GET['id'];


$noticia = lerDetalhes($conexao, $id);
// var_dump($noticia);


?>


<div class="row my-1 mx-md-n1">

    <article class="col-12">
        <h2><?=$noticia['titulo']?> </h2>
        <p class="font-weight-light">
            <time><?=formataData($noticia['data'])?></time> - <span><?=$noticia['nome']?></span>
        </p>
        <img src="imagem/<?=$noticia['imagem']?>" alt="" class="float-start pe-2 img-fluid">
        <p><?=nl2br($noticia['texto'])?></p>
    </article>
    

</div>        

<?php 
require_once "inc/rodape.php";
?>

