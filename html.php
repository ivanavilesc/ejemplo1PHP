<div></div>
<br>
<div style="font-size: 20px; color: green; background: yellow"> Mensaje desde html.php</div>   
<div class="parrafo1">Segundo Texto</div>
<div class="parrafo2">Tercer Texto</div>
<p id="parrafo1"></p>
<p id="parrafo2"></p>

<div>
    <?php
    /**
     * Este codigo está siendo llamado desde el index.php a traves de un REQUIRE, si este
     * archivo no existiera en el proyecto, la app se caerá, porque es requerido, vale decir, excluyente
     */
    
    echo "Esta pagina de PHP, ha sido llamada a traves de una sentencia REQUIRE";
    ?>
</div>

