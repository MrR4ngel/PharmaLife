<?php
// Inicie a sessão
session_start();

if (!isset($_SESSION["cliente_id"])) {
    // Redirecione para a página de login se o cliente não estiver autenticado
    header("Location: login.php");
    exit();
}

// Verifique se o carrinho do cliente está vazio (ou seja, se a sessão carrinho não foi criada ainda)
if (!isset($_SESSION["carrinho"])) {
    $_SESSION["carrinho"] = array(); // Inicialize o carrinho como um array vazio
}

// Adicione um produto ao carrinho (substitua com a lógica apropriada)
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["adicionarCarrinho"])) {
    $produto_id = $_POST["produto_id"];
    $quantidade = $_POST["quantidade"];

    // Substitua com lógica para adicionar o produto ao carrinho
    // Verifique o estoque, calcule o subtotal, etc.

    // Exemplo de como adicionar um item ao carrinho (o ID do produto é a chave)
    if (isset($_SESSION["carrinho"][$produto_id])) {
        $_SESSION["carrinho"][$produto_id] += $quantidade;
    } else {
        $_SESSION["carrinho"][$produto_id] = $quantidade;
    }
}

// Exiba o conteúdo do carrinho
echo "<h2>Seu Carrinho</h2>";
echo "<table>";
echo "<tr><th>Produto</th><th>Quantidade</th><th>Subtotal</th></tr>";

// Iterar pelos itens no carrinho e exibir detalhes (substitua com sua lógica)
foreach ($_SESSION["carrinho"] as $produto_id => $quantidade) {
    // Consulte o banco de dados para obter informações detalhadas sobre o produto
    // Substitua com a lógica apropriada

    // Exemplo: exiba informações do produto e calcule o subtotal
    $nomeProduto = "Nome do Produto";
    $precoProduto = 9.99; // Substitua com o preço real do produto
    $subtotal = $precoProduto * $quantidade;

    echo "<tr><td>$nomeProduto</td><td>$quantidade</td><td>$subtotal</td></tr>";
}

echo "</table>";
?>

<!-- Formulário para adicionar produtos ao carrinho -->
<form method="post" action="carrinho.php">
    <label for="produto_id">ID do Produto:</label>
    <input type="text" name="produto_id" required>
    <label for="quantidade">Quantidade:</label>
    <input type="number" name="quantidade" required>
    <input type="submit" name="adicionarCarrinho" value="Adicionar ao Carrinho">
</form>
