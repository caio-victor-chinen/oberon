<?php 

include_once('../PHP/conexao.php');
session_start();

$email = $_SESSION['email'];

$sql = "SELECT * FROM oberonproject WHERE email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();
$obj = mysqli_fetch_assoc($result);

$stmt->close();
$conn->close();

?>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/menu.css">
    <title>Visualização do Usuário</title>
</head>
<body>

<div class="container">
    <h2>Visualização do Usuário</h2>
    <p>Aqui estão as informações do usuário:</p>

    <p>Nome: <?php echo $obj['nome']; ?></p>
    <p>Email: <?php echo $obj['email']; ?></p>
    <p>Descrição: [Kabum]</p>

    <button onclick="window.location.href='atualiza.html'">Atualizar nome de usuário</button>
    <button onclick="window.location.href='delete.html'">Excluir usuário</button>
    <button class="sair-btn" onclick="window.location.href='logout.php'">Sair da conta</button>

</div>

</body>
</html>