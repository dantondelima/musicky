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
    <div class="row my-3">
      <div class="col-md-7 mx-0 px-0">
        <div class="form">
          <input type="text" class="form-control" placeholder="Título">
          <br>
          <input type="text" class="form-control" placeholder="Álbum/música">
          <br>
          <label for="exampleFormControlTextarea1">Escreva sua confissão</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>        
      </div>
      <div class="col-md-5">
        <h6 class="escolha-cor"><span class="titulo">[ </span> Escolha uma das cores <span class="titulo"> ]</p></h6>
            <div class="linha-cores-1">
              <a class="btn btn-cores mx-4 border-dark btn-shadow" style="background-color: #d4d4d4;" href="#!" role="button"></a>
              <a class="btn btn-cores mx-3 border-dark btn-shadow" style="background-color: #ffadad;" href="#!" role="button"></a>
              <a class="btn btn-cores mx-3 border-dark btn-shadow" style="background-color: #ffbbab;" href="#!" role="button"></a>
              <a class="btn btn-cores mx-3 border-dark btn-shadow" style="background-color: #ffc2a9;" href="#!" role="button"></a>
              <a class="btn btn-cores mx-4 border-dark btn-shadow" style="background-color: #ffcca7;" href="#!" role="button"></a>
            </div>
            <div class="linha-cores-2 my-3">
              <a class="btn btn-cores mx-4 border-dark btn-shadow" style="background-color: #ffd6a5;" href="#!" role="button"></a>
              <a class="btn btn-cores mx-3 border-dark btn-shadow" style="background-color: #feebae;" href="#!" role="button"></a>
              <a class="btn btn-cores mx-3 border-dark btn-shadow" style="background-color: #fdffb6;" href="#!" role="button"></a>
              <a class="btn btn-cores mx-3 border-dark btn-shadow" style="background-color: #e4ffbb;" href="#!" role="button"></a>
              <a class="btn btn-cores mx-4 border-dark btn-shadow" style="background-color: #caffbf;" href="#!" role="button"></a>
            </div>
            <div class="linha-cores-3 my-3">
              <a class="btn btn-cores mx-4 border-dark btn-shadow" style="background-color: #b3fbdf;" href="#!" role="button"></a>
              <a class="btn btn-cores mx-3 border-dark btn-shadow" style="background-color: #9bf6ff;" href="#!" role="button"></a>
              <a class="btn btn-cores mx-3 border-dark btn-shadow" style="background-color: #9eddff;" href="#!" role="button"></a>
              <a class="btn btn-cores mx-3 border-dark btn-shadow" style="background-color: #a0c4ff;" href="#!" role="button"></a>
              <a class="btn btn-cores mx-4 border-dark btn-shadow" style="background-color: #afbbff;" href="#!" role="button"></a>
            </div>
            <div class="linha-cores-4 my-3">      
              <a class="btn btn-cores mx-4 border-dark btn-shadow" style="background-color: #bdb2ff;" href="#!" role="button"></a>
              <a class="btn btn-cores mx-3 border-dark btn-shadow" style="background-color: #debcff;" href="#!" role="button"></a>
              <a class="btn btn-cores mx-3 border-dark btn-shadow" style="background-color: #ffc6ff;" href="#!" role="button"></a>
              <a class="btn btn-cores mx-3 border-dark btn-shadow" style="background-color: #ffe3fe;" href="#!" role="button"></a>
              <a class="btn btn-cores mx-4 border-dark btn-shadow" style="background-color: #fffffc;" href="#!" role="button"></a>
            </div>                 
      </div>
    </div>
    <div class= "row my-1">
        <button class="btn btn-success btn-lg btn-radius btn-shadow btn-form-2" data-mdb-ripple-color="dark" href="">Enviar</button>
        <button class="btn btn-dark btn-lg btn-radius btn-shadow btn-form-2 mx-3" data-mdb-ripple-color="dark" href="">Voltar</button>  
    </div>  
  </div>
</div>
<?php include '../rodape.php'; ?>