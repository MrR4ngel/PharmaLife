<?php
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