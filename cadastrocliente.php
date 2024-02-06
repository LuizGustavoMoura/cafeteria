<?php
include 'conexao.php';

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$cpfcnpj = $_POST['cpfcnpj'];
$cep = $_POST['cep'];
$logradouro = $_POST['logradouro'];
$numero = $_POST['numero'];
$complemento = $_POST['complemento'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$uf = $_POST['uf'];

$arquivo = $_FILES['imagem'];

try {
    // Verifica se há erro no upload do arquivo
    if ($arquivo['error'] !== 0) {
        throw new Exception("Erro ao fazer upload do arquivo.");
    }

    $extensao = pathinfo($arquivo['name'], PATHINFO_EXTENSION);
    $extensoes_permitidas = array('png', 'jpg', 'jpeg');

    if (!in_array($extensao, $extensoes_permitidas)) {
        throw new Exception("Formato de arquivo não permitido. Por favor, escolha uma imagem no formato PNG, JPG ou JPEG.");
    }

    $nome_arquivo = md5(uniqid(time())) . "." . $extensao;
    $caminho_arquivo = "imagens/" . $nome_arquivo;

    move_uploaded_file($arquivo['tmp_name'], $caminho_arquivo);

    $sql = "INSERT INTO clientes (nome, email, telefone, cpfcnpj, cep, logradouro, numero, complemento, bairro, cidade, uf, imagem) VALUES ('$nome','$email','$telefone','$cpfcnpj','$cep','$logradouro','$numero','$complemento','$bairro','$cidade','$uf','$nome_arquivo')";

    if (!mysqli_query($conexao, $sql)) {
        throw new Exception("Erro ao inserir dados no banco de dados: " . mysqli_error($conexao));
    }

    header('Location: formcliente.php');
} catch (Exception $e) {
    echo "Erro: " . $e->getMessage();
}
?>
