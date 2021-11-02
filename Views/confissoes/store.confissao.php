<?php
spl_autoload_register(function ($class_name) {
    include '..\..\\'.$class_name . '.php';
});

include '../../Helpers.php';

use Models\Confissao;
use Db\Persiste;

if (isset($_POST['titulo']))
{
	if($_POST['tipo'] == 1){
		$musica = $_POST['musica'];
		$album = null;
	}
	else{
		$album = $_POST['album'];
		$musica = null;
	}
	$novaConfissao = new Confissao(0, $_POST['descricao'], $_POST['titulo'], $_POST['cor'], $_POST['tipo'], $album, $musica);
	if(Persiste::Add($novaConfissao)){
		header('location: ../../index.php');
	}
}

?>