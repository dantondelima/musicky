<?php include '../master.php'; ?>

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
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Artistas</a></li>
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
    <div class="row my-3">
      <div class="col-md-12 mx-0 px-0">
        <div class="form">
          <input type="text" class="form-control" placeholder="Nome do artista">
        </div>
      </div>
    </div>
    <div class="row my-3">
      <div class="col-md-12 mx-0 px-0">
        <form>
          <div class="form-group">
            <label for="exampleFormControlFile1">Escolha uma foto do artista</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1">
          </div>
        </form>
      </div>
    </div>
    <div class= "row my-2">
        <button class="btn btn-success btn-lg btn-radius btn-shadow btn-form-3" data-mdb-ripple-color="dark" href="">Enviar</button>
        <button class="btn btn-dark btn-lg btn-radius btn-shadow btn-form-3 mx-3" data-mdb-ripple-color="dark" href="">Voltar</button>  
    </div>  
  </div>
</div>
<?php include '../rodape.php'; ?>