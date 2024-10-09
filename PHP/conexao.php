<?php 
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "Barbearia"; 

try { 
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    
}
catch (PDOException $e) {
    echo "Falha na conexão: " . $e->getMessage();
}
?> 