<?php
include ("Conexao.php");
if(is_numeric($_GET["id"])){
    $idprod = $_GET["id"];
$SQL = "DELETE FROM produto WHERE idprod = $idprod";
if ($conn->query($SQL) === TRUE) {
echo "<script>alert('Registro excluído com sucesso!');</script>";
echo "<script>window.location = 'index.php';</script>";
}
else{
echo "<script>alert('Erro ao excluir o registro!');</script>";
echo "<script>window.location = 'index.php';</script>";
}
}
?>