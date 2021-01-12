<?php

if (!isset($_GET['aventuras'])) {
    header('Location: aventura.php');
} else {
    $aventuras = $_GET['aventuras'];
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

                <div class="text-center">
                    <img src="<?php echo $aventuraPage[$aventuras]['caminho']; ?>" class="img-fluid" width=100% heigth="auto" alt="<?php echo $aventuraPage[$aventuras]['alt']; ?>">

                </div>

                <div class="row">
                    <div class="col-12 mt-3">
                        <div class="text-left">
                            <h1 class="titulo"><?php echo $aventuraPage[$aventuras]['titulo']; ?></h1>
                        </div>
                    </div>
                </div>



                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="text-monospace">
                            <p class="desc-artur"><?php echo $aventuraPage[$aventuras]['desc']; ?></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="text-monospace">
                            <p class="cards-artur"><?php echo $aventuraPage[$aventuras]['cards1']; ?></p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="text-monospace">
                            <p class="cards-artur"><?php echo $aventuraPage[$aventuras]['cards2']; ?></p>
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
                $nameNews = $aventuraPage[$aventuras]['titulo'];
                shuffle($aventuraPage);
 
               $arrayMais = new ArrayIterator($aventuraPage);
 
                foreach (new LimitIterator($arrayMais, 0, 3) as $key => $value) {
 
                    if ($nameNews == $arrayMais[$key]['titulo']) {
                        unset($arrayMais[$key]);
                    } else {
                        ?>

                <div class="col-6 mb-2 mt-2">
                    <a href="<?php $_SERVER['PHP_SELF']; ?>?aventuras=<?php echo $aventuraPage[$key]['key']; ?>">
                        <img src="<?php echo $aventuraPage[$key]['caminho']; ?>" class="mt-4 w-100 img-bordas" alt="<?php echo $aventuraPage[$key]['alt']; ?>">
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
