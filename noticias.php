<?php
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
            <div class="col-sm-6">
                <div class="row m-1">
                    <div class="col-lg-12 col-md-12 mt-2">
                        <a href="noticias_news.php?noticias=noticia0">
                            <img src="images/news/bilbo.jpg" class="img-fluid" width="1500px" height="auto" alt=" Imagem do ator Ian Holm no filme Senhor dos Anéis.">
                        </a>
                        <h4 class="titulo mt-1"><a href="noticias_news.php?noticias=noticia0">Morre a ator Ian Holm, o Bilbo Bolseiro da saga O Senhor dos anéis.</a></h4>
                        <p class="mt-2">Holm teve uma carreira extraodinária, ganhou prêmios como o de Melhor Ator em uma Peça pela Tonys, Melhor Ator Coadjuvante pela BAFTA e esteve ligado ao sucessor</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="row m-1">
                    <div class="row m-1">
                        <div class="col-lg-6 col-md-12 mt-1">
                            <a href="noticias_news.php?noticias=noticia1">
                                <img src="images/news/noticia_1.jpg" class="img-fluid" max-width=100% height="auto" alt="Cena do filme Casa de Antiguidades">
                            </a>
                        </div>
                        <div class="col-lg-6 mb-3 mt-1">
                            <a href="noticias_news.php?noticias=noticia1" class="titulo-link">
                                <h3>Filme brasileiro é selecionado em festival de Cannes.</h3>
                            </a>
                            <p class="text-justify">O diretor-geral do festival, Thierry Frémaux afirmou que “Esta seleção mostra que o cinema ainda está vivo, também esteve durante o confinamento”...</p>
                        </div>
                        <div class="col-lg-6 col-md-12 mt-1 ml-2">
                            <a href="noticias_news.php?noticias=noticia2">
                                <img src="images/news/espiral.jpg" class="img-fluid" max-width=100% height="auto" alt="Imagem do filme de terror Espiral que tem previsão para 2021.">
                            </a>
                        </div>
                        <div class="col mb-3 mt-2 ml-1">
                            <a href="noticias_news.php?noticias=noticia2" class="titulo-link">
                                <h3>Filme "hypados" que foram adiados.</h3>
                            </a>
                            <p class="text-justify">Espiral – O novo capítulo da amada saga de Jogos Mortais também foi adiado, o filme roteirizado por Chris Rock e dirigido por</p>
                        </div>
                    </div>
                </div>


            </div>










            <section>
                <div class="row m-5">
                    <div class="col-12 mt-2 text-left ">
                        <h2 class="h2-Artur">Outras...</h2>
                        <hr>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 ">
                        <div class="card mt-2 mb-2">
                            <img src="images/news/contagio.jpg" class="img-fluid" max-width=100% height="auto" alt="Poster do filme Contagio lançado em 2011.">
                            <div class="card-fundo"></div>
                            <div class="card-title">
                                <h2 class="mt-4 ml-3 text-monospace">
                                    <a class="titulo-link" href="noticias_news.php?noticias=noticia3">7 filmes indispensáveis atualmente.</a></h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card mt-2 mb-2">
                            <img src="images/news/oscar.jpg" class="img-fluid" max-width=100% height="auto" alt="Imagem da estatueta da premiação conhecida como Oscar.">
                            <div class="card-fundo"></div>
                            <div class="card-title">
                                <h2 class="mt-4 ml-3 text-monospace">
                                    <a class="titulo-link" href="noticias_news.php?noticias=noticia4">Oscar 2021 é adiado e muda calendário.</a></h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card mt-2 mb-2">
                            <img src="images/perri/animacao_drags.jpg" class="img-fluid" max-width=100% height="auto" alt="Imagem da personagem da animação Super Drags. ">
                            <div class="card-fundo"></div>
                            <div class="card-title">
                                <h2 class="mt-4 ml-3 text-monospace">
                                    <a class="titulo-link" href="animacao_drags.php">“Super Drags”, série animada brasileira da Netflix!!</a></h2>
                            </div>
                        </div>
                    </div>
                </div>


            </section>
        </div>

        <?php
include('templates/footer.php');
?>
