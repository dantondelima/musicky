<?php include '../master.php'; ?>
<?php
spl_autoload_register(function ($class_name) {
    include '..\..\\'.$class_name . '.php';
});
use Db\Persiste;
if(!isset($_GET['pagina'])){
  $_GET['pagina'] = 1;
}
$qtd = count(Persiste::GetAll('Models\Musica'));
$qtdPagina = 6;
$musicas = Persiste::GetPaginate('Models\Musica', $_GET['pagina'], $qtdPagina);
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
            <li class="breadcrumb-item active" aria-current="page">Músicas</li>
          </ol>
        </nav>
      </div>
    </div>
    <div class="row my-3 row-align">
        <div class="col-md-1 mx-0 px-0">
            <h3 class="categorias">Músicas</h3> 
        </div>
        <div class="col-md-11 mx-0 px-0">
          <div class="float-right">
            <a href="<?= "cadastro.musicas.php"; ?>"><button class="btn btn-dark btn-lg btn-radius btn-shadow" data-mdb-ripple-color="dark">Cadastrar música</button></a>
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
        foreach($musicas as $musica){
          $musica = $musica->toArray();
          if($musica['single'] == 2){
            $imagem = ((Persiste::GetById('Models\Album',$musica['album_id']))->toArray())['capa'];
            $imagem = "http://".$_SERVER['SERVER_NAME']."/musicky/Imagens/albuns/".$imagem; 
          }
          else{
            $imagem = "http://".$_SERVER['SERVER_NAME']."/musicky/Imagens/musicas/".$musica['imagem'];
          }
      ?>
        <div class="col-md-4 mx-0">
          <div class="card-categoria">
            <img src="<?= $imagem ?>" class="card-img-top" alt="..."/>
              <div class="card-body">
                <h5 class="card-text"><?= $musica['nome'] ?></h5>
                <div class="row justify-content-center">
                  <a href="<?= "edicao.musicas.php?id=".$musica['id']; ?>" class="btn btn-warning btn-artista my-3 mx-3">Editar</a>
                  <a href="<?= "delete.musicas.php?id=".$musica['id']; ?>" class="btn btn-danger btn-artista my-3 mx-3" onclick="return confirm('Deseja excluir o registro?')">Excluir</a>
                </div>
              </div>
          </div>  
        </div>
      <?php } ?>
    </div>
    <?php 
     if($qtd > $qtdPagina){
        include "../paginacao.php";
     }
    ?>
  </div>
</div>
<?php include '../rodape.php'; ?>