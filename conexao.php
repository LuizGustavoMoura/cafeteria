<?php
$hostname='localhost';
$username='root';
$password='';
$database='cafeteria';
$port='3307';
// Tente estabelecer a conexão
$conexao = mysqli_connect($hostname, $username, $password, $database, $port);

// Verifique se a conexão foi bem-sucedida
if (!$conexao) {
    die('Erro na conexão: ' . mysqli_connect_error());
}
?>