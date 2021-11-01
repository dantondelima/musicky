<?php
spl_autoload_register(function ($class_name) {
    include '..\..\\'.$class_name . '.php';
});
use Models\Genero;
use Db\Persiste;

if (isset($_POST['id']) && isset($_POST['nome']))
{
	$genero = new Genero($_POST['id'],$_POST['nome']);
	Persiste::Update($genero);
}
header('location: lista.generos.php');
?>