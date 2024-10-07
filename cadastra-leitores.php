<?php
include "config.php";
if (!$conn){
    die("falha na conexão {mysqli_connect_error()}");
}

//recebe os dados do formulário
$nome ='';
$dtnasc = '';
$celular = '';
$email = '';
$ra = '';
$endereco = '';
$num_end = '';
$bairro = '';
$cidade = '';

//criar variável para inserir o registro 
$sql ='';