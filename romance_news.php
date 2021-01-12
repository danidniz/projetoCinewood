<?php
if (!isset($_GET['romances'])) {
    header('Location: romance.php');
} else {
    $romances = $_GET['romances'];
}
include('templates/header.php');
include('banco.php');
?>

<main>

    <div class="container">
        <div class="row m-1">
            <article class="col-lg-7">

                <div class="row mt-5">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <img src="<?php echo $romancePage[$romances]['caminho']; ?>" class="img-fluid" width=100% heigth="auto" alt="<?php echo $romancePage[$romances]['alt']; ?>">
                    </div>
                </div>


                <div class="row">
                    <div class="col-12 mt-3">
                        <div class="text-left">
                            <h1 class="titulo"><?php echo $romancePage[$romances]['titulo']; ?></h1>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="text-left">
                            <div class="text-muted">
                                <div class="sub"><?php echo $romancePage[$romances]['sub'] ?></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="text-justify">
                            <p class="desc-thiago"><?php echo $romancePage[$romances]['desc']; ?></p>
                        </div>
                    </div>
                </div>

            </article>


            <aside class="col-lg-5">
                <div class="img-bordas mb-2">
                    <div class="w-100 mt-5">
                        <h2 class="aside-guinho m-1 p-2 bg-light text-dark">Veja também...</h2>
                    </div>
                    <?php
                $nameNews = $romancePage[$romances]['titulo'];
                shuffle($romancePage);

               $arrayMais = new ArrayIterator($romancePage);

                foreach (new LimitIterator($arrayMais, 1, 2) as $key => $value) {

                    if ($nameNews == $arrayMais[$key]['titulo']) {
                        unset($arrayMais[$key]);
                    } else {
                        ?>

                    <div class="col-6 mb-2 mt-2">
                        <a href="<?php $_SERVER['PHP_SELF']; ?>?romances=<?php echo $romancePage[$key]['key']; ?>">
                            <img src="<?php echo $romancePage[$key]['caminho']; ?>" class="w-100 img-bordas" alt="<?php echo $romancePage[$key]['alt']; ?>">
                        </a>
                    </div>
                    <?php
                    }
                }
                ?>
                </div>
            </aside>

        </div>
    </div>

</main>


<?php
include('templates/footer.php');
?>
