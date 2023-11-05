<!-- <!DOCTYPE html>
<html>
<head>
    <title>Categorias - PharmaLife</title>
</head>
<body>
    <h2>Categorias de Produtos</h2>
    <ul>
        <li><a href="produtos.php?categoria=medicamentos">Medicamentos</a></li>
        <li><a href="produtos.php?categoria=cuidados_pessoais">Cuidados Pessoais</a></li>
        <li><a href="produtos.php?categoria=suplementos">Suplementos</a></li>
         
    </ul>
</body>
</html> -->

<?php
// Conexão com o banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pharmalife";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}

// Consulta para buscar produtos no banco de dados
$sql = "SELECT idProduto, nome, descricao, preco, estoque, idCategoria, imagem FROM Produto";
$result = $conn->query($sql);

// Exibe os produtos na página
if ($result->num_rows > 0) {
    echo '<div class="product-container">';
    while ($row = $result->fetch_assoc()) {
        echo '<div class="product">';
        // Crie o caminho completo para a imagem do produto
        $imagemProduto = 'img/products/' . $row["imagem"];
        echo '<img src="' . $imagemProduto . '" alt="' . $row["nome"] . '">';
        echo '<h2 class="product-title">' . $row["nome"] . '</h2>';
        echo '<p class="product-price">R$ ' . $row["preco"] . '</p>';
        echo '<button>Adicionar ao Carrinho</button>';
        echo '</div>';
    }
    echo '</div>';
} else {
    echo "Nenhum produto encontrado.";
}

$conn->close();
?>
