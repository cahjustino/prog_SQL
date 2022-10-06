<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procedure</title>
</head>
<body>
    <?php
    //importando o arquivo de conexão
        include 'conexao.php';
        if(isset($_POST['qtde'])){

            $qtde = $_POST['qtde'];
            $result = mysqli_query($conexao,"call selecionar_produtos('".$qtde."');");
            print "<h2>resultados</h2>";
            print "<br>";
            while ($linha = mysqli_fetch_assoc($result)){

                print $linha["id"]."-".$linha["descricao"];
                print "<br>";
            }

        }

    ?>
</body>
</html>
