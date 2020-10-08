<!doctype html>
<html>

<head>
    <title>Ejercicio 1</title>
    
    
</head>


<body>
    
<ul>
   
<?php

$contador = 0;
$num = 0;
while($contador < 10){
    
    $contador = ($contador +1);
    $num = ($num +1);
    ?> <li> <?php echo "numero " . $num; ?> </li>
    
<?php    
}

?>

</ul>


</body>   
    
    
</html>