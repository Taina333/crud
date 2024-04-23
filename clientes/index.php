<?php
$servername="localhost";
$username="root";
$password="";
$db_name="crud";
$connect= mysqli_connect($servername,$username,$password,$db_name);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="./css/index.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela Clientes</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>nome</th>
                <th>sobrenome</th>
                <th>idade</th>
                <th>email</th>
            </tr>
        </thead>

        <tbody>
            <?php
                $sql="SELECT * FROM `clientes`;";
                $resultado=mysqli_query($connect,$sql);

                if(mysqli_num_rows($resultado)>0){
                    while($dados=mysqli_fetch_array($resultado)){

            ?>
            <tr>
                <td><?php echo $dados['nome'];?></td>
                <td><?php echo $dados['sobrenome'];?></td>
                <td><?php echo $dados['idade'];?></td>
                <td><?php echo $dados['email'];?></td>
                <td><a href="editar.php?id=<?php echo $dados['id'];?>" target="_black">editar</a></td>
            </tr>
            <?php
                 }//finaldowhile
                }//finaldoif
            ?>

        </tbody>
    </table>
    <a href="formularioC.html" target="_black">inserir novos clientes</a>
</body>
</html>