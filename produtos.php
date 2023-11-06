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
        echo '<button class="add-to-cart" data-product-id="' . $row["idProduto"] . '">Adicionar ao Carrinho</button>';
        echo '</div>';
    }
    echo '</div>';
} else {
    echo "Nenhum produto encontrado.";
}

$conn->close();


?>



<!-- <script>
    // Função para adicionar um produto ao carrinho
    function adicionarAoCarrinho(idProduto) {
        // Você pode usar JavaScript para manter uma lista de produtos no carrinho
        // e atualizar a interface do usuário conforme necessário.

        // Por exemplo, você pode armazenar os IDs dos produtos em um array ou objeto:
        var carrinho = [];

        // Quando o botão "Adicionar ao Carrinho" é clicado, adicione o ID do produto ao carrinho:
        function adicionarProdutoAoCarrinho(idProduto) {
            carrinho.push(idProduto);
            // Você pode realizar outras ações, como atualizar a contagem do carrinho, etc.
        }

        // Adicione um ouvinte de eventos aos botões "Adicionar ao Carrinho":
        var botoesAdicionarAoCarrinho = document.querySelectorAll('.add-to-cart');
        botoesAdicionarAoCarrinho.forEach(function (botao) {
            botao.addEventListener('click', function (event) {
                var idProduto = event.target.getAttribute('data-product-id');
                adicionarProdutoAoCarrinho(idProduto);
            });
        });
    }
</script> -->
