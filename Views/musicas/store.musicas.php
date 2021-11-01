<?php
spl_autoload_register(function ($class_name) {
    include '..\..\\'.$class_name . '.php';
});

include '../../Helpers.php';

use Models\Musica;
use Db\Persiste;

var_dump($_POST);
if (isset($_POST['nome']) && !empty($_FILES['foto']['name']))
{
	if(isset($_POST['single'])){
		$single = 1;
	}
	else{
		$single = 0;
	}
	$foto = null;
	if(!empty($_FILES['foto']['name'])){
		$original= $_FILES['foto'];
		$originalPath = $GLOBALS['upload_dir'].DIRECTORY_SEPARATOR."Imagens".DIRECTORY_SEPARATOR."musicas".DIRECTORY_SEPARATOR;
		$filepath = date('YmdHis').$_FILES['foto']['name'];
		move_uploaded_file($_FILES['foto']['tmp_name'], $originalPath.$filepath);
		$foto = $filepath;
	}

	$novaMusica = new Musica(0, $_POST['nome'], $single, $foto);
	if(Persiste::Add($novaMusica)){
		header('location: lista.musicas.php');
	}
}

?>