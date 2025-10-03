<?php 
//Habilita a exibição de todos os erros para depuração, excluir após concluir o site
ini_set('display_erros', 1);
error_reporting(E_ALL);

//inicia a sessão para todo o site
session_start();

//Configurações do banco de dados
$servidor = "localhost";
$usuario_db = "root";
$senha_db = "";
$banco = "classificados_db";

//cria a conexão
$conexao = mysqli_connect($servidor, $usuario_db, $senha_db, $banco);

//verifica conexão
if (!$conexao) {
      die("FALHA NA CONEXÃO: ".mysqli_connect_error());
}

//Define o charset para UTF-8 para evitar problemas com acentuação
mysqli_set_charset($conexao, "utf8");
?>