<?php
$servername="localhost";
$username="root";
$password="";
$db_name="crud";
$connect= mysqli_connect($servername,$username,$password,$db_name);

$nome=$_POST['nome'];
$marca=$_POST['marca'];
$valor=$_POST['valor'];
$sql = "INSERT INTO produtos(nome,marca,valor) VALUES ('$nome','$marca','$valor');";
if(mysqli_query($connect,$sql)){
    echo "seus dados foram inserido corretamente no banco";
} else{
    echo "algum erro ocorreu durante a execução";
}
?>