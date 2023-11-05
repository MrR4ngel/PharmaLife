<!DOCTYPE html>
<html>
<head>
    <title>Registro - PharmaLife</title>
</head>
<body>
    <h2>Cadastre-se na PharmaLife</h2>
    <form method="post" action="registro.php">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" required><br>
        <label for="email">E-mail:</label>
        <input type="email" name="email" required><br>
        <label for="senha">Senha:</label>
        <input type="password" name="senha" required><br>
        <label for="confirmarsenha">Confirmar Senha:</label>
        <input type="password" name="confirmarsenha" required><br>
        <input type="submit" value="Registrar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Processar o formulário de registro aqui
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        $confirmarSenha = $_POST["confirmarsenha"];

        // Realize validações, como verificar se o email já está em uso, se as senhas coincidem, etc.

        // Se os dados forem válidos, insira o novo cliente no banco de dados
        // Lembre-se de usar funções de hash e salting para proteger a senha do cliente

        // Redirecione o usuário para a página de login após o registro bem-sucedido
    }
    ?>
</body>
</html>
