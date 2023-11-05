<?php
// Inicie a sessão
session_start();

if (!isset($_SESSION["cliente_id"])) {
    // Redirecione para a página de login se o cliente não estiver autenticado
    header("Location: login.php");
    exit();
}

// Consulte o banco de dados para obter informações do cliente com base no ID da sessão
$cliente_id = $_SESSION["cliente_id"];

// Substitua com a lógica apropriada para obter informações do cliente
$nomeCliente = "Nome do Cliente"; // Substitua com o nome real do cliente
$emailCliente = "cliente@email.com"; // Substitua com o email real do cliente
?>

<!DOCTYPE html>
<html>
<head>
    <title>Perfil do Usuário - PharmaLife</title>
</head>
<body>
    <h2>Seu Perfil</h2>
    <ul>
        <li><strong>Nome:</strong> <?php echo $nomeCliente; ?></li>
        <li><strong>Email:</strong> <?php echo $emailCliente; ?></li>
        <!-- Adicione mais informações do perfil conforme necessário -->
    </ul>
</body>
</html>
