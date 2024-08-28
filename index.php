<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Atv5 </title>
</head>
<body>
    
<form method="post">
    <h2> Qual a base do triângulo?</h2>
    <input type="number" id="base" name="base" step="0.01" required></br>
    <h2>Qual a altura do triângulo?</h2>
    <input type="number" id="altura" name="altura" step="0.01" required></br>
    <h2> Área do triângulo</h2>
    <button type="submit" name="calcular_area">Calcular</button><br>
 </form>

<?php
echo '</br>';
    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        if(isset($_POST['calcular_area'])){
            $base = $_POST['base'];
            $altura = $_POST['altura'];
            $area = ($base * $altura) / 2;
            echo "A área do triângulo é: $area <br/>";
        }
    }

    if($area > 100) {
        echo '<p> A área é maior ou igual a 100 </p>';
    }else{
        echo '<p> A área é menor ou igual a 100 </p>';
    }
    
?>
</body>
</html>
