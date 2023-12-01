<?php 

        require("conexao.php");

        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = $_POST["senha"]; 
            
          
    $sql = "INSERT INTO oberonproject (nome, email, senha) VALUES ('$nome' ,'$email' ,'$senha')";

    if(mysqli_query($conn, $sql)) {
        
        header("Location: ../HTML/login.html ");
        exit;
        echo "Inserção bem-sucedida";
    }else{
        echo "Erro na Inserção" . $conn->error;
    }

    $conn->close();




    


?>