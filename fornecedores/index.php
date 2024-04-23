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
    <title>Tabela Fornecedores</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>nome</th>
                <th>telefone</th>
                <th>endereco</th>
                <th>cnpj</th>
            </tr>
        </thead>

        <tbody>
            <?php
                $sql="SELECT * FROM `fornecedores`;";
                $resultado=mysqli_query($connect,$sql);

                if(mysqli_num_rows($resultado)>0){
                    while($dados=mysqli_fetch_array($resultado)){

            ?>
            <tr>
                <td><?php echo $dados['nome'];?></td>
                <td><?php echo $dados['telefone'];?></td>
                <td><?php echo $dados['endereco'];?></td>
                <td><?php echo $dados['cnpj'];?></td>
            </tr>
            <?php
                 }//finaldowhile
                }//finaldoif
            ?>

        </tbody>
    </table>
</body>
</html>