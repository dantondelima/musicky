<?php include '../master.php'; ?>
<?php
spl_autoload_register(function ($class_name) {
    include '..\..\\'.$class_name . '.php';
});
use Db\Persiste;
$albuns = Persiste::GetAll('Models\Album');
$musicas = Persiste::GetAll('Models\Musica');
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
            <li class="breadcrumb-item active" aria-current="page">Criar confissão</li>
          </ol>
        </nav>
      </div>
    </div>
    <div class="row">
        <div class="col-md-4 mx-0 px-0">
            <h3>Confissão</h3> 
        </div>
    </div>
    <form action="store.confissao.php" method="POST">
      <div class="row mb-5">
        <div class="col-md-7 mx-0 px-0">
          <div class="form">
            <input type="text" class="form-control" placeholder="Título" name="titulo">
            <br>
            <div class="form-group">
              <label for="exampleFormControlSelect1">Selecione abaixo o tipo de confissão desejada:</label>
                <select class="form-control" id="tipo" searchable="Pesquise aqui.." name="tipo">
                  <option value="1" selected>Confissão sobre música</option>
                  <option value="2">Confissão sobre álbum</option>
                </select>
            </div>
            <div class="form-group" id="div-musica">
                <select name="musica" id="musica" class="form-control">
                <option value=""></option>
                <?php 
                  foreach($musicas as $musica){
                    $musica = $musica->toArray()
                ?>
                  <option value="<?= $musica['id'] ?>"><?= $musica['nome'] ?></option>
                <?php } ?>
                </select>
            </div>
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
              <label for="exampleFormControlTextarea1">Escreva sua confissão:</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="descricao"></textarea>
          </div>        
        </div>
        <input type="hidden" name="cor" value="">
        <div class="col-md-4 mx-4">
          <h6 class="escolha-cor"><span class="titulo">[ </span> Escolha uma das cores <span class="titulo"> ]</p></h6>
            <div class="row justify-content-center">  
              <div class="row my-2 justify-content-center">
                <div class="col-3">
                  <a class="btn btn-cores mx-3 border-dark btn-shadow" style="background-color: #d4d4d4;" name="color" role="button"></a>
                </div>
                <div class="col-3">
                  <a class="btn btn-cores mx-3 border-dark btn-shadow" style="background-color: #ffadad;" name="color" role="button"></a>
                </div>
                <div class="col-3">
                  <a class="btn btn-cores mx-3 border-dark btn-shadow" style="background-color: #ffbbab;" name="color" role="button"></a>
                </div>
                <div class="col-3">
                  <a class="btn btn-cores mx-3 border-dark btn-shadow" style="background-color: #ffc2a9;" name="color" role="button"></a>
                </div>
              </div>
              <div class="row my-3 justify-content-center">
                <div class="col-3">
                  <a class="btn btn-cores mx-3 border-dark btn-shadow" style="background-color: #ffcca7;" name="color" role="button"></a>
                </div>
                <div class="col-3">
                  <a class="btn btn-cores mx-3 border-dark btn-shadow" style="background-color: #ffd6a5;" name="color" role="button"></a>
                </div>
                <div class="col-3">
                  <a class="btn btn-cores mx-3 border-dark btn-shadow" style="background-color: #f5ae61;" name="color" role="button"></a>
                </div>
                <div class="col-3">
                  <a class="btn btn-cores mx-3 border-dark btn-shadow" style="background-color: #f5d261;" name="color" role="button"></a>
                </div>
              </div>
              <div class="row my-3 justify-content-center">
                <div class="col-3">
                  <a class="btn btn-cores mx-3 border-dark btn-shadow" style="background-color: #bfff5e;" name="color" role="button"></a>
                </div>
                <div class="col-3">
                  <a class="btn btn-cores mx-3 border-dark btn-shadow" style="background-color: #caffbf;" name="color" role="button"></a>
                </div>
                <div class="col-3">
                  <a class="btn btn-cores mx-3 border-dark btn-shadow" style="background-color: #b3fbdf;" name="color" role="button"></a>
                </div>
                <div class="col-3">
                  <a class="btn btn-cores mx-3 border-dark btn-shadow" style="background-color: #9bf6ff;" name="color" role="button"></a>
                </div>
              </div>
              <div class="row my-3 justify-content-center">
                <div class="col-3">
                  <a class="btn btn-cores mx-3 border-dark btn-shadow" style="background-color: #9eddff;" name="color" role="button"></a>
                </div>
                <div class="col-3">
                  <a class="btn btn-cores mx-3 border-dark btn-shadow" style="background-color: #a0c4ff;" name="color" role="button"></a>
                </div>
                <div class="col-3">
                  <a class="btn btn-cores mx-3 border-dark btn-shadow" style="background-color: #afbbff;" name="color" role="button"></a>
                </div>
                <div class="col-3">
                  <a class="btn btn-cores mx-3 border-dark btn-shadow" style="background-color: #bdb2ff;" name="color" role="button"></a>
                </div>
              </div>
              <div class="row my-2 justify-content-center">
                <div class="col-3">
                  <a class="btn btn-cores mx-3 border-dark btn-shadow" style="background-color: #debcff;" name="color" role="button"></a>
                </div>
                <div class="col-3">
                  <a class="btn btn-cores mx-3 border-dark btn-shadow" style="background-color: #ffc6ff;" name="color" role="button"></a>
                </div>
                <div class="col-3">
                  <a class="btn btn-cores mx-3 border-dark btn-shadow" style="background-color: #ebade9;" name="color" role="button"></a>
                </div>
                <div class="col-3">
                  <a class="btn btn-cores mx-3 border-dark btn-shadow" style="background-color: #161616;" name="color" role="button"></a>
                </div>
              </div>
          </div>
        </div>
      </div>
      <div class= "row my-1">
        <div>
          <a href="">    
            <button class="btn btn-success btn-lg btn-radius btn-shadow btn-form-2 btn-form-confissao" data-mdb-ripple-color="dark" href="">Enviar</button>
          </a>  
        </div>
        <div>
          <a href="<?= "http://".$_SERVER['SERVER_NAME']."/musicky"; ?>">
            <button class="btn btn-dark btn-lg btn-radius btn-shadow btn-form-2 mx-3 btn-form-confissao" data-mdb-ripple-color="dark">Voltar</button>
          </a> 
        </div>
      </div>  
    </form>
  </div>
</div>
<?php include '../rodape.php'; ?>