<?php
    $operando1 = (int) $_REQUEST["operando1"];
    $operando2 = (int) $_REQUEST["operando2"];
    $operacion = $_REQUEST["operacion"];
    $errorDivCero = false;

    switch($operacion){
        case "sum":    
           $resultado = $operando1 + $operando2;
            break;
        case "res":
            $resultado = $operando1 - $operando2;
            break;
        case "mul":
            $resultado = $operando1 * $operando2;
            break;
        case "div":
            if($operando2 == 0){
                $errorDivCero = true;
                break;
            }else{
                $resultado = $operando1 / $operando2;
                break;
            }
            
    }


?>

<!doctype html>
<html>

<head>
    <title>Ejercicio 1</title>
    <meta charset="utf-8">
    
</head>


<body>
    
    
    
    <?php 
        if($errorDivCero == true){
            echo "Error no se admite '0' como divisor";
      
        }elseif($errorDivCero == false){
            
           echo "<p>El resultado de la operacion es: $resultado</p>";
            
        }    
    ?>
     
    <form action="12a-calculadora-formulario.php">
        
    <input type="submit" value="Restablecer">
        
    </form>
    
    
    

</body>   
    
    
</html>