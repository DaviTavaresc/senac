<?php

include("conexao.php");

$cep = $_POST['cep'];
$numero = $_POST['numero'];
$data_constrcao = $_POST['data_construcao'];
$data_vistoria = $_POST['data_vistoria'];
$complemento = $_POST['complemento'];
$nome_edificio = $_POST['nome_edificio'];

if($nome_edificio == "" || $nome_edificio == null)
{
    echo "Nome não pode estar vazio!";
}
else
{
    $query = "INSERT INTO edificio( cep ,numero, data_construcao, data_vistoria, complemento,nome_edificio) VALUES ('$cep','$numero','$data_construcao','$data_vistoria','$complemento','$nome_edificio')";
    $insert = mysqli_query($conn, $query);
    if($insert){
        echo"<script language='javascript' type='text/javascript'>
        alert('edificio cadastrado com sucesso!');window.location.
        href='index.html'</script>";
      }else{
        echo"<script language='javascript' type='text/javascript'>
        alert('Não foi possível cadastrar esse edificio');window.location
        .href='cadastroedifcio.html'</script>";
      }

}


?>