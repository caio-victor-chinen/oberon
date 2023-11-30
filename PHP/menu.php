<?php
include_once('./conexao.php');

  // Obter dados do formulário
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Consulta SQL
  $sql = "SELECT email, senha FROM oberonproject WHERE email = '$username' AND senha = '$password'";
  $result = $conn->query($sql);

  // Verificar se há resultados e se a senha está correta
  if ($result->num_rows > 0) {
      $row = $result->fetch_assoc();

         session_start();

          // Iniciar a sessão e armazenar o ID do usuário
          $_SESSION['senha'] = $row['senha'];
          $_SESSION['email'] = $row['email'];



          // Redirecionar para a página do usuário
        header("Location:../HTML/menu.php");     
  } else {
      echo 'Senha ou login incorretos';
  }

  // Fechar a conexão

// Inicie a sessão
// Verifique se a sessão 'Email' está definida
if (!isset($_SESSION['email'])) {
    // Se não estiver, redirecione para a página de login ou faça algo apropriado
    header("Location: ../HTML/login.html");
    exit();
}

// Recupere o email da sessão
$email = $_SESSION['email'];



// Consulta SQL usando uma instrução preparada
$sql = "SELECT * FROM oberonproject WHERE email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();
$obj = mysqli_fetch_assoc($result);

// Exemplo de uso dos dados recuperados
// echo "Nome: " . $obj['Nome'] . "<br>";
// echo "Email: " . $obj['Email'] . "<br>";

// Feche a declaração preparada
$stmt->close();

// Feche a conexão
$conn->close();
?>