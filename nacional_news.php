<?php
if (!isset($_GET['nacionais'])) {
    header('Location: nacional.php');
} else {
    $nacionais = $_GET['nacionais'];
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
                        <img src="<?php echo $nacionalPage[$nacionais]['caminho']; ?>" class="img-fluid" width=100% heigth="auto" alt="<?php echo $nacionalPage[$nacionais]['alt']; ?>">
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 mt-3">
                        <div class="text-left">
                            <h1 class="titulo"><?php echo $nacionalPage[$nacionais]['titulo']; ?></h1>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="text-left">
                            <div class="text-muted">
                                <div class="sub"><?php echo $nacionalPage[$nacionais]['sub'] ?></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="text-justify">
                            <p class="desc-thiago"><?php echo $nacionalPage[$nacionais]['desc']; ?></p>
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
                $nameNews = $nacionalPage[$nacionais]['titulo'];
                shuffle($nacionalPage);

               $arrayMais = new ArrayIterator($nacionalPage);

                foreach (new LimitIterator($arrayMais, 1, 2) as $key => $value) {

                    if ($nameNews == $arrayMais[$key]['titulo']) {
                        unset($arrayMais[$key]);
                    } else {
                        ?>

                    <div class="col-6 mb-2 mt-2">
                        <a href="<?php $_SERVER['PHP_SELF']; ?>?nacionais=<?php echo $nacionalPage[$key]['key']; ?>">
                            <img src="<?php echo $nacionalPage[$key]['caminho']; ?>" class="w-100 img-bordas" alt="<?php echo $nacionalPage[$key]['alt']; ?>">
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
