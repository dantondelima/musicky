<?php include '../master.php'; ?>
<?php
spl_autoload_register(function ($class_name) {
    include '..\..\\'.$class_name . '.php';
});

use Db\Persiste;

if (!isset($_GET['id']))
{
  header('location: lista.albuns.php');
}
$album = (Persiste::GetById('Models\Album',$_GET['id']))->toArray();
$artistas = Persiste::GetAll('Models\Artista');
$artistasSelecionados = Persiste::GetSelecionado('Models\Artista_album', $_GET['id'], 'album_id');
$arts = array();
if($artistasSelecionados != null)
  foreach($artistasSelecionados as $artista){
    $artista = $artista->toArray();
    array_push($arts, $artista['artista_id']);
  }
?>
<!-- O grid deve ser incluído em container. -->
<div class="container-fluid geral" style="margin-top:20px">
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
            <li class="breadcrumb-item"><a href="<?= "lista.albuns.php"; ?>">Álbuns</a></li>
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
    <form action="update.albuns.php" method="POST" enctype="multipart/form-data">
      <div class="row my-3">
        <div class="col-md-8 mx-0 px-0">
          <div class="form">
            <input type="hidden" name="id" value="<?= $album['id'] ?>">
            <input type="text" class="form-control" placeholder="Nome do álbum" name="nome" value="<?= $album['nome'] ?>">
          </div>
          <br>
          <div>
            <select name="artista[]" id="artista" class="form-control" multiple>
              <option value=""></option>
              <?php 
                foreach($artistas as $artista){
                  $artista = $artista->toArray()
              ?>
                <option value="<?= $artista['id'] ?>" <?= in_array($artista['id'], $arts)? "selected":"" ?>><?= $artista['nome'] ?></option>
              <?php } ?>
            </select>
          </div>
          <div>
              <div class="form-group py-5 my-3">
                <label for="exampleFormControlFile1">Escolha uma capa do álbum</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="foto">
              </div>
          </div>
          <div>
            <button class="btn btn-success btn-lg btn-radius btn-shadow btn-form-2 my-4" data-mdb-ripple-color="dark" href="">Salvar</button>
              <a href="<?= "lista.albuns.php"; ?>"><button class="btn btn-dark btn-lg btn-radius btn-shadow btn-form-2 mx-3 my-4" data-mdb-ripple-color="dark">Voltar</button></a>
          </div>
        </div>
          <div class="col-md-4 mx-0 px-0">
          <div class="form">
            <img src="<?= "http://".$_SERVER['SERVER_NAME']."/musicky/Imagens/albuns/".$album['capa']; ?>" alt="" class="img-artista img-thumbnail">
          </div>
        </div>
      </div>   
    </form>
  </div>
</div>
<?php include '../rodape.php'; ?>