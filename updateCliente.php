<?php
include("Conexao.php");
if (isset($_POST["txtNome"])) {
$nomeprod = $_POST["txtNome"];
$descricaoprod = $_POST["txtDescricao"];
$preco = $_POST["txtPreco"];
$estoque = $_POST["txtEstoque"];
if (empty($nomeprod)) {
echo "Preencha as informações corretamente.";
exit;
} else {
$SQL = "UPDATE produto SET nomeprod= '".$nomeprod."', descricaoprod =
'".$descricaoprod."', preco=".$preco." WHERE idprod = ".$_GET["id"];
if ($conn->query($SQL) === TRUE) {
echo "<script>alert('Registro atualizado com sucesso.');</script>";
echo "<script>window.location = 'index.php';</script>";
} else {
echo "<script>alert('Erro ao editar o registro.');</script>";
echo "<script>window.location = 'index.php';</script>";
}
}
}
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title></title>
</head>
<body>
<?php
if (isset($_GET["id"])) {
if (is_numeric($_GET["id"])) { 
$SQL = "SELECT * FROM produto WHERE idprod = " . $_GET["id"];
$executa = $conn->query($SQL);
$resultado = $executa->fetch_assoc();
?>
<fieldset>
<legend>Atualizar pessoa</legend>
<form name="frm_produto" method="POST"
action="updateCliente.php?id=<?php echo $_GET["id"];?>">
 Nome:<input type="text" name="txtNome" required="required"
value="<?php echo $resultado["nomeprod"]; ?>"/>
<br/>
 Descrição:<input type="text" name="txtDescricao"
required="required" value="<?php echo $resultado["descricaoprod"]; ?>"/>
<br/>
 Preço:<input type="text" name="txtPreco" required="required"
value="<?php echo $resultado["preco"]; ?>"/>
<br/>
<br/>
<input type="submit" value="Atualizar">
<a href="index.php"><input type="button" name="btnCancelar" value="Voltar"></a>
</form>
</fieldset>
<?php
}
}
?>
</body>
</html>