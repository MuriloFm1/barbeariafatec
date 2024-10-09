<?php
include'conexao.php';


$Email = $_POST['Email']; 
$Nome = $_POST['Nome']; 
$Senha = $_POST['Senha']; 
$Telefone = $_POST['Telefone']; 

$consulta = $conn->query("select Email, Telefone from cliente"); 

$exibir = $consulta->fetch(PDO::FETCH_ASSOC);

if ($exibir['Email'] == $Email || $exibir['Telefone'] == $Telefone )
{
 echo "Já existe esse cadastro";
 header ('location:http://localhost/ibm/HTML/login_cadastro.php');
}
else{
    $inserir = $conn->query("insert into cliente (Email, Nome, Senha, telefone) 
values ('$Email','$Nome','$Senha','$Telefone') "); 
header ('location:http://localhost/ibm/HTML/home.php');
}

?>





