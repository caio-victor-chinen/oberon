





<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/Logout.css">
    <title>Visualização do Usuário</title>
     
</head>
<body>

<div class="container">
    <button type="button">Sair da conta</button></a>  

    <a href="../HTML/menu.php">Voltar ao menu</a>

</div>

</body>
</html>


<?php

include_once("../PHP/conexao.php");

session_start();

if (isset($_SESSION['email'])) {
    session_destroy();
    header("location: ../HTML/Login.html");
    exit();
}

$conn->close();

?>