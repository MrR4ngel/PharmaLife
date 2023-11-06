<?php
// Inicie a sessão
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifique as credenciais do cliente (substitua com suas próprias verificações)
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    // Consulta ao banco de dados para verificar as credenciais
    // Substitua com a lógica de autenticação apropriada
    $autenticacaoBemSucedida = verificarCredenciais($email, $senha);

    if ($autenticacaoBemSucedida) {
        $_SESSION["idCliente"] = $idCliente; // Armazene o ID do cliente na sessão
        header("Location: produtos.php"); // Redirecione para a página de produtos
    } else {
        $erroLogin = "Credenciais inválidas. Tente novamente.";
    }
}

// Função para verificar as credenciais no banco de dados
function verificarCredenciais($email, $senha) {
    // Conexão com o banco de dados
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "pharmalife";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Erro na conexão com o banco de dados: " . $conn->connect_error);
    }

    // Consulta ao banco de dados para verificar as credenciais
    $sql = "SELECT idCliente FROM Cliente WHERE email = '$email' AND senha = '$senha'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $idCliente = $row["idCliente"];
        $conn->close();
        return true;
    } else {
        $conn->close();
        return false;
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
        <label for "senha">Senha:</label>
        <input type="password" name="senha" required><br>
        <input type="submit" value="Login">
    </form>

    <?php if (isset($erroLogin)) { echo "<p>$erroLogin</p>"; } ?>
</body>
</html>
