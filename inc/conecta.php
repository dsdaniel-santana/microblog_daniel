<?php
/* Parâmetro de acesso ao servidor de banco de dados MYSQL */
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "microblog_daniel";

/* Usando A função mysqli_connect para conectar ao servidor  */
$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

/* Definindo o charset UTF8 também para a comunicação com o banco de dados */
mysqli_set_charset($conexao, "utf8");

/* Teste de conexão
Se der algum problema conexao (ou resultado, conexão false)
pare tudo (die e mostre erro) */
if (!$conexao ){
    die(mysqli_connect_error($conexao));

} /* else {
    //Senão, deu tudo certo!
    echo "<p>Beleza, banco conectado!</p>"; 

}; */