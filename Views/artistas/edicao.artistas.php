<?php include '../master.php'; ?>
<?php
spl_autoload_register(function ($class_name) {
    include '..\..\\'.$class_name . '.php';
});

use Db\Persiste;

if (!isset($_GET['id']))
{
  header('location: lista.artistas.php');
}
$artista = (Persiste::GetById('Models\Artista',$_GET['id']))->toArray();

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
            <li class="breadcrumb-item"><a href="<?= "lista.artistas.php"; ?>">Artistas</a></li>
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
    <form action="update.artistas.php" method="POST" enctype="multipart/form-data">
      <div class="row my-3">
        <div class="col-md-8 mx-0 px-0">
          <div class="form">
            <input type="hidden" name="id" value="<?= $artista['id'] ?>">
            <input type="text" class="form-control" placeholder="Nome do artista" name="nome" value="<?= $artista['nome'] ?>">
          </div>
          <div>
            <form>
              <div class="form-group py-5 my-3">
                <label for="exampleFormControlFile1">Escolha uma foto do artista</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="foto">
              </div>
            </form>
          </div>
          <div>
            <button class="btn btn-success btn-lg btn-radius btn-shadow btn-form-2 my-4" data-mdb-ripple-color="dark" href="">Salvar</button>
              <a href="<?= "lista.artistas.php"; ?>"><button class="btn btn-dark btn-lg btn-radius btn-shadow btn-form-2 mx-3 my-4" data-mdb-ripple-color="dark">Voltar</button></a>
          </div>
        </div>
          <div class="col-md-4 mx-0 px-0">
            <div class="form">
              <img src="<?= "http://".$_SERVER['SERVER_NAME']."/musicky/Imagens/artistas/".$artista['foto']; ?>" alt="" class="img-artista img-thumbnail">
            </div>
          </div>
      </div>  
    </form> 
  </div>
</div>
<?php include '../rodape.php'; ?>