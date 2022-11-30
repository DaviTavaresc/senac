<?php

include("conexao.php");

$codigo_morador= $_POST['codigo_morador'];
$cpf = $_POST['cpf'];
$nome = $_POST['nome'];
$sexo = $_POST['sexo'];
$data_nascimento = $_POST['data_nascimento'];
$cep = $_POST['cep'];

if($nome == "" || $nome == null)
{
    echo "Nome não pode estar vazio!";
}
else
{
    $query = "INSERT INTO morador ( cpf ,nome, sexo, data_de_nascimento, cep) VALUES ('$cpf','$nome','$sexo','$data_nascimento','$cep')";
    $insert = mysqli_query($conn, $query);
    if($insert){
        echo"<script language='javascript' type='text/javascript'>
        alert('morador cadastrado com sucesso!');window.location.
        href='index.html'</script>";
      }else{
        echo"<script language='javascript' type='text/javascript'>
        alert('Não foi possível cadastrar esse morador');window.location
        .href='cadastromorador.html'</script>";
      }

}


?><?php


$query = "select * from morador"; 
$result_query = mysqli_query( $conn, $query );

echo "<table>";
# Exibe os registros na tela 
while ($row = mysqli_fetch_array( $result_query ))
{ 
      echo "<tr>";
      print "<td>" . $row[1] . "<td>" . $row[2] . "<td>" . $row[3];
      echo "</tr>";
}          
echo "</table>";

mysqli_close($conn);



function listamorador(){
      
}
