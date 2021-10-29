<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="titulo">
        <a class="navbar-brand" href="/musicky">musicky</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
        </button>
    </div>
    <div class="collapse navbar-collapse justify-content-center" id="collapsibleNavbar">
        <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link text-light" href="<?= "http://".$_SERVER['SERVER_NAME']."/musicky/Views/subpaginas/lista.generos.php"; ?>">Gêneros</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-light" href="<?= "http://".$_SERVER['SERVER_NAME']."/musicky/Views/subpaginas/lista.artistas.php"; ?>">Artistas</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-light" href="<?= "http://".$_SERVER['SERVER_NAME']."/musicky/Views/subpaginas/lista.albuns.php"; ?>">Álbuns</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-light" href="<?= "http://".$_SERVER['SERVER_NAME']."/musicky/Views/subpaginas/lista.musicas.php"; ?>">Músicas</a>
        </li>
        </ul>
    </div>  
    <div>
    <a href="<?= "http://".$_SERVER['SERVER_NAME']."/musicky/Views/subpaginas/cadastro.confissao.php"; ?>"><button class="btn btn-light btn-lg btn-radius btn-shadow" data-mdb-ripple-color="dark">Fazer confissão</button></a>
    </div>
    
</nav>
