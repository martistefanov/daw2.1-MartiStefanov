
<?php 
    $numeroIntroducido = false;
    $numeroSecreto = null;
    if(!isset($_REQUEST["numeroSecreto"]) ){
        $numeroSecreto = false;
        $numeroIntroducido = false;
        
    }else if(isset($_REQUEST["numeroSecreto"]) && $numeroIntroducido == false){
        
        $numeroSecreto = $_REQUEST["numeroSecreto"];
        
    }else{
        
        $numeroIntroducido = $_REQUEST["numeroIntroducido"];
        
    }
    

?>




<!doctype html>
<html>

<head>
    <title>Ejercicio Adivinanzav</title>
    
    
</head>

    
    <?php 
        
        
        
        
    ?>
    

<body>
    
 <?php 
    if($numeroSecreto == false){
        
    
    ?>   
<p>Introduce el numero a adivinar: <br></p>
<form action="" method="post">
    
    <input type="text" name="numeroSecreto"  />
    <input type="submit" name="boton" value="Enviar" />
    
</form>    
    
<?php 
    }
?>
    
<?php 
    
    if(isset($numeroSecreto) && $numeroIntroducido == false){
        
     ?>   
 <p>Mete el numero usuario 2. <br></p>   
 <form action="" method="post" >   
    <input type="text" name="numeroIntroducido" />
    <input type="submit" name="boton" value="Enviar" />
    
  </form>  
    <?php
    
    }else if(isset($numeroSecreto) && $numeroIntroducido != $numeroSecreto){
    
    ?>
    
<p>Vuelve a intentarlo. Estas a <?php echo "($numeroSecreto % 10)"; ?>decimas de distancia.</p>    
<form action="" method="post" >
    
    <input type="text" name="numeroIntroducido" />
    <input type="submit" name="boton" value="Enviar" />
    
 </form>   
    
<?php 
    }
    
?>
 
<?php 
    
    if(isset($numeroSecreto) && $numeroIntroducido == $numeroSecreto){
        
    
?>    
    <h1>!ENHORABUENA HAS ADIVINADO EL NUMERO!</h1>

<?php 
    }
    
?>  
    
</body>   
    
    
</html>