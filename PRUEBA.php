<?php

echo$_SERVER["PHP_SELF"];

if(isset($_POST['btnSubir']) && $_POST['btnSubir'] == 'Subir'){
    if(is_uploaded_file($_FILES['archivoEnviado']['tmp_name'])){
        $nombre = $_FILES['archivoEnviado']['name'];
        move_uploaded_file($_FILES['archivoEnviado']['tmp_name'],"./uploads/{$nombre}");

        echo "<p>Archivo $nombre subido con éxito</p>";
    }
}

?>
<html>
<body>
    <form enctype="multipart/form-data" action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
        <input type="file">
        <input type="submit" value="Subir" name="btnSubir">
    </form>
</body>

</html>