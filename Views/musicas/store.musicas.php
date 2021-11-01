<?php
spl_autoload_register(function ($class_name) {
    include '..\..\\'.$class_name . '.php';
});

include '../../Helpers.php';

use Models\Musica;
use Db\Persiste;

if (isset($_POST['nome']) && !empty($_FILES['foto']['name']))
{
	$original= $_FILES['foto'];
	$originalPath = $GLOBALS['upload_dir'].DIRECTORY_SEPARATOR."Imagens".DIRECTORY_SEPARATOR."artistas".DIRECTORY_SEPARATOR;
	$filepath = date('YmdHis').$_FILES['foto']['name'];
	move_uploaded_file($_FILES['foto']['tmp_name'], $originalPath.$filepath);
	$foto = $filepath;

	$novoMusica = new Musica($_POST['nome'], $foto);
	if(Persiste::Add($novoArtista)){
		header('location: lista.artistas.php');
	}
}

?>