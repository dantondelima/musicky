<?php include '../master.php'; ?>
<?php
spl_autoload_register(function ($class_name) {
    include '..\..\\'.$class_name . '.php';
});
use Db\Persiste;
$albuns = Persiste::GetAll('Models\Album');
$artistas = Persiste::GetAll('Models\Artista');
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
            <li class="breadcrumb-item"><a href="<?= "lista.musicas.php"; ?>">Músicas</a></li>
            <li class="breadcrumb-item active" aria-current="page">Cadastro</li>
          </ol>
        </nav>
      </div>
    </div>
    <div class="row">
        <div class="col-md-4 mx-0 px-0">
            <h3>Cadastro</h3> 
        </div>
    </div>
    <form action="store.musicas.php" method="POST" enctype="multipart/form-data">
      <div class="row my-3">
        <div class="col-md-12 mx-0 px-0">
          <div class="form-check">
          <input class="form-check-input" type="checkbox" value="single" id="single" name="single">
            <label class="form-check-label" for="defaultCheck1">Essa música é um single?</label>
          </div>
          <br>
          <div class="form">
            <input type="text" class="form-control" placeholder="Nome da música" name="nome">
            <br>
            <div class="form-group" id="div-album">
                <select name="album" id="album" class="form-control">
                <option value=""></option>
                <?php 
                  foreach($albuns as $album){
                    $album = $album->toArray()
                ?>
                  <option value="<?= $album['id'] ?>"><?= $album['nome'] ?></option>
                <?php } ?>
                </select>
            </div>
            <div class="form-group" id="div-album">
                <select name="artista[]" id="artista" class="form-control" multiple>
                <option value=""></option>
                <?php 
                  foreach($artistas as $artista){
                    $artista = $artista->toArray()
                ?>
                  <option value="<?= $artista['id'] ?>"><?= $artista['nome'] ?></option>
                <?php } ?>
                </select>
            </div>
          </div>
        </div>
      </div>
      <div class="row my-3">
        <div class="col-md-12 mx-0 px-0">
            <div class="form-group" id="div-imagem">
              <label for="exampleFormControlFile1">Escolha uma foto do single</label>
              <input type="file" class="form-control-file" id="exampleFormControlFile1" name="foto">
            </div>
        </div>
      </div>
      <div class= "row my-2">
          <button class="btn btn-success btn-lg btn-radius btn-shadow btn-form-3" data-mdb-ripple-color="dark" href="">Enviar</button>
          <a href="<?= "lista.musicas.php"; ?>"><button class="btn btn-dark btn-lg btn-radius btn-shadow btn-form-3 mx-3" data-mdb-ripple-color="dark">Voltar</button></a>  
      </div>  
    </form>
  </div>
</div>
<?php include '../rodape.php'; ?>