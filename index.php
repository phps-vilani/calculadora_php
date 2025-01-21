<!DOCTYPE html>
<html lang="en">
<!-- <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head> -->
<head>
    <meta charset="UTF-8">
    <title>Calculadora PHP</title>
    <link rel="stylesheet" href="style.css"> <!-- Substitua "style.css" pelo caminho correto do seu arquivo CSS -->
</head>
<body>
    <!-- <form method="post" action=''>
        
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
    </form> -->

    <div class="container">
        <div class="box">
            <div class="visor">
                <a class="texto-visor">0</a>
            </div>
            <!-- <div class="container-botoes-numeros"> -->
                <div class="botoes-numero-linha">
                    <a class="texto-numero-botoes-linha">9</a>
                    <a class="texto-numero-botoes-linha">8</a>
                    <a class="texto-numero-botoes-linha">7</a>
                </div>
                <div class="botoes-numero-linha">
                    <a class="texto-numero-botoes-linha">6</a>
                    <a class="texto-numero-botoes-linha">5</a>
                    <a class="texto-numero-botoes-linha">4</a>
                </div>
                <div class="botoes-numero-linha">
                    <a class="texto-numero-botoes-linha">3</a>
                    <a class="texto-numero-botoes-linha">2</a>
                    <a class="texto-numero-botoes-linha">1</a>
                </div>
            <!-- </div> -->
        </div>
    </div>

    <!-- INICIO CODIGO PHP -->
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