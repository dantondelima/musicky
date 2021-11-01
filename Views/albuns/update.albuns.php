<?php
spl_autoload_register(function ($class_name) {
    include '..\..\\'.$class_name . '.php';
});

include '../../Helpers.php';

use Db\Persiste;
use Models\Album;

if (isset($_POST['id']) && isset($_POST['nome']))
{
	$foto = null;
	if(!empty($_FILES['foto']['name'])){
		$original= $_FILES['foto'];
		$originalPath = $GLOBALS['upload_dir'].DIRECTORY_SEPARATOR."Imagens".DIRECTORY_SEPARATOR."albuns".DIRECTORY_SEPARATOR;
		$filepath = date('YmdHis').$_FILES['foto']['name'];
		move_uploaded_file($_FILES['foto']['tmp_name'], $originalPath.$filepath);
		$foto = $filepath;
	}

	$album = new Album($_POST['id'], $_POST['nome'], $foto);
	Persiste::Update($album);
	header('location: lista.albuns.php');
}
?>