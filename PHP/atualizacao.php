<?php

require("conexao.php");
session_start();


// $novoEmail = $_POST['email'];
$novoNome = $_POST['nome'];

$email = $_SESSION['email'];

echo $email;

$sql = "UPDATE oberonproject SET nome = '$novoNome' WHERE email = '$email'";
$result = $conn->query($sql);

if($conn->query($sql) === TRUE){
    echo "Dados Atualizados";
    header("Location: ../HTML/menu.php ");
    exit;

}else{
    echo "Erro ao atualizar";

}



?>