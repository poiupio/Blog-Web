<?php
    include ('media.php');
    @$directory="img";
    @$dirint = dir($directory);
    $cont=1;
    echo '<div class="fotosfont">';
    while ((@$archivo = @$dirint->read()) !== false)
    {   
        if ($cont>2){
            if (@preg_match( '/'.$gif.'/i', $archivo ) || @preg_match( '/'.$jpg.'/i', $archivo ) || @preg_match( '/'.$png.'/i', $archivo )){
                echo '<img id="myImg" class="img" src=" '.@$directory."/".@$archivo.'" title="'.@$archivo.'"/>';
            }
         }
        $cont++;
    }
    echo '</div>';
    @$dirint->close();
    
?>