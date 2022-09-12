<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TRABAJO PRÁCTICO N° 3. BACKEND</title>
</head>
<body>
    
    <h1> Ejercicio 1</h1> 
    <?php
    $positivo=3;
    if($positivo>0) { echo "<strong> $positivo es un número positivo</strong>";}
    else{echo "<strong> $positivo NO es un número positivo</strong>";}
    ?>


<h1> Ejercicio 2</h1> 
    <?php
    $numerito=5;
    if($numerito>1 && $numerito<10) {echo "<strong> $numerito  es mayor que 1 y menor que 10 </strong>";}
    else {echo "<strong> $numerito  NO cumple condición 1<$numerito<10</strong>";}
    ?>


<h1> Ejercicio 3 </h1> 
    <?php
    $nume=15;
    if($nume>10 xor $nume<2) {echo "<strong> $nume  es mayor que 10 o menor que 2 </strong>";}
    else {echo "<strong> $nume  NO cumple condición </strong>";}
    ?>




<h1> Ejercicio 4 </h1> 
    <?php
    $numero1=3;
    $numero2=6;
        if($numero1>$numero2) { $suma=$numero1+$numero2; $resta=$numero1 - $numero2;
            echo "<strong>  Suma= $suma, Resta=$resta </strong>";}
    elseif ($numero2>$numero1){ $multip=$numero1*$numero2;
        $div=$numero1/$numero2;
        $resto=$numero1/$numero2;
        echo "<strong> Multiplicación=$multip, división=$div y resto= $resto </strong>";}
else {echo "Los números ingresados son iguales";}
    ?>






    




    
</body>
</html> 