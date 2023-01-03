<html>
<head>
<title>Exemplo PHP</title>
<script type="text/javascript">
function apagar(id, nm, sn) {
if (window.confirm("Deseja realmente apagar este registro:\n" + nm + " " +
sn)) {
window.location = 'deleteCliente.php?id=' + id;
}
}
</script>
</head>
<body>
<fieldset><legend>Lista de pessoas cadastradas</legend>
<?php
include 'Conexao.php';
$sql = "SELECT * FROM produto";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
?>
<table border="2">
<tr> <th>Nome</th><th>Id</th> <th>Descricao</th>
<th>Preço</th><th>Estoque</th><th></th></tr>
<?php
while ($exibir = $result->fetch_assoc()){
?>
<tr>
<td><?php echo $exibir["nomeprod"] ?> </td>
<td><?php echo $exibir["idprod"] ?> </td>
<td><?php echo $exibir["descricaoprod"] ?> </td>
<td><?php echo $exibir["preco"] ?> </td>
<td><?php echo $exibir["estoque"] ?> </td>
<td><a href="updateCliente.php?id=<?php echo
$exibir["idprod"] ?>">Editar</a></td>
<td><a href="#" onclick="apagar('<?php echo
$exibir["idprod"] ?>', '<?php echo $exibir["nomeprod"] ?>','<?php echo
$exibir["preco"] ?>');">
Excluir</a></td>
</tr>
<?php
}
?>
</table>
<?php
}
else {
echo "Nenhum registro encontrado.";
}
$conn->close();
?>
<br>
<a href="addCliente.php"><button>ADICIONAR</button></a>
</fieldset>
</body>
</html>