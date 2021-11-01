<?php
spl_autoload_register(function ($class_name) {
    include '..\..\\'.$class_name . '.php';
});

include '../../Helpers.php';

use Db\Persiste;
use Models\Musica;
use Models\Artista_musica;


if (isset($_POST['id']) && isset($_POST['nome']))
{
	
	if(isset($_POST['single'])){
		$single = 1;
	}
	else{
		$single = 2;
	}
	$foto = null;
	if(!empty($_FILES['foto']['name'])){
		$original= $_FILES['foto'];
		$originalPath = $GLOBALS['upload_dir'].DIRECTORY_SEPARATOR."Imagens".DIRECTORY_SEPARATOR."musicas".DIRECTORY_SEPARATOR;
		$filepath = date('YmdHis').$_FILES['foto']['name'];
		move_uploaded_file($_FILES['foto']['tmp_name'], $originalPath.$filepath);
		$foto = $filepath;
	}

	$musica = new Musica($_POST['id'], $_POST['nome'], $single, $foto, $_POST['album']);
	Persiste::Update($musica);
	Persiste::DeleteEspecifico('Models\Artista_musica', $_POST['id'], "musica_id");
	foreach($_POST['artista'] as $a){
		$novo = new Artista_musica($a, $_POST['id']);
		Persiste::Add($novo);
	}
	header('location: lista.musicas.php');
}
?>