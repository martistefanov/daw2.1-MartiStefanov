<!doctype html>
<html>

<head>
    <title>Ejercicio 2</title>
    
    
</head>

<body>
    
<?php
    
$condicion = $_REQUEST['boolean'];
if(condicion == true){
    ?><p> <?php echo "Hola";
    ?></p>
<?php    
}
else{
   ?> <p> <?php echo "adiós";
    ?></p>
    
}

?>

</body>
    
</html>    