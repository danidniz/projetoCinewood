<?php

if (!isset($_GET['acoes'])) {
    header('Location: acao.php');
} else {
    $acoes = $_GET['acoes'];
}
include('templates/header.php');
include('banco.php');
?>
<main>
    <div class="container">
        <div class="row m-1">
            <div class="col-12 mt-4 text-left">
                <h2 class="h2-Artur">
                    <i>Destaque</i>
                </h2>
                <hr>
            </div>
        </div>
        <div class="row m-1">
            <article class="col-lg-7">

                <div class="text-center mt-3">
                    <img src="<?php echo $acaoPage[$acoes]['caminho']; ?>" class="img-fluid" width=100% heigth="auto" alt="<?php echo $acaoPage[$acoes]['alt']; ?>">

                </div>

                <div class="row">
                    <div class="col-12 mt-3">
                        <div class="text-left">
                            <h1 class="titulo"><?php echo $acaoPage[$acoes]['titulo']; ?></h1>
                        </div>
                    </div>
                </div>



                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="text-monospace">
                            <p class="desc-artur"><?php echo $acaoPage[$acoes]['desc']; ?></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="text-monospace">
                            <p class="cards-artur"><?php echo $acaoPage[$acoes]['cards1']; ?></p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="text-monospace">
                            <p class="cards-artur"><?php echo $acaoPage[$acoes]['cards2']; ?></p>
                        </div>
                    </div>
                </div>
            </article>





            <aside class="col-lg-5 ">
                <div class="row m-1">
                    <div class="col-12 mt-2 text-left ">
                        <h2 class="h2-Artur">Veja também...</h2>
                        <hr>
                    </div>

                </div>
                <?php
                $nameNews = $acaoPage[$acoes]['titulo'];
                shuffle($acaoPage);
 
               $arrayMais = new ArrayIterator($acaoPage);
 
                foreach (new LimitIterator($arrayMais, 0, 3) as $key => $value) {
 
                    if ($nameNews == $arrayMais[$key]['titulo']) {
                        unset($arrayMais[$key]);
                    } else {
                        ?>

                <div class="col-6 mb-2 mt-2">
                    <a href="<?php $_SERVER['PHP_SELF']; ?>?acoes=<?php echo $acaoPage[$key]['key']; ?>">
                        <img src="<?php echo $acaoPage[$key]['caminho']; ?>" class="mt-4 w-100 img-bordas" alt="<?php echo $acaoPage[$key]['alt']; ?>">
                    </a>
                </div>
                <?php
                    }
                }
                ?>

            </aside>

        </div>
    </div>
</main>






<?php
include('templates/footer.php');
?>
