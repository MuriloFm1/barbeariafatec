<?php 
include "conexao.php"; 
   

   $Email = $_POST['Email']; 
   $Senha = $_POST['Senha'];


   $consulta = $conn->query("select Email, Senha from cliente"); 
   
$exibir = $consulta->fetch(PDO::FETCH_ASSOC);
if ($exibir['Email'] == $Email && $exibir['Senha'] == $Senha){
    header ('location:http://localhost/ibm/HTML/home.php');
}
else{
    echo "cadastro não encontrado";
}
?>