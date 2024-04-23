<?php
$servername="localhost";
$username="root";
$password="";
$db_name="crud";
$connect= mysqli_connect($servername,$username,$password,$db_name);

$nome=$_POST['nome'];
$sobrenome=$_POST['sobrenome'];
$idade=$_POST['idade'];
$email=$_POST['email'];
$sql = "INSERT INTO clientes(nome,sobrenome,idade,email) VALUES ('$nome','$sobrenome','$idade','$email');";
if(mysqli_query($connect,$sql)){
    echo "seus dados foram inserido corretamente no banco";
} else{
    echo "algum erro ocorreu durante a execução";
}
?>