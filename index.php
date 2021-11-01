<?php include 'Views/master.php'; ?>

<!-- O grid deve ser incluído em container. -->
<div class="container-fluid" style="margin-top:20px">
<div class="row">
  <div class="col-md-10 mx-auto">
    <div class="row">
        <div class="col">
          <img src="Assets\Imagens\logo.png" class="rounded mx-auto d-block" alt="...">
        </div>
    </div>
    <div class="row my-3">
      <div class="col mx-0 px-0">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Home</li>
          </ol>
        </nav>
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
    <div class="row my-3 justify-content-center">
      <div class="row">
        <div class="col-md-4 mx-0 px-5">
        <a href="<?= "Views/confissoes/visualizacao.confissao.php"; ?>"><div class="card my-5 card-confissao" style="width: 18rem; height:18rem;">
            <div class="card-body">
                  <p class="card-text">
                  Título
                  <br>
                  Música/álbum
                  </p>
                  <div>
                    <img src="https://upload.wikimedia.org/wikipedia/pt/e/ea/5_Seconds_of_Summer_Youngblood.png" alt="" class="img-card-middle img-thumbnail border-thumb">
                  </div>
            </div>
            <img src="Assets\Imagens\sim.png" class="card-img"  alt="..."/>      
          </div></a>
        </div>
        <div class="col-md-4 mx-0 px-5">
        <a href="<?= "Views/confissoes/visualizacao.confissao.php"; ?>"><div class="card my-5 card-confissao" style="width: 18rem; height:18rem;">
            <div class="card-body">
                  <p class="card-text">
                  Título
                  <br>
                  Música/álbum
                  </p>
                  <div>
                    <img src="https://upload.wikimedia.org/wikipedia/pt/e/ea/5_Seconds_of_Summer_Youngblood.png" alt="" class="img-card-middle img-thumbnail border-thumb">
                  </div>
            </div>
            <img src="Assets\Imagens\sim.png" class="card-img" alt="..."/>      
          </div></a>
        </div>
        <div class="col-md-4 mx-0 px-5">
        <a href="<?= "Views/confissoes/visualizacao.confissao.php"; ?>"><div class="card my-5 card-confissao" style="width: 18rem; height:18rem;">
            <div class="card-body">
                  <p class="card-text">
                  Título
                  <br>
                  Música/álbum
                  </p>
                  <div>
                    <img src="https://upload.wikimedia.org/wikipedia/pt/e/ea/5_Seconds_of_Summer_Youngblood.png" alt="" class="img-card-middle img-thumbnail border-thumb">
                  </div>
            </div>
            <img src="Assets\Imagens\sim.png" class="card-img" alt="..."/>      
          </div></a>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 mx-0 px-5">
        <a href="<?= "Views/confissoes/visualizacao.confissao.php"; ?>"><div class="card my-5 card-confissao" style="width: 18rem; height:18rem;">
            <div class="card-body">
                  <p class="card-text">
                  Título
                  <br>
                  Música/álbum
                  </p>
                  <div>
                    <img src="https://upload.wikimedia.org/wikipedia/pt/e/ea/5_Seconds_of_Summer_Youngblood.png" alt="" class="img-card-middle img-thumbnail border-thumb">
                  </div>
            </div>
            <img src="Assets\Imagens\sim.png" class="card-img" alt="..."/>      
          </div></a>
        </div>
        <div class="col-md-4 mx-0 px-5">
        <a href="<?= "Views/confissoes/visualizacao.confissao.php"; ?>"><div class="card my-5 card-confissao" style="width: 18rem; height:18rem;">
            <div class="card-body">
                  <p class="card-text">
                  Título
                  <br>
                  Música/álbum
                  </p>
                  <div>
                    <img src="https://upload.wikimedia.org/wikipedia/pt/e/ea/5_Seconds_of_Summer_Youngblood.png" alt="" class="img-card-middle img-thumbnail border-thumb">
                  </div>
            </div>
            <img src="Assets\Imagens\sim.png" class="card-img" alt="..."/>      
          </div></a>
        </div>
        <div class="col-md-4 mx-0 px-5">
        <a href="<?= "Views/confissoes/visualizacao.confissao.php"; ?>"><div class="card my-5 card-confissao" style="width: 18rem; height:18rem;">
            <div class="card-body">
                  <p class="card-text">
                  Título
                  <br>
                  Música/álbum
                  </p>
                  <div>
                    <img src="https://upload.wikimedia.org/wikipedia/pt/e/ea/5_Seconds_of_Summer_Youngblood.png" alt="" class="img-card-middle img-thumbnail border-thumb">
                  </div>
            </div>
            <img src="Assets\Imagens\sim.png" class="card-img" alt="..."/>      
          </div></a>
        </div>
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
<?php include 'Views/rodape.php'; ?>