<?php
spl_autoload_register(function ($class_name) {
    include '..\..\\'.$class_name . '.php';
});

include '../../Helpers.php';

use Models\Confissao;
use Db\Persiste;

if (isset($_POST['nome']))
{
	$original= $_FILES['foto'];
	$originalPath = $GLOBALS['upload_dir'].DIRECTORY_SEPARATOR."Imagens".DIRECTORY_SEPARATOR."artistas".DIRECTORY_SEPARATOR;
	$filepath = date('YmdHis').$_FILES['foto']['name'];
	move_uploaded_file($_FILES['foto']['tmp_name'], $originalPath.$filepath);
	$foto = $filepath;

	$novoArtista = new Artista(0, $_POST['nome'], $foto);
	if(Persiste::Add($novoArtista)){
		header('location: lista.artistas.php');
	}
}

?>