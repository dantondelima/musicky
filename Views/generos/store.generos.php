<?php
spl_autoload_register(function ($class_name) {
    include '..\..\\'.$class_name . '.php';
});
use Models\Genero;
use Db\Persiste;

if (isset($_POST['nome']))
{
	$novoGenero = new Genero(0, $_POST['nome']);
	if(Persiste::Add($novoGenero)){
		header('location: lista.generos.php');
	}
}

?>