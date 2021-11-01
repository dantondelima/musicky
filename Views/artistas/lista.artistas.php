<?php include '../master.php'; ?>
<?php
spl_autoload_register(function ($class_name) {
    include '..\..\\'.$class_name . '.php';
});
use Db\Persiste;
use Models\Artista;
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
            <li class="breadcrumb-item active" aria-current="page">Artistas</li>
          </ol>
        </nav>
      </div>
    </div>
    <div class="row my-3 row-align">
        <div class="col-md-1 mx-0 px-0">
            <h3 class="categorias">Artistas</h3> 
        </div>
        <div class="col-md-11 mx-0 px-0">
          <div class="float-right">
            <a href="<?= "cadastro.artistas.php"; ?>"><button class="btn btn-dark btn-lg btn-radius btn-shadow" data-mdb-ripple-color="dark">Cadastrar artista</button></a>
          </div>
        </div>
    </div>
    <div class="row my-3">
      <div class="col-md-11 mx-0 px-0">
          <input type="search" id="form1" class="form-control" placeholder="Pesquisar"
            aria-label="Search"/>
      </div>
      <div class="col-md-1 mx-0 px-0">
          <button type="button" class="btn btn-outline-dark btn-block">
              <i class="fas fa-search"></i>
          </button>
      </div>
    </div>
    <div class= "row my-4">
      <?php 
        foreach($artistas as $artista){
          $artista = $artista->toArray()
      ?>
      <div class="col-md-4 mx-0">
        <div class="card-categoria">
          <img src="<?= "http://".$_SERVER['SERVER_NAME']."/musicky/Imagens/artistas/".$artista['foto']; ?>" class="card-img-top" alt="..."/>
            <div class="card-body">
              <h5 class="card-text"><?= $artista['nome'] ?></h5>
              <div class="row justify-content-center">
                  <a href="<?= "edicao.artistas.php?id=".$artista['id']; ?>" class="btn btn-warning btn-artista my-2 mx-3">Editar</a>
                  <a href="<?= "delete.artistas.php?id=".$artista['id']; ?>" class="btn btn-danger btn-artista my-2 mx-3" onclick="return confirm('Deseja excluir o registro?')">Excluir</a>
              </div>
            </div>
        </div>  
      </div>
      <?php } ?>
    </div>
    <div class="row my-2">
      <div class="col">
        <nav aria-label="Navegação de página exemplo">
          <ul class="pagination justify-content-center">
            <li class="page-item">
              <a class="page-link" href="#" aria-label="Anterior">
                <span aria-hidden="true">&laquo;</span>
                <span class="sr-only">Anterior</span>
              </a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
              <a class="page-link" href="#" aria-label="Próximo">
                <span aria-hidden="true">&raquo;</span>
                <span class="sr-only">Próximo</span>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </div>  
  </div>
</div>
<?php include '../rodape.php'; ?>