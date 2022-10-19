<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMC</title>
</head>
<body>
    <h1>Calculo da média</h1>
    <?php
    if(!isset($_GET['submit'])){
    }
    ?>
    <form action="media1.php" method="get">
    <input type="text" name="nota1">
    <br>
    <label for="Peso">Coloque sua primeira nota!</label>
    <br>
    <input type="text" name="nota2">
    <br>
    <label for="Altura">Coloque sua segunda nota!</label>
    <br>
    <input type="submit" name="calcular" value="Calcular">
    <br>
    <br>
  
    </form>
</body>
</html>