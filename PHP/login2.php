<?php 
    include "conexao.php"; 

    $Email = $_POST['Email']; 
    $Senha = $_POST['Senha'];
    echo $Email . "<br>";


    $consulta = $conn->query("select Email, Senha from cliente where Email = '" . $Email . "' and Senha= '" . $Senha . "'"); 
    // echo "<br>" . "$consulta" . "<br>";
   
    $exibir = $consulta->fetch(PDO::FETCH_ASSOC);
    echo $exibir . "<br>";
    if ($exibir['Email'] == $Email && $exibir['Senha'] == $Senha){
        header ('location:http://localhost/barbeariafatec-main/HTML/home.php');
    }
    else{
        echo "cadastro não encontrado";
    }
?>
