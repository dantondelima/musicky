﻿<?php
spl_autoload_register(function ($class_name) {
    include '..\..\\'.$class_name . '.php';
});
use Db\Persiste;

if (isset($_GET['id']))
{
	Persiste::Delete('Models\Musica',$_GET['id']);
}
header('location: lista.musicas.php');
?>