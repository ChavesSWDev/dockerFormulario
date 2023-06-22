<?php
// Configurações do banco de dados
$host = 'localhost';  // Endereço do servidor MySQL
$usuario = 'seu_usuario';  // Nome de usuário do MySQL
$senha = 'sua_senha';  // Senha do MySQL
$banco = 'nome_do_banco';  // Nome do banco de dados MySQL

// Conexão com o banco de dados
$conexao = new mysqli($host, $usuario, $senha, $banco);

// Verifica se houve algum erro na conexão
if ($conexao->connect_error) {
    die('Erro na conexão com o banco de dados: ' . $conexao->connect_error);
}

// Obtém os dados do formulário
$nome = $_POST['nome'];
$email = $_POST['email'];

// Insere os dados no banco de dados
$sql = "INSERT INTO usuarios (nome, email) VALUES ('$nome', '$email')";

if ($conexao->query($sql) === TRUE) {
    echo "Dados cadastrados com sucesso!";
} else {
    echo "Erro ao cadastrar os dados: " . $conexao->error;
}

// Fecha a conexão com o banco de dados
$conexao->close();
?>