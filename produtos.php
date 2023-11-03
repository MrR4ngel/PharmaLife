<?php
// Conexão com o banco de dados (substitua com suas configurações)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pharmalife";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}

// Consulta para buscar produtos no banco de dados
$sql = "SELECT idProduto, nome, descricao, preco, estoque, categoria FROM Produto";
$result = $conn->query($sql);

// Exibe os produtos na página
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["idProduto"] . "<br>";
        echo "Nome: " . $row["nome"] . "<br>";
        echo "Descrição: " . $row["descricao"] . "<br>";
        echo "Preço: " . $row["preco"] . "<br>";
        echo "Estoque: " . $row["estoque"] . "<br>";
        echo "Categoria: " . $row["categoria"] . "<br>";
        echo "<hr>";
    }
} else {
    echo "Nenhum produto encontrado.";
}

$conn->close();
?>
