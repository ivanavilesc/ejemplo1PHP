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
        [Texto directo a la pagina, sin programación ]
        
        <br>
        
        <?php
         require 'html.php';
        ?>
       
        <?php 
        /* Acabo de crear una funcion de PHP llamada foo() */
        function foo(){    
        echo "Ahora estoy llamando el include desde una funcion ! :D ";
        include 'codigoinclude.php';        
        }
        
        ?>        
        <br>
        
        <?php
        echo "PHP llamado directo con include !";
        include 'codigoinclude.php';
        ?>
        
        <br>
        <?php
            /* Esto es codigo */
            $saludo="Mundo Variable";       
            echo "Hola Mundo !2";
            echo "<br>";
            echo "Hola ".$saludo;
        ?>
        <br>
        
        
        <?php 
        echo "Uso de la funcion foo !";        
        foo();
        ?>
        
        <?php
            /*
             * Declaración de valores de un arreglo, luego recorrer arreglo con foreach
             *  en este caso, el arreglo se llama $meses, y los meses que 
             * aparecen en corchetes, son los indices del arreglo
             * luego, se realiza un foreach, que aloja en una varible temporal el contenido del
             * arreglo, según cada ciclo de iteración
             */
        
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
                print " Valor actual de \$meses : $varmeses. \n <br>";
                
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
