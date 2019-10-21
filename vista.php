<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Galeria de imagenes</title>
   
   
</head>
<body>
    <div>
        <?php
        foreach ($files as $file) {
            echo "<img src='$file' /> ";
            echo "<br>";
        }
        ?>
    </div>
<div >
                    
                    
                    <form action="index.php?method=subirImagen" method="post" enctype="multipart/form-data">
                        <table >
                            <thead>
                                <th>Elige los archivos que quieras subir</th>
                            </thead>
                            <tr>
                                <td>
                                    <div >
                                        <input  name="imagen1" type="file">
                                        <div >
                                            
                                            
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td> 
               
                                    <input type="submit" name="botonSubir" value="Subir"> 
                                </td>
                            </tr>
                        </table>
                    </form>
                    
                    
    
</body>
</html>