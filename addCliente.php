<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>CRUD Pessoas</title>
</head>
<body>
<fieldset>
<legend>Inserir nova pessoa</legend>
<form action="insertCliente.php" method="post">
<label for="txtNome">Nome: </label>
<input type="text" name="txtNome" required autofocus placeholder="Informe
o nome"><br><br>
<label for="txtSobreNome">Descrição: </label>
<input type="text" name="txtDescricao" required placeholder="Informe o
sobrenome"><br><br>
<label for="txtIdade">Preço: </label>
<input type="number" name="txtPreco" required maxlength="3"
placeholder="Informe a idade"><br><br>
<label for="txtEmail">Estoque: </label>
<input type="text" name="txtEstoque" required autofocus placeholder="Informe
o email"><br><br>
<input type="submit" name="btnSalvar" value="Salvar">
<a href="index.php"><input type="button" name="btnCancelar" value="Cancelar"></a>
</form>
</fieldset>
</body>
