<?php
spl_autoload_register(function ($class_name) {
    include '..\..\\'.$class_name . '.php';
});

include '../../Helpers.php';

use Models\Musica;
use Models\Artista_musica;
use Db\Persiste;

if (isset($_POST['nome']))
{
	if(isset($_POST['single'])){
		$single = 1;
		$_POST['album'] = null;
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
	$novaMusica = new Musica(0, $_POST['nome'], $single, $foto, $_POST['album']);
	$id = Persiste::Add($novaMusica);
	
	foreach($_POST['artista'] as $a){
		$novo = new Artista_musica((int)$a, (int)$id);
		Persiste::Add($novo);
	}
	header('location: lista.musicas.php');
}

?>