<?php
$servidor = "localhost";  // ou o endereço do seu servidor mysql
$usuario = "root";        // nickname
$senha = "";              // senha aleatory
$banco = "floresta_verde"; // name bdd

// a conexão com o mysql
$conn = new mysqli($servidor, $usuario, $senha, $banco);

// ajuste conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// parte d coletar informaçoes do bdd
$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];

// para preparar a consulta sql para inserir os dados
$sql = "INSERT INTO contatos (nome, email, mensagem) VALUES ('$nome', '$email', '$mensagem')";

// usa a consulta e verifica se ocorreu td bem
if ($conn->query($sql) === TRUE) {
    echo "Mensagem enviada com sucesso!";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

// the end
$conn->close();
?>
