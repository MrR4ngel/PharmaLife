
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

// Inicialize a variável $categoriaSelecionada
$categoriaSelecionada = null;

// Verifique se uma categoria foi selecionada (por exemplo, através de um parâmetro na URL)
if (isset($_GET['categoria'])) {
    // Recupere o nome da categoria a partir da URL
    $nomeCategoria = $_GET['categoria'];

    // Consulta ao banco de dados para obter o idCategoria com base no nome da categoria
    $stmt = $conn->prepare("SELECT idCategoria FROM Categoria WHERE nome = ?");
    $stmt->bind_param("s", $nomeCategoria); // "s" indica uma string
    $stmt->execute();
    
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $categoriaSelecionada = $row["idCategoria"];
    }
    
    // Consulta ao banco de dados para buscar produtos com base no idCategoria
    if ($categoriaSelecionada !== null) {
        $sql = "SELECT idProduto, nome, descricao, preco, estoque, idCategoria, imagem FROM Produto WHERE idCategoria = $categoriaSelecionada";
    }
}

// Se a categoria não foi encontrada, consulte todos os produtos
if ($categoriaSelecionada === null) {
    $sql = "SELECT idProduto, nome, descricao, preco, estoque, idCategoria, imagem FROM Produto";
}

// Execute a consulta
$result = $conn->query($sql);

// Exibe os produtos na página
echo '<div class="product-container">';
while ($row = $result->fetch_assoc()) {
    echo '<div class="product">';
    // Crie o caminho completo para a imagem do produto
    $imagemProduto = 'img/products/' . $row["imagem"];
    echo '<img src="' . $imagemProduto . '" alt="' . $row["nome"] . '">';
    echo '<h2 class="product-title">' . $row["nome"] . '</h2>';
    echo '<p class="product-price">R$ ' . $row["preco"] . '</p>';
    echo '<button class="add-to-cart" data-product-id="' . $row["idProduto"] . '">Adicionar ao Carrinho</button>';
    echo '</div>';
}
echo '</div>';

$conn->close();
?>
