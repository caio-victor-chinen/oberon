<?php 

require('./conexao.php');

$id_excluir = $_POST['id_excluir'];

$sql = "DELETE FROM oberonproject WHERE idnew_table = '$id_excluir'";

if ($conn->query($sql) === TRUE) {
  header("Location: ../HTML/login.html ");
        exit;
  echo "Deletado com sucesso";
} else {
  echo "Erro em deletar o arquivo: " . $conn->error;
}

$conn->close();

?>