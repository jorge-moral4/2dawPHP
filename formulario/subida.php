<?php
    if(isset($_POST['btnSubir'])&& $_POST['btnSubir'] == 'Subir')
        if(is_uploaded_file($_FILES['archivo']['tmp_name'])){
            //subido con éxito al temporal
            $nombre = $_FILES['archivo']['name'];
            move_uploaded_file($_FILES['archivo']['tmp_name'],"./descargas/{$nombre}");

            echo "El archivo $nombre subido con éxito";
        }

?>