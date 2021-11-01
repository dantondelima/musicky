<?php
spl_autoload_register(function ($class_name) {
    include '..\..\\'.$class_name . '.php';
});

include '../../Helpers.php';

use Models\Album;
use Db\Persiste;


if (isset($_POST['nome']) && !empty($_FILES['foto']['name']))
{
	
	$original= $_FILES['foto'];
	$originalPath = $GLOBALS['upload_dir'].DIRECTORY_SEPARATOR."Imagens".DIRECTORY_SEPARATOR."albuns".DIRECTORY_SEPARATOR;
	$filepath = date('YmdHis').$_FILES['foto']['name'];
	move_uploaded_file($_FILES['foto']['tmp_name'], $originalPath.$filepath);
	$foto = $filepath;

	$novoAlbum = new Album(0, $_POST['nome'], $foto);
	if(Persiste::Add($novoAlbum)){
		header('location: lista.albuns.php');
	}
}

?>