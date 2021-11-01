<?php
spl_autoload_register(function ($class_name) {
    include '..\..\\'.$class_name . '.php';
});
use Db\Persiste;

if (isset($_GET['id']))
{
	Persiste::Delete('Models\Genero',$_GET['id']);
}
header('location: lista.generos.php');
?>