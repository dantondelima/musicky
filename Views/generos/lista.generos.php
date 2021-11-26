<?php include '../master.php'; ?>

<?php
spl_autoload_register(function ($class_name) {
    include '..\..\\'.$class_name . '.php';
});
use Db\Persiste;
if(!isset($_GET['pagina'])){
  $_GET['pagina'] = 1;
}
$qtd = count(Persiste::GetAll('Models\Genero'));
$qtdPagina = 6;
$generos = Persiste::GetPaginate('Models\Genero', $_GET['pagina'], $qtdPagina);
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
            <li class="breadcrumb-item active" aria-current="page">Gêneros</li>
          </ol>
        </nav>
      </div>
    </div>
    <div class="row my-3 row-align">
        <div class="col-md-1 mx-0 px-0">
            <h3 class="categorias">Gêneros</h3> 
        </div>
        <div class="col-md-11 mx-0 px-0">
          <div class="float-right">
            <a href="<?= "cadastro.generos.php"; ?>"><button class="btn btn-dark btn-lg btn-radius btn-shadow" data-mdb-ripple-color="dark">Cadastrar gênero</button></a>
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
      <div class="col mx-0 px-0">
        <ul class="list-group">
          <?php
            foreach($generos as $genero){
              $genero = $genero->toArray()
          ?>
          <li class="list-group-item">
            <?= $genero['nome'] ?>
            <a href="<?= "delete.generos.php?id=".$genero['id']; ?>"><button class='btn btn-danger float-right mx-1' onclick="return confirm('Deseja excluir o registro?')">Excluir</button></a>
            <a href="<?= "edicao.generos.php?id=".$genero['id']; ?>"><button class='btn btn-warning float-right mx-1'>Editar</button></a>
          </li>
          <?php 
            }
          ?>
        </ul>
      </div>
    </div>
    <?php 
     if($qtd > $qtdPagina){
        include "../paginacao.php";
     }
    ?>
  </div>
</div>
<?php include '../rodape.php'; ?>