<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        Texto sin programación 
        <br>
        <?php
            $saludo="Mundo Variable";       
            echo "Hola Mundo !2";
            echo "Hola ".$saludo;
        ?>
        <br>
        
        <?php
            $meses["enero"]="verano";
            $meses["febrero"]="verano";
            $meses["marzo"]="verano/otoño";
            $meses["abril"]="otoño";
            $meses["mayo"]="otoño/invierno";
            $meses["junio"]="invierno";
            $meses["julio"]="invierno";
            $meses["agosto"]="invierno";
            $meses["septiembre"]="invierno/primavera";
            $meses["octubre"]="primavera";
            $meses["noviembre"]="primavera";
            $meses["diciembre"]="primavera/verano";
            
            foreach($meses as $varmeses){
                print " Valor actual de \$meses : $varmeses. \n ";
                
            }
          
        ?>
        
        
        <br>
        <br>
        
        
        Variables globales $_SERVER
        <br>
        <pre>
        
        <?php
        var_dump($_SERVER)
        /*
        Texto comentado
        */
        ?>
        </pre>
        
        
    </body>
</html>
