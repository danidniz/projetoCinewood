<?php
if (!isset($_GET['terrores'])) {
    header('Location: terror.php');
} else {
    $terrores = $_GET['terrores'];
}
include ('templates/header.php');
include('banco.php');
//Incluido o menu de navegação
?>


<main>
    <div class="container-sm mt-5">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12">
                <p class="desc-gian"><?php echo $terrorPage[$terrores]['desc']; ?></p>
            </div>
            <div class="border-bottom mb-5 col-lg-8 col-md-8 col-sm-12 mt-5">

                <p class="desc-gian"><?php echo $terrorPage[$terrores]['desc2']; ?></p>

            </div>
        </div>
        <div class="row m-1">
            <div class="col-12 mt-2 pt-2 text-left bg-light text-dark border-top">
                <h2 class="h2-gian">Veja notícias sobre outros filmes</h2>
            </div>
            <hr>
        </div>
        <div class="mt-5 row">
            <div class="col-lg-3">
                <div class="card>">
                    <img alt="Imagem do ator Ian Holm interpretando o Bilbo de Senhor dos Anéis" class="card-img-top" src="images/news/bilbo.jpg">
                    <div class="card-body">
                        <h4 class="titulo card-title">
                            Morre o ator Ian Holm, o Bilbo da saga Senhor dos Anéis
                        </h4>
                        <a href="noticias_news.php?noticias=noticia0" class="link-gian card-link">Leia a notícia completa</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card>">
                    <img alt="Imagem do filme A casa das antiguidades" class="card-img-top" src="images/news/casa.jpg">
                    <div class="card-body">
                        <h4 class="titulo card-title">
                            Filme brasileiro é indicado em festival internacional
                        </h4><a href="noticias_news.php?noticias=noticia1" class="link-gian card-link">Leia a notícia completa</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card>">
                    <img alt="Imagem de divulgação do filme Espiral, onde uma cena do crime é investigada por policiais" class="card-img-top" src="images/news/espiral.jpg">
                    <div class="card-body">
                        <h4 class="titulo card-title">
                            Filmes hypados que sofreram adiamento
                        </h4>
                        <a href="noticias_news.php?noticias=noticia2" class="card-link link-gian">Leia a notícia completa</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 ">
                <div class="card>">
                    <img alt="Imagem da estatueta do Oscar" class="card-img-top" src="images/news/oscar.jpg">
                    <div class="card-body">
                        <h4 class="titulo card-title">
                            Oscar é adiado por conta da pandemia
                        </h4>
                        <a href="noticias_news.php?noticias=noticia3" class="card-link link-gian">Leia a notícia completa</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
include('templates/footer.php');
//Incluindo o rodapé
?>
