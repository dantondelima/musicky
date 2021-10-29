<?php include '../master.php'; ?>

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
            <li class="breadcrumb-item"><a href="#">Home</a></li>
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
            <a href="<?= "http://".$_SERVER['SERVER_NAME']."/musicky/Views/subpaginas/cadastro.generos.php"; ?>"><button class="btn btn-dark btn-lg btn-radius btn-shadow" data-mdb-ripple-color="dark">Cadastrar gênero</button></a>
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
          <li class="list-group-item">
            Gênero 1
            <button class='btn btn-danger float-right mx-1' href="">Excluir</button>
            <a href="<?= "http://".$_SERVER['SERVER_NAME']."/musicky/Views/subpaginas/edicao.generos.php"; ?>"><button class='btn btn-warning float-right mx-1'>Editar</button></a>
          </li>
          <li class="list-group-item">
            Gênero 2
            <button class='btn btn-danger float-right mx-1' href="">Excluir</button>
            <button class='btn btn-warning float-right mx-1' href="">Editar</button>
          </li>
          <li class="list-group-item">
            Gênero 3
            <button class='btn btn-danger float-right mx-1' href="">Excluir</button>
            <button class='btn btn-warning float-right mx-1' href="">Editar</button>
          </li>
          <li class="list-group-item">
            Gênero 4
            <button class='btn btn-danger float-right mx-1' href="">Excluir</button>
            <button class='btn btn-warning float-right mx-1' href="">Editar</button>
          </li>
          <li class="list-group-item">
            Gênero 5
            <button class='btn btn-danger float-right mx-1' href="">Excluir</button>
            <button class='btn btn-warning float-right mx-1' href="">Editar</button>
          </li>
        </ul>
      </div>
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