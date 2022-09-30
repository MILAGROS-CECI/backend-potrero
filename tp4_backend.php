<h1> Ejercicio 1<h1>

<?php 
$numerospares= ["2","4","6","8","10","12","14","16","18","20"];
print "<pre>\n";
foreach($numerospares as $valor){print "<p>$valor</p>\n";}
?>



<h1> Ejercicio 2<h1>
<?php 
$valores=["Pedro","Ana","34","1",];
print "<pre>\n";
print_r ($valores);
?>





<h1> Ejercicio 3<h1>
<?php 
$datos= ['Nombre'=>"Pedro",'Apellido'=>"Torres",'Direccion'=>"Avenida Mayor 3703",'Telefono'=>1122334455];
print "<pre>\n";
print "Nombre:$datos[Nombre]";
print "<pre>\n";
print "Apellido: $datos[Apellido]";
print "<pre>\n";
print "Direccion: $datos[Direccion]";
print "<pre>\n";
print "El numero telefonico es $datos[Telefono]";
?>



<h1> Ejercicio 4<h1>
<?php 
$valores=["Madrid","Barcelona","Londres"," New York","Los Ángeles","Chicago"];
print "<pre>\n";
foreach ($valores as $valor){
    print "<p>$valor</p>\n";
}
?>



<h1> Ejercicio 5<h1>
<?php 
$indices= [ 'Madrid'=>"MD",'Barcelona'=>"BC",'Londres'=>"LD",'New_York'=>"NY",'Los_Angeles'=>"LA",'Chicago'=>"CCG",];
print "<pre>\n";
print "El indice de Madrid es $indices[Madrid]";
print "<pre>\n";
print "El indice de Barcelona es $indices[Barcelona]";
print "<pre>\n";
print "El indice de Londres es $indices[Londres]";
print "<pre>\n";
print "El indice de New York es $indices[New_York]";

print "<pre>\n";
print "El indice de Los Angeles es $indices[Los_Angeles]";
print "<pre>\n";
print "El indice de Chicago es $indices[Chicago]";
print "<pre>\n";
?>






  