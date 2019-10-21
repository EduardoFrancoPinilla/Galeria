<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Galeria de imagenes</title>
   
   
</head>
<body>
<div id="subirImagenes">
                    
                    
                    <form action="#" method="POST" enctype="multipart/form-data">
                        <table id="formularioSubida" border="0">
                            <thead>
                                <th>Elige los archivos que quieras subir</th>
                            </thead>
                            <tr>
                                <td>
                                    <div class="inputImagenModificado">
                                        <input class="inputImagenOculto" name="imagen1" type="file">
                                        <div class="inputParaMostrar">
                                            <input>
                                            <img src="imagenes/button_select2.gif">
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td> 
                                    <input type="button" id="botonAnnadir" onClick="agregarFila('formularioSubida','botonAnnadir')" value="Añadir archivo" style="width:138px;">        
                                    <input type="submit" name="botonSubir" value="Subir"> 
                                </td>
                            </tr>
                        </table>
                    </form>
                    
                    <?php
                        // Subir todas las imagenes
                        if(isset($_POST['botonSubir'])){
                            subirImagenes('prueba',$conexion);
                        }
                    ?>
    
</body>
</html>