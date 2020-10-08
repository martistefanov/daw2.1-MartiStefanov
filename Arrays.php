
<?php 

    $listaMarcas = array("Volkswagen", "Seat", "Hyundai");


$listaMarcas[3] = "Mercedes-Benz";
$listaMarcas[4] = "Volvo";
$listaMarcas[5] = "Audi";
$listaMarcas[6] = "Honda"
$listaMarcas[7] = "Mitsubishi";
$listaMarcas[8] = "Mini"
$listaMarcas[9] = "Citroen";

?>


<!doctype html>
<html>

<head>
    <title>Ejercicio 1</title>
    
    
</head>


<body>
    
    <label for="marcas">Elige una marca:</label>
    
    <select name="marcas" id="marcas">
        
        <?php for($i = 0; i< sizeof($listaMarcas); i++){    ?>
        
        <option value="<?php echo $listaMarcas[$i] ?>"><?php echo $listaMarcas[$i]   ?>  </option>
    
        <?php } ?>
    
    
    
    </select>


</body>   
    
    
</html>