<?php include '../master.php'; ?>
<?php
spl_autoload_register(function ($class_name) {
    include '..\..\\'.$class_name . '.php';
});

use Db\Persiste;

if (!isset($_GET['id']))
{
  header('location: ../../index.php');
}
$confissao = (Persiste::GetById('Models\Confissao',$_GET['id']))->toArray();

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
            <li class="breadcrumb-item active" aria-current="page">Visualizar confissão</li>
          </ol>
        </nav>
      </div>
    </div>
    <div class="row">
        <div class="col-md-4 mx-0 px-0">
            <h3>Visualizar confissão</h3> 
        </div>
    </div>
    <div class="row my-4 visualizacao-confissao justify-content-center">
      <div class="col-md-12 mx-0 px-0">
        <div style="width: 25rem; height: 25rem" id="card-capa">
            <div class="card-body">
              <h5 class="card-text"><?= $confissao['titulo'] ?></h5>
              <?php
                if($confissao['tipo'] == 1){
                  $musica = (Persiste::GetById('Models\Musica',$confissao['musica_id']))->toArray();
                  $titulo = $musica['nome'];
                }
                else{
                  $album = ((Persiste::GetById('Models\Album',$confissao['album_id']))->toArray());
                  $titulo = $album['nome'];
                }
              ?>
              <h6 class="card-text"><?= $titulo ?></h6>
              <p class="card-text">
              <?= nl2br($confissao['descricao']) ?>
              </p>
            </div>
        </div>
      </div>
    </div>
    <div class= "row">
      <div>
        <a href="<?= "http://".$_SERVER['SERVER_NAME']."/musicky"; ?>" class="btn-link">
          <button class="btn btn-dark btn-lg btn-radius btn-shadow btn-confissao" data-mdb-ripple-color="dark">Voltar</button>
        </a>
      </div>
    </div>  
  </div>
</div>
<?php include '../rodape.php'; ?>