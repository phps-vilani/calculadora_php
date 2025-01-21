<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <form method="post" action=''>
        
        <label for="valor1">Valor 1:</label>
        <br>
        <input type="text" id="valor1" name="valor1">
        <br><br>
        <label for="valor2">Valor 2:</label>
        <br>
        <input type="text" id="valor2" name="valor2">
        <br><br>
        <input type="submit" name="calcular" class="button" value="Calcular" />
        
        <input type="submit" name="subtrair" class="button" value="Subtrair" />
        <br><br>
    </form>

    <?php
        if(array_key_exists('calcular', $_POST)){
            calcular();
        }
        
        if(array_key_exists('subtrair', $_POST)){
            subtrair();
        }

        function calcular(){
            echo "O resultado é: ", $_POST['valor1'] + $_POST['valor2'];
        }
        
        function subtrair(){
            echo "O resultado é: ", $_POST['valor1'] - $_POST['valor2'];
        }

    ?>
</body>
</html>