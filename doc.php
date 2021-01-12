<?php
include ('templates/header.php');
include('banco.php');
//Incluido o menu de navegação
?>

<main>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-12 mt-5 img-center">
                <img alt="Capa do documentário Influenza, com médicos responsáveis por conter a pandemia da época" src="images/gian/influenza.webp">
            </div>

            <div class="col-lg-3 col-md-6 col-12 border-right">
                <h1 class="titulo mt-5">Indicação da semana</h1>
                <p>Influenza, um documentário que mostra como foi uma das maiores pandemias da história da humanidade, a Gripe Espanhola, doença que assolou a sociedade por volta dos anos de 1920. Semelhante ao Covid-19, é uma ótima ferramenta de informação para lidarmos com a atualidade.</p>
                <a class="link-gian" href="doc_news.php?docs=doc0">Leia a sinópse completa</a>
            </div>


            <div class="mt-3 col-lg-2 col-md-4 col-5 mr-4">
                <h2>Outras Analises</h2>
                <a class="link-gian" href="doc_news.php?docs=doc1"><img alt="Capa do filme Segunda Guerra em cores, com soldados no campo de batalha" src="images/gian/segunda-guerra.webp"></a>
                <a class="link-gian" href="doc_news.php?docs=doc2"><img class="mt-3" src="images/gian/atari.webp"></a>
            </div>
            <div class="mt-5 col-lg-2 col-md-4 col-5 ml-5 ">
                <a class="link-gian" href="doc_news.php?docs=doc3"><img alt="Imagem de divulgação do documentário Cosmos, com uma nebulosa ao fundo" class="mt-5" src="images/gian/cosmos.webp"></a>
                <a class="link-gian" href="doc_news.php?docs=doc4"><img alt="Capa do filme Women at war, com uma mulher loira usando um uniforme militar" class="mt-3  " src="images/gian/women.webp" height="150px" width="150px"></a>
            </div>

        </div>
        <div class="row m-1">
            <div class="col-12 mt-4 pt-2 text-left bg-light text-dark border-top">
                <h2 class="h2-gian">Veja notícias sobre outros filmes</h2>
            </div>
            <hr>
        </div>
        <div class="row mb-5 m-1">
            <div class="col-sm-4">
                <div class="card>">
                    <img alt="Imagem do ator Ian Holm interpretando Bilbo do Senhor dos Anéis" class="card-img-top" src="images/news/bilbo.jpg">
                    <div class="card-body">
                        <h4 class="titulo card-title">
                            Morre o ator Ian Holm, o Bilbo da saga Senhor dos Anéis
                        </h4>
                        <a href="noticias_news.php?noticias=noticia0" class="link-gian card-link">Leia a notícia completa</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card>">
                    <img alt="Imagem do filme Casa das antiguidades com o protagonista vivendo sua vida no campo " class="card-img-top" src="images/news/casa.jpg">
                    <div class="card-body">
                        <h4 class="titulo card-title">
                            Filme brasileiro é indicado em festival internacional
                        </h4><a href="noticias_news.php?noticias=noticia1" class="link-gian card-link">Leia a notícia completa</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
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
        </div>
    </div>
</main>


<?php
include('templates/footer.php');
//Incluindo o rodapé
?>
