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
    <div class="row my-4 visualizacao-confissao">
      <div class="col-md-6 mx-0 px-0">
        <div style="width: 25rem; height: 25rem" id="card-capa">
            <div class="card-body">
              <h5 class="card-text">Título</h5>
              <h6 class="card-text">Nome do álbum/música</h6>
              <p class="card-text">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam dictum, tortor sagittis placerat porta, magna justo luctus quam, 
              feugiat tincidunt justo eros quis nulla. Nulla lacinia tristique enim, sed posuere sapien porttitor vitae. Etiam a lacus blandit, 
              aliquet ligula tincidunt, aliquet arcu. Vivamus sed lacus ex. Praesent pretium erat vel augue vulputate luctus a sit amet ipsum.
              Sed gravida, erat fermentum interdum bibendum, elit odio varius nisl, ac pellentesque risus quam id lorem. Nulla hendrerit erat ligula,
               sit amet venenatis arcu interdum ut.
              </p>
            </div>
        </div>
      </div>
      <div class="col-md-6 mx-0 px-0">
        <img src="<?= "http://".$_SERVER['SERVER_NAME']."/musicky/Assets/Imagens/Disco.png"; ?>" alt="Disco de vinil" class='img-disco-confissao'>
      </div>
    </div>
    <div class= "row">
        <a href="<?= "http://".$_SERVER['SERVER_NAME']."/musicky"; ?>"><button class="btn btn-dark btn-lg btn-radius btn-shadow btn-confissao" data-mdb-ripple-color="dark">Voltar</button></a>
    </div>  
  </div>
</div>
<?php include '../rodape.php'; ?>