
<?php
//inclui o arquivo de configuração (conexão  com banco de dados)
include "config.php";
//verifica se a conexão com banco foi bem-sucedida
if (!$conn){
//se a conexão falha,exibe uma mensagem de erro e encerra a execução
    die("falha na conexão {mysqli_connect_error()}");
}

//recebe os dados do formulário
$nome ='Maria Clara';
$dtnasc = '2007-06-13';
$celular = '(81) 9999-9999';
$email = 'teste@teste.com';
$ra = '1111111';
$endereco = 'rua catolé novo';
$num_end = '2931';
$bairro = 'arthur 1';
$cidade = 'Paulista/PE';

//criar variável para inserir o registro 
$sql ="INSERT INTO 'leitores'
('Nome', 'DtNasc', 'Celular', 'Email', 'RA', 'Enderco', 'NumEnd', 'Bairro', 'CidadeUF') VALUES
('$nome', '$dtnasc', '$celular','$emil','$ra','$endereco','$num_end','$bairro', '$cidade')";

//Executa a consulta SQL. Se falhar, exibe o erro do banco dedados
$query = mysqli_query(mysql: $conn,query: $sql) or 
die(mysqli_error($conn));


//Executa a consulta SQL. Se falhar, exibe o erro de bancos de dados 
$query = mysqli_query(mysql: $conn,query: $sql) or
die(mysqli_error($conn));

if($query){
    echo "<center>";
    echo "cadastro realizado com sucesso!!<br>";
    echo"<a href='index.php'><button title='Homme page'>voltar</button></a>";
    echo "</center";
} else{
    echo "<center>";
    echo "<a href='index.php'><button title='Home page'>voltar</button></a";
    echo "</center";
}
?>
