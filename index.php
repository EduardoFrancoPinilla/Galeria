<?php

    class App{
    function subirImagenes( $conexion){
       
        foreach ($_FILES  as $key => $value) {
         
            if ($_FILES[$key]["name"] != ''){
                subirImagen($key, $conexion);
            }
        }
        require('vista.php');
    }

    function subirImagen($archivo, $conexion){     
        
        if($_FILES[$archivo]["type"] == "image/jpeg"){
            
           
            if ($_FILES[$archivo]["error"]) {
                echo '<div class="error">Error '.$_FILES["archivo"]["error"].'al intentar subir el archivo '.$_FILES[$archivo]["name"].'</div>';
            }else{
            
           
               
                if (file_exists("imagenes/".$_FILES[$archivo]["name"])) {
                    echo '<div class="error">Ya hay un archivo con nombre '.$_FILES[$archivo]["name"].'. Renombralo y vuelve a subirlo.</div>';   
                }else{
                   
                    move_uploaded_file($_FILES[$archivo]["tmp_name"], "imagenes/".$_FILES[$archivo]["name"]);
                    echo '<div class="subido">Archivo '.$_FILES[$archivo]["name"].' subido.</div>';
                                        
                }
            }
        }else{
             echo '<div class="error">'.$_FILES[$archivo]["name"].': Formato de archivo no permitido. </div>';
        }      
    }
    }

    $App = new App();
if (isset($_GET['method'])) {
    $method = $_GET['method'];
} else {
    $method = 'subirImagenes';
}

$App->$method();
?>