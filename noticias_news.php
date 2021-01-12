<?php

if (!isset($_GET['noticias'])) { 
    header('Location: noticias.php');
} else {
    $noticias = $_GET['noticias'];
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


                <div class="row">
                    <div class="col-12 mt-3">
                        <div class="text-left">
                            <h1 class="titulo"><?php echo $noticiaPage[$noticias]['titulo']; ?></h1>
                        </div>
                    </div>
                </div>



                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="text-monospace">
                            <p class="desc-artur"><?php echo $noticiaPage[$noticias]['desc']; ?></p>
                        </div>
                    </div>
                </div>

                <div class="text-center">
                    <img  src="<?php echo $noticiaPage[$noticias]['caminho']; ?>" class="img-fluid" max-width=100% heigth="auto" alt="<?php echo $noticiaPage[$acoes]['alt']; ?>">

                </div>


                <div class="text-monospace">
                    <p class="desc-artur"><?php echo $noticiaPage[$noticias]['desc1']; ?></p>
                </div>




            </article>





            <aside class="col-lg-5 ">
                <div class="row m-1">
                    <div class="col-12 mt-2 text-left">
                        <h2 class="h2-Artur">Veja também outras notícias</h2>
                        <hr>
                    </div>

                </div>
                <?php
                $nameNews = $noticiaPage[$noticias]['titulo'];
                shuffle($noticiaPage);
 
               $arrayMais = new ArrayIterator($noticiaPage);
 
                foreach (new LimitIterator($arrayMais, 0, 3) as $key => $value) {
 
                    if ($nameNews == $arrayMais[$key]['titulo']) {
                        unset($arrayMais[$key]);
                    } else {
                        ?>

                <div class="col-6 mb-2 mt-2">
                    <a href="<?php $_SERVER['PHP_SELF']; ?>?noticias=<?php echo $noticiaPage[$key]['key']; ?>">
                        <img src="<?php echo $noticiaPage[$key]['caminho']; ?>" class="mt-4 w-100 img-bordas" alt="<?php echo $noticiaPage[$key]['alt']; ?>">
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
