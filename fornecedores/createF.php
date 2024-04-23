<?php
$servername="localhost";
$username="root";
$password="";
$db_name="crud";
$connect= mysqli_connect($servername,$username,$password,$db_name);

$nome=$_POST['nome'];
$telefone=$_POST['telefone'];
$endereco=$_POST['endereco'];
$cnpj=$_POST['cnpj'];
$sql = "INSERT INTO fornecedores(nome,telefone,endereco,cnpj) VALUES ('$nome','$telefone','$endereco','$cnpj');";
if(mysqli_query($connect,$sql)){
    echo "seus dados foram inserido corretamente no banco";
} else{
    echo "algum erro ocorreu durante a execução";
}
?>