<?php
include('templates/header.php');
include('banco.php');
?>

<main>
    <div class="container">

        <div class="row m-1">
            <div class="col-12 mt-4 text-left">
                <h2 class="h2-dani">
                    <i>Destaque</i>
                </h2>
                <hr>
            </div>
        </div>

        <article>

            <div class="row m-1">
                <div class="col-lg-6 col-md-6 col-sm-12 mt-4">
                    <div class="img-left">
                        <img src="images/destaque_drama.jpg" class="img-fluid" max-width=100% height="auto" alt="">
                    </div>
                </div>


                <div class="col-lg-6 col-md-6 col-sm-12 mt-4 mb-5" class="content-drama">
                    <div>
                        <h3>
                            <a href="drama_news.php?dramas=drama0" class="titulo-link">
                                Filmes anos 90: clássicos que todo amante do cinema deve conhecer
                            </a>
                        </h3>
                        <p class="text-right-justify">Os filmes anos 90 ficaram marcados pelo surgimento de grandes estrelas como Julia Roberts e Tom Hanks, além de diretores que seguem lançando sucessos como Quentin Tarantino, que revoluciona o mercado cinematográfico a cada filme. Por isso, relembrar longas da década e conhecer seus principais títulos é essencial para os amantes do cinema. Conheça a seguir filmes imperdíveis:</p>
                    </div>
                </div>
            </div>

        </article>


        <section class="drama-news">
            <div class="row m-1">
                <div class="col-12 mt-5 text-left">
                    <h2 class="h2-dani"><i>Veja também...</i></h2>
                    <hr>
                </div>
            </div>

            <div class="row m-1">
                <div class="col-sm-6">
                    <div class="row m-1">
                        <div class="col-lg-6 col-md-12 mt-2">
                            <a href="drama_news.php?dramas=drama1">
                                <img src="images/milagre-3.jpg" class="img-fluid" max-width=100% height="auto" alt="">
                            </a>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <a href="drama_news.php?dramas=drama1" class="titulo-link">
                                <h3>Entenda o final de Milagre na Cela 7</h3>
                            </a>
                            <p class="text-justify">Milagre na Cela 7, novo filme turco que chegou à Netflix conquistando um grande público...</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="row m-1">
                        <div class="col-lg-6 col-md-12 mt-2">
                            <a href="drama_news.php?dramas=drama2">
                                <img src="images/netflix.jpg" class="img-fluid" max-width=100% height="auto" alt="">
                            </a>
                        </div>
                        <div class="col mb-3">
                            <a href="drama_news.php?dramas=drama2" class="titulo-link">
                                <h3>Dramas disponíveis na Netflix</h3>
                            </a>
                            <p class="text-justify"> Dentro do catálogo da Netflix, podem ser encontrados muitos filmes de dramas bons. Isso só depende da observação individual de cada um de nós.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row m-1">
                <div class="col-sm-6">
                    <div class="row m-1">
                        <div class="col-lg-6 col-md-12 mt-2">
                            <a href="drama_news.php?dramas=drama3">
                                <img src="images/amazon.jpg" class="img-fluid" max-width=100% height="auto" alt="">
                            </a>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <a href="drama_news.php?dramas=drama3" class="titulo-link">
                                <h3>Filmes de drama na Amazon Prime</h3>
                            </a>
                            <p class="text-justify">Talvez a quarentena seja um bom momento para refletirmos sobre a vida. Então selecionamos 10 dos melhores filmes dramáticos disponíveis na Amazon Prime.</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="row m-1">
                        <div class="col-lg-6 col-md-12 mt-2">
                            <a href="drama_news.php?dramas=drama4">
                                <img src="images/destacamentoblood.jpg" class="img-fluid" max-width=100% height="auto" alt="">
                            </a>
                        </div>
                        <div class="col mb-3">
                            <a href="drama_news.php?dramas=drama4" class="titulo-link">
                                <h3>Destacamento Blood</h3>
                            </a>
                            <p class="text-justify">Destacamento Blood é muito mais um desabafo engajado, que compreende que qualquer coisa é sempre múltipla e complexa, do que um enorme amontoado de questões diversas (guerra, racismo, traumas psicológicos, ganância, etc).</p>
                        </div>
                    </div>
                </div>
            </div>


        </section>


        <!-----------------------------------------------------AQUI COMEÇA MEU NAV-PILLS-------------------------------->

        <div class="row m-1">
            <div class="col-12 mt-5 text-left">
                <h2 class="h2-dani">
                    <i>Vale a pena assistir...</i>
                </h2>
                <hr>
            </div>
        </div>


        <div class="indicacoes mb-2">
            <div class="row m-1">
                <div class="col-12">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="table-dani nav-link active" id="premiados-tab" data-toggle="pill" href="#premiados1" role="tab" aria-controls="premiados1" aria-selected="true">Premiados</a>
                        </li>
                        <li class="nav-item">
                            <a class="table-dani nav-link" id="classicos-tab" data-toggle="pill" href="#classicos1" role="tab" aria-controls="classicos1" aria-selected="false">Clássicos</a>
                        </li>
                        <li class="nav-item">
                            <a class="table-dani nav-link" id="top-tab" data-toggle="pill" href="#top1" role="tab" aria-controls="top1" aria-selected="false">Top do mês</a>
                        </li>
                    </ul>

                    <!---------------------------------------AQUI COMEÇA O CONTEÚDO DO PILLS------------------------------------------>

                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="premiados1" role="tabpanel" aria-labelledby="premiados-tab">
                            <div class="row m-1">
                                <table class="table">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Título</th>
                                            <th scope="col">Direção</th>
                                            <th scope="col">Ano</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>1917</td>
                                            <td>Sam Mendes</td>
                                            <td>2019</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Bohemian Rhapsody</td>
                                            <td>Bryan Singer</td>
                                            <td>2018</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Três Anúncios Para Um Crime</td>
                                            <td>Martin McDonagh</td>
                                            <td>2017</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">4</th>
                                            <td>Moonlight: Sob a Luz do Luar</td>
                                            <td>Barry Jenkins</td>
                                            <td>2016</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">5</th>
                                            <td>12 Anos de Escravidão</td>
                                            <td>Steve McQueen</td>
                                            <td>2013</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="classicos1" role="tabpanel" aria-labelledby="classicos-tab">
                            <div class="row m-1">
                                <table class="table">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Título</th>
                                            <th scope="col">Direção</th>
                                            <th scope="col">Ano</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Um Sonho de Liberdade</td>
                                            <td>Frank Darabont</td>
                                            <td>1994</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>À Espera de um Milagre</td>
                                            <td>Frank Darabont</td>
                                            <td>1999</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>O Poderoso Chefão</td>
                                            <td>Francis Ford Coppola</td>
                                            <td>1972</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">4</th>
                                            <td>Sociedade dos Poetas Mortos</td>
                                            <td>Peter Weir</td>
                                            <td>1989</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">5</th>
                                            <td>Clube da Luta</td>
                                            <td>David Fincher</td>
                                            <td>1999</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="top1" role="tabpanel" aria-labelledby="top-tab">
                            <div class="row m-1">
                                <table class="table">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Título</th>
                                            <th scope="col">Direção</th>
                                            <th scope="col">Ano</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Jojo Rabbit</td>
                                            <td>Taika Waititi</td>
                                            <td>2020</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Viver Duas Vezes</td>
                                            <td>Maria Ripoll</td>
                                            <td>2019</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>O Menino que Descobriu o Vento</td>
                                            <td>Chiwetel Ejiofor</td>
                                            <td>2019</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">4</th>
                                            <td>História de um Casamento</td>
                                            <td>Noah Baumbach</td>
                                            <td>2019</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">5</th>
                                            <td>Sombras da Vida</td>
                                            <td>David Lowery</td>
                                            <td>2017</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</main>

<?php
include('templates/footer.php');
?>
