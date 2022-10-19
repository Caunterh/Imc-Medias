<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular IMC</title>
</head>
<body>
    <h1>calcular o IMC</h1>
    <?php
    if(!isset($_GET['submit'])){
    ?>

    <form action="imc.php" method="get">
        <label for="name">Nome</label><br>
        <input name="nome" type="text"><br>
        <label for="Altura">Digite sua altura</label> <br>
        <input name="altura" type="text"> <br>
        <label for="Peso">digite seu peso</label> <br>
        <input name="peso" type="text"> <br>
        <input type="submit" value="Calcular">

    </form>
    <?php
    }
    ?>
</body>
</html>