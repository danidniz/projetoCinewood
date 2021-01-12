<?php
if (!isset($_GET['dramas'])) {
    header('Location: drama.php');
} else {
    $dramas = $_GET['dramas'];
}
include('templates/header.php');
include('banco.php');
?>

<main>

    <div class="container-fluid">

        <div class="row">
            <div class="col-12 mt-3 pl-4 text-left">
                <h5 class="destaque-dani">
                    <bold><?php echo $dramaPage[$dramas]['importancia']?></bold>
                    <hr>
                </h5>
            </div>
        </div>


        <div class="container">

            <article>

                <div class="row m-1">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="text-center">
                            <img src="<?php echo $dramaPage[$dramas]['caminho']; ?>" alt="<?php echo $dramaPage[$dramas]['alt']; ?>" class="img-fluid" width=650px height="auto">
                        </div>
                    </div>
                </div>

                <div class="row m-1">
                    <div class="col-12 mt-3">
                        <div class="text-left">
                            <h1 class="titulo"><?php echo $dramaPage[$dramas]['titulo']; ?></h1>
                        </div>
                    </div>
                </div>

                <div class="row m-1">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="text-left">
                            <div class="text-muted">
                                <div class="sub"><?php echo $dramaPage[$dramas]['sub']; ?></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row m-1">
                    <div class="col-lg-12 col-md-12 col-sm-12 mt-2">
                        <div class="text-center-justify">

                            <div class="desc-drama">
                                <p class="desc-dani"><?php echo $dramaPage[$dramas]['desc']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </article>


            <div class="row m-1">
                <div class="col-12 mt-4 pt-2 text-left bg-dark text-light">
                    <h2 class="section-dani">Veja também...</h2>
                </div>
                <hr>
            </div>


            <div class="row m-1">
                <section class="col-lg-12">
                    <div class="row img-bordas mb-2">
                        <?php
                $nameNews = $dramaPage[$dramas]['titulo'];
                shuffle($dramaPage);

                $arrayMais = new ArrayIterator($dramaPage);

                foreach (new LimitIterator($arrayMais, 0, 3) as $key => $value) {

                    if ($nameNews == $arrayMais[$key]['titulo']) {
                        unset($arrayMais[$key]);
                    } else {
                        ?>

                        <div class="col-lg-4 mb-2 mt-2">
                            <a href="<?php $_SERVER['PHP_SELF']; ?>?dramas=<?php echo $dramaPage[$key]['key']; ?>">
                                <img src="<?php echo $dramaPage[$key]['caminho']; ?>" class=" img-fluid" alt="<?php echo $dramaPage[$key]['alt']; ?>">
                            </a>
                        </div>

                        <?php
                    }
                }
                ?>
                    </div>
                </section>

            </div>
        </div>
    </div>

</main>









<?php
include('templates/footer.php');
?>
