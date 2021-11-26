<?php
    $paginas = ceil($qtd/$qtdPagina);
    $atual = $_GET['pagina'];
    $url = explode('?', $_SERVER['REQUEST_URI'])[0];
?>

<div class="row my-2">
    <div class="col">
    <nav aria-label="Navegação de página exemplo">
        <ul class="pagination justify-content-center">
            <?php if($atual != 1) { ?>
            <li class="page-item">
                <a class="page-link" href="<?= $url.'?pagina='.($atual-1) ?>">
                    <span aria-hidden="true">&laquo;</span>
                    <span class="sr-only">Anterior</span>
                </a>
            </li>
            <?php } ?>
            <?php 
            if($atual < 3){
                if($paginas > 3){
                    for ($i=1; $i <= 3; $i++) { 
                        $active = ($i == $atual)? 'active' : '';
                        ?>
                            <li class="page-item  <?= $active ?>">
                                <a href="<?= $url.'?pagina='.$i ?>" class="page-link"><?= $i ?></a>
                            </li>
                        <?php
                    }
                }
                else{
                    for ($i=1; $i <= $paginas; $i++) { 
                        $active = ($i == $atual)? 'active' : '';
                        ?>
                            <li class="page-item  <?= $active ?>">
                                <a href="<?= $url.'?pagina='.$i ?>" class="page-link"><?= $i ?></a>
                            </li>
                        <?php
                    }
                }
            }
            elseif($atual+2 > $paginas){
                if($paginas >= 3){
                    for ($i= $paginas - 2; $i <= $paginas; $i++) { 
                        $active = ($i == $atual)? 'active' : '';
                        ?>
                            <li class="page-item  <?= $active ?>">
                                <a href="<?= $url.'?pagina='.$i ?>" class="page-link"><?= $i ?></a>
                            </li>
                        <?php
                    }
                }
                else{
                    for ($i=1; $i <= $paginas; $i++) { 
                        $active = ($i == $atual)? 'active' : '';
                        ?>
                            <li class="page-item <?= $active ?>">
                                <a href="<?= $url.'?pagina='.$i ?>" class="page-link "><?= $i ?></a>
                            </li>
                        <?php
                    }
                }
            }
            else{
                for ($i=$atual-1; $i <= $atual+1; $i++) { 
                    $active = ($i == $atual)? 'active' : '';
                    ?>
                        <li class="page-item  <?= $active ?>">
                            <a href="<?= $url.'?pagina='.$i ?>" class="page-link"><?= $i ?></a>
                        </li>
                    <?php
                }
            }
            ?>
            <?php if($atual != $paginas) { ?>
                <li class="page-item">
                    <a class="page-link" href="<?= $url.'?pagina='.($atual+1) ?>">
                        <span aria-hidden="true">&raquo;</span>
                        <span class="sr-only">Próximo</span>
                    </a>
                </li>
            <?php } ?>
        </ul>
    </nav>
    </div>
</div>  