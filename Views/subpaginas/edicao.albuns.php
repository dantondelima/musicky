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
            <li class="breadcrumb-item"><a href="<?= "http://".$_SERVER['SERVER_NAME']."/musicky/Views/subpaginas/lista.albuns.php"; ?>">Álbuns</a></li>
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
    <div class="row my-3">
      <div class="col-md-8 mx-0 px-0">
        <div class="form">
          <input type="text" class="form-control" placeholder="Nome do álbum">
        </div>
        <div>
          <form>
            <div class="form-group py-5 my-3">
              <label for="exampleFormControlFile1">Escolha uma capa do álbum</label>
              <input type="file" class="form-control-file" id="exampleFormControlFile1">
            </div>
          </form>
        </div>
        <div>
          <button class="btn btn-success btn-lg btn-radius btn-shadow btn-form-2 my-4" data-mdb-ripple-color="dark" href="">Salvar</button>
            <a href="<?= "http://".$_SERVER['SERVER_NAME']."/musicky/Views/subpaginas/lista.albuns.php"; ?>"><button class="btn btn-dark btn-lg btn-radius btn-shadow btn-form-2 mx-3 my-4" data-mdb-ripple-color="dark">Voltar</button></a>
        </div>
      </div>
        <div class="col-md-4 mx-0 px-0">
        <div class="form">
          <img src="https://i.pinimg.com/originals/1d/dc/d2/1ddcd2509de21adfbc51558972d56386.jpg" alt="" class="img-artista img-thumbnail">
        </div>
      </div>
    </div>   
  </div>
</div>
<?php include '../rodape.php'; ?>