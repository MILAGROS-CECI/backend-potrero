<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1> Ejercicio 1</h1>
<?php 


$i= 1;
    
while ($i<101){ print "$i \n";
$i++;}


?>

<h1> Ejercicio 2</h1>

<?php 


$i= 100;

   
while ($i>0){ print "$i\n";
    $i--;}


?>


<h1> Ejercicio 3</h1>


<?php 


$i= 0;
   
while ($i<101) 
{$i++; if ($i%2==0){echo"$i\n";}}
?>


<h1> Ejercicio 4</h1>


<?php 


$i= 0;
   
while ($i<100) 
{$i++; if ($i%2==1){echo"$i\n";}}
?>


<h1> Ejercicio 5</h1>
<?php 

$resultado=0;
$i= 1;
    
for ($i=1;$i<=20;$i++){ echo " i es $i y resultado es $resultado \n"; $resultado+=$i; echo "resultado :$resultado\n<br/>";
}


?>

<h1> Ejercicio 6</h1>



<?php 

$resultado=0;
$i= 1;
   
while ($i<21) 
{$i++; if ($i%2==0){echo " i es $i y resultado es $resultado \n"; $resultado+=$i; echo "resultado :$resultado\n<br/>";
}
}
?>





</body>
</html>