<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP 1. Back end</title>
    
</head>


<body>


    <h1> Ejercicio 1</h1> 
    <?php
    echo "<strong> Hola mundo</strong>";
    ?>
    </div>

    <h1> Ejercicio 2</h1>
    <?php
    $saludo = "HOLA MUNDO";
    echo $saludo;
    ?>

<h1> Ejercicio 3</h1>
    <?php
    $variab1 = 30;
    $variab2 = 15;

    echo "SUMA= ";
    echo $variab1 + $variab2;
    echo "<br><br>";

    echo "RESTA= ";
    echo $variab1 - $variab2;
    echo "<br><br>";
    
    echo "MULTIPLICACIÓN= ";
    echo $variab1 * $variab2;
    echo "<br><br>";
    
    echo "DIVISIÓN= ";
    echo $variab1 / $variab2;
    echo "<br><br>";
    
    echo "El resto de la división es ";
    echo $variab1 % $variab2;
    ?>
    

    <h1> Ejercicio 4. Transformar en grados Farenheit</h1>
    <?php
    $celsius = 20;
    $farenheit = 9/5;
    $faren= 32;
    $resultado= $celsius * $farenheit;
    echo "2O  GRADOS CENTíGRADOS SON ";
    echo $resultado + $faren;
    echo " FARENHEIT";
    ?>

<h1> Ejercicio 5. Perímetro y área</h1>

<h2> RECTÁNGULO</h2>

    <?php
    $base= 18;
    $altura = 12;
    echo "El perímetro es ";
    echo $base + $base + $altura + $altura ; 
    echo "<br><br>";
    echo "El área es ";
    echo $base * $altura;
    ?>



<h2> Círculo</h2>

    <?php
    $radio = 30;
    $racuadrado= 30*30;
    $pi = 3927/1250;
    $dospi= 2*$pi;
    echo "El perímetro es ";
    echo $dospi*$radio ;
    echo "<br><br>";
    echo "El área es ";
    echo $pi*$racuadrado;

    ?>




</body>
</html>