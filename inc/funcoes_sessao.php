<?php
/*  Sessões no PHP
Recurso usado para controle de acesso à determinadas páginas e /ou recursos do site. Exemplo:
área administrativa, área do cliente/aluno. 

Nestas áreas, o acesso só é póssivel mediante alguma forma de autenticação. Exemplo: login/senha. */

//Se NÃO EXISTIR uma sessão em funcionamento
if( !isset($_SESSION)){
    //Então, inicie uma sessão
    session_start();
}

/* Usada en TODAS as páginas admin */
function verificaAcesso(){
    /* SE NÃO EXISTIR uma variável de SESSÃO baseada no id do usuário, significa que ele/ela não esta logado(a) no sistema */
    if ( !isset($_SESSION['id'])){
        session_destroy();

        //Redirecione para o formulário de login
        header("location:../login.php");
        
        //Pare completamente qualquer outra execução
        exit; //ou die()
    }
}