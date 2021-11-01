<?php
spl_autoload_register(function ($class_name) {
    include '..\..\\'.$class_name . '.php';
});

include '../../Helpers.php';

use Models\Album;
use Models\Artista_album;
use Db\Persiste;


if (isset($_POST['nome']) && !empty($_FILES['foto']['name']))
{
	
	$original= $_FILES['foto'];
	$originalPath = $GLOBALS['upload_dir'].DIRECTORY_SEPARATOR."Imagens".DIRECTORY_SEPARATOR."albuns".DIRECTORY_SEPARATOR;
	$filepath = date('YmdHis').$_FILES['foto']['name'];
	move_uploaded_file($_FILES['foto']['tmp_name'], $originalPath.$filepath);
	$foto = $filepath;

	$novoAlbum = new Album(0, $_POST['nome'], $foto);
	$id = Persiste::Add($novoAlbum);
	foreach($_POST['artista'] as $a){
		$novo = new Artista_album((int)$a, (int)$id);
		Persiste::Add($novo);
	}
	header('location: lista.albuns.php');
}

?>