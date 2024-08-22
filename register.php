<?php
// Configurações do banco de dados
$servername = "localhost";
$username = "root"; // geralmente "root" no XAMPP
$password = ""; // geralmente vazio no XAMPP
$dbname = "autismo_questionario"; // nome do banco de dados

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Coletar dados do formulário
$user = $_POST['username'];
$email = $_POST['email'];
$pass = password_hash($_POST['password'], PASSWORD_BCRYPT); // Criptografar a senha

// Inserir dados no banco de dados
$sql = "INSERT INTO usuarios (username, email, password) VALUES ('$user', '$email', '$pass')";

if ($conn->query($sql) === TRUE) {
    echo "Conta criada com sucesso! <a href='login.html'>Faça login aqui</a>";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

// Fechar conexão
$conn->close();
?>
