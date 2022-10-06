<?php
//conectando com mysql(localhost)

$conexao = mysqli_connect('localhost','root','');
mysqli_set_charset($conexao, 'utf8');

if(!$conexao)
    die("erro de conexao com o banco de dados,o seguinte erro ocorreu ->".mysqli_error());

//conectando com o banco de dados

$banco = mysqli_select_db($conexao, 'empresa2');
if(!$banco)
    die("erro de conexao com o banco de dados,o seguinte erro ocorreu ->".mysqli_error());

?>