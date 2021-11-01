<?php include '../master.php'; ?>
<?php
spl_autoload_register(function ($class_name) {
    include '..\..\\'.$class_name . '.php';
});

use Db\Persiste;

if (!isset($_GET['id']))
{
  header('location: lista.generos.php');
}
$genero = (Persiste::GetById('Models\Genero',$_GET['id']))->toArray();

?>
<!-- O grid deve ser incluído em container. -->
<div class="container-fluid" style="margin-top:20px">
<div class="row">
  <div class="col-md-10 mx-auto">
    <div class="row">
        <div class="col">
          <img src="<?= "http://".$_SERVER['SERVER_NAME']."/musicky/Assets/Imagens/logo.png"; ?>" class="rounded mx-auto d-block" alt="...">
        </div>
    </div>
    <div class="row my-3">
      <div class="col mx-0 px-0">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= "http://".$_SERVER['SERVER_NAME']."/musicky"; ?>">Home</a></li>
            <li class="breadcrumb-item"><a href="<?= "lista.generos.php"; ?>">Gêneros</a></li>
            <li class="breadcrumb-item active" aria-current="page">Editar</li>
          </ol>
        </nav>
      </div>
    </div>
    <div class="row">
        <div class="col-md-4 mx-0 px-0">
            <h3>Editar</h3> 
        </div>
    </div>
    <form action="update.generos.php" method="POST">
      <div class="row my-3">
        <div class="col-md-12 mx-0 px-0">
          <div class="form">
            <input type="hidden" name="id" value="<?= $genero['id'] ?>">
            <input type="text" class="form-control" placeholder="Gênero" name="nome" value="<?= $genero['nome'] ?>">
          </div>
        </div>
      </div>
      <div class= "row my-2">
          <button class="btn btn-success btn-lg btn-radius btn-shadow btn-form" data-mdb-ripple-color="dark" href="">Salvar</button>
          <a href="<?= "lista.generos.php"; ?>"><button class="btn btn-dark btn-lg btn-radius btn-shadow btn-form mx-3" data-mdb-ripple-color="dark">Voltar</button></a>
      </div> 
    </form>
  </div>
</div>
<?php include '../rodape.php'; ?>