

<!doctype html>
<html>

<head>
    <title>Ejercicio incremento</title>
    
    
</head>


<body>
    

<?php
if (isset($_POST["conta"])){
$conta = $_POST["conta"] + 1;
}
else{
$conta = 0;
}
    
    
    echo $conta;
?>
    

    
    
    
<form name="f1" action="<?=$_SERVER["PHP_SELF"]?>" method="post">
<input type="hidden" name="conta" value="<?=$conta?>">
<input type="submit" value="Incrementar">
</form> 


    
    
    
</body>   
    
    
</html>