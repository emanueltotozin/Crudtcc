<?php
include 'Conexao.php';
$nomeprod = $_POST["txtNome"];
$descricaoprod = $_POST["txtDescricao"];
$preco = $_POST["txtPreco"];
$estoque = $_POST["txtEstoque"];
$sql = "INSERT INTO Produto (nomeprod, descricaoprod, preco, estoque)
VALUES ('".$nomeprod."', '".$descricaoprod."','R$".$preco."','".$estoque."')";
if ($conn->query($sql) === TRUE) {
echo "<script>alert('Registro inserido com sucesso.');</script>";
echo "<script>window.location = 'index.php';</script>";
} else {
echo "Erro: " . $sql . "<br>" . $conn->error;
echo "<script>window.history.back();</script>";
}
$conn->close();
?>
