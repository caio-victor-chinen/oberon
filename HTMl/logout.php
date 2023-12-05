
<?php 

require("conexao.php");


if(isset($_SESSION['logado'])){
    session_destroy();
    header("Location: ../HTML/logout.html");
}
    
  


$conn->close();



?>




<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/menu.css">
    <title>Visualização do Usuário</title>
     
</head>
<body>

<div class="container">
    <button type="submit">Sair da conta</button>

</div>

</body>
</html>