<?php
if (!isset($_GET['suspenses'])) {
    header('Location: suspense.php');
} else {
    $suspenses = $_GET['suspenses'];
}
include('templates/header.php');
include('banco.php');
?>

<main>

    <div class="container-fluid">

        <div class="row">
            <div class="col-12 mt-3 pl-4 text-left">
                <h5 class="destaque-dani">
                    <bold><?php echo $suspensePage[$suspenses]['importancia']?></bold>
                </h5>

                <hr>
            </div>
        </div>


        <div class="container">

            <article>

                <div class="row m-1">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="text-center">
                            <img src="<?php echo $suspensePage[$suspenses]['caminho']; ?>" alt="<?php echo $suspensePage[$suspenses]['alt']; ?>" class="img-fluid" width=650px height="auto">
                        </div>
                    </div>
                </div>

                <div class="row m-1">
                    <div class="col-12 mt-3">
                        <div class="text-left">
                            <h1 class="titulo-dani"><?php echo $suspensePage[$suspenses]['titulo']; ?></h1>
                        </div>
                    </div>
                </div>

                <div class="row m-1">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="text-left">
                            <div class="text-muted">
                                <div class="sub-dani"><?php echo $suspensePage[$suspenses]['sub']; ?></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row m-1">
                    <div class="col-lg-12 col-md-12 col-sm-12 mt-2 mb-5">
                        <div class="text-center-justify">

                            <div class="desc-suspense">
                                <p class="desc-dani"><?php echo $suspensePage[$suspenses]['desc']; ?></p>
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



            <section class="col-lg-12">
                <div class="row img-bordas mb-2">
                    <?php
                $nameNews = $suspensePage[$suspenses]['titulo'];
                shuffle($dramaPage);

                $arrayMais = new ArrayIterator($suspensePage);

                foreach (new LimitIterator($arrayMais, 0, 3) as $key => $value) {

                    if ($nameNews == $arrayMais[$key]['titulo']) {
                        unset($arrayMais[$key]);
                    } else {
                        ?>

                    <div class="col-lg-4 mb-2 mt-2">
                        <a href="<?php $_SERVER['PHP_SELF']; ?>?suspenses=<?php echo $suspensePage[$key]['key']; ?>">
                            <img src="<?php echo $suspensePage[$key]['caminho']; ?>" class=" img-fluid" alt="<?php echo $suspensePage[$key]['alt']; ?>">
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

</main>









<?php
include('templates/footer.php');
?>
