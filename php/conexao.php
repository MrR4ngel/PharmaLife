<?php

/*
function conectarAoBanco() {
   global $servername, $username, $password, $dbname;

   // Estabeleça a conexão
   $conn = new mysqli($servername, $username, $password, $dbname);

   // Verifique a conexão
   if ($conn->connect_error) {
       die("Falha na conexão: " . $conn->connect_error);
   }

   return $conn;
}
?>

<?php
*/
class Conexao {
    private $host = "localhost";
    private $usuario = "root";
    private $senha = "";
    private $banco = "pharmalife";
    private $conexao;

    public function __construct() {
        $this->conexao = new mysqli($this->host, $this->usuario, $this->senha, $this->banco);

        if ($this->conexao->connect_error) {
            die("Erro na conexão com o banco de dados: " . $this->conexao->connect_error);
        }
    }
}

?>