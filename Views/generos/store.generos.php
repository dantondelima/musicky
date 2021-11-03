<?php
spl_autoload_register(function ($class_name) {
    include '..\..\\'.$class_name . '.php';
});
use Models\Genero;
use Db\Persiste;


	$novoGenero = new Genero(0, $_POST['nome']);
	Persiste::Add($novoGenero);
		header('location: lista.generos.php');
	

?>