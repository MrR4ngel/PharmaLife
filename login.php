<?php
// Inicie a sessão
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifique as credenciais do cliente (substitua com suas próprias verificações)
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    // Consulta ao banco de dados para verificar as credenciais
    // Substitua com a lógica de autenticação apropriada

    if ($autenticacaoBemSucedida) {
        $_SESSION["cliente_id"] = $cliente_id; // Armazene o ID do cliente na sessão
        header("Location: produtos.php"); // Redirecione para a página de produtos
    } else {
        $erroLogin = "Credenciais inválidas. Tente novamente.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login - PharmaLife</title>
</head>
<body>
    <h2>Faça login na sua conta</h2>
    <form method="post" action="login.php">
        <label for="email">E-mail:</label>
        <input type="email" name="email" required><br>
        <label for="senha">Senha:</label>
        <input type="password" name="senha" required><br>
        <input type="submit" value="Login">
    </form>

    <?php if (isset($erroLogin)) { echo "<p>$erroLogin</p>"; } ?>
</body>
</html>
