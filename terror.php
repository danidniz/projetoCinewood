<?php
include ('templates/header.php');
include('banco.php');
//Incluido o menu de navegação
?>

<main>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-12 mt-5 image-left">
                <img alt="Capa do filme Halloween, com a protagonista Lauren Strodes mais velha e o Michael Myers ao fundo" src="images/gian/halloween.webp">
            </div>

            <div class="col-lg-3 col-md-6 col-12 border-right">
                <h1 class="titulo mt-5">Indicação da semana</h1>
                <p>Um filme perfeito para os amantes de terror, e principalmente do gênero slasher, Halloween de 78 é um clássico absoluto que ditou tendencias, mas suas sequências são um tanto duvidósas e confusas, até que então uma sequência fiel veio ao mundo em 2018, ignorando completamente as sequências do antigo.</p>
                <a class="link-gian" href="terror_news.php?terrores=terror0">Leia a sinópse completa</a>
            </div>


            <div class="mt-3 col-lg-2 col-md-4 col-5 mr-4">
                <h2 class="titulo">Outras Analises</h2>
                <a class="link-gian" href="terror_news.php?terrores=terror1"><img alt="Capa do filme Poltergeist, com um palhaço de brinquedo com um ar macabro" src="images/gian/Poltergeist.webp"></a>
                <a class="link-gian" href="terror_news.php?terrores=terror2"><img alt="Capa do filme Jigsaw, com o antagonista John Kramer vestido com a roupa do boneco Billy" class="mt-3" src="images/gian/Jigsaw.webp"></a>
            </div>
            <div class="mt-5 col-lg-2 col-md-4 col-5 ml-5 ">
                <a class="link-gian" href="terror_news.php?terrores=terror3"><img alt="Capa do filme Invocação do Mal 2, com uma entidade assistindo um suposto suicidio ao longe" class="mt-5" src="images/gian/Invoca%C3%A7%C3%A3o-do-mal-2.webp"></a>
                <a class="link-gian" href="terror_news.php?terrores=terror4"><img alt="Capa do filme Terror em Mercy Falls, com uma garota numa cadeira de rodas num ar macabro" class="mt-3  " src="images/gian/Terror-em-mercy-falls.webp" height="150px" width="150px"></a>
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
