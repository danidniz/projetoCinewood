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
                        <img src="images/furia-incontrolavel.jpg" class="img-fluid" max-width=100% height="auto" alt="Cena do filme Fúria Incontrolável">
                    </div>
                </div>


                <div class="col-lg-6 col-md-6 col-sm-12 mt-4 mb-5" class="content-suspense">
                    <div>
                        <h3>
                            <a href="suspense_news.php?suspenses=suspense0" class="titulo-link">
                                ‘Fúria Incontrolável’: Suspense com Russell Crowe ganha nova data de estreia
                            </a>
                        </h3>
                        <p class="text-right-justify">Após diversos adiamentos e mudanças devido ao surto de coronavírus, o thriller ‘Fúria Incontrolável’ (Unhinged), estrelado por Russell Crowe, finalmente teve sua estreia confirmada para o dia 31 de julho, nos EUA.</p>
                    </div>
                </div>
            </div>

        </article>

        <section class="suspense-news">
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
                            <a href="supense_news.php?suspenses=suspense1">
                                <img src="images/o_apostador.jpg" class="img-fluid" max-width=100% height="auto" alt="Capa do filme O Apostador">
                            </a>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <a href="suspense_news.php?suspenses=suspense1" class="titulo-link">
                                <h3>'O Apostador', filme que está entre os mais vistos da Netflix</h3>
                            </a>
                            <p class="text-justify">A Netflix adicionou em seu catálogo o suspense ‘O Apostador‘ (The Gambler), que conta com a participação de Mark Wahlberg e Brie Larson...</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="row m-1">
                        <div class="col-lg-6 col-md-12 mt-2">
                            <a href="suspense_news.php?suspenses=suspense2">
                                <img src="images/quibi-blumhouse-television.jpg" class="img-fluid" max-width=100% height="auto" alt="Logo da Blumhouse e QUIBI">
                            </a>
                        </div>
                        <div class="col mb-3">
                            <a href="suspense_news.php?suspenses=suspense2" class="titulo-link">
                                <h3>Blumhouse e Quibi</h3>
                            </a>
                            <p class="text-justify">De acordo com o Comic Book, Blumhouse está desenvolvendo uma série para a plataforma de streaming Quibi, marcando a 3ª parceria entre as empresas...</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row m-1">
                <div class="col-sm-6">
                    <div class="row m-1">
                        <div class="col-lg-6 col-md-12 mt-2">
                            <a href="suspense_news.php?suspenses=suspense3">
                                <img src="images/um-lugar-silencioso.jpg" class="img-fluid" max-width=100% height="auto" alt="Capa do filme Um Lugar Silencioso">
                            </a>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <a href="suspense_news.php?suspenses=suspense3" class="titulo-link">
                                <h3>Filmes de suspense para dar nó na sua cabeça</h3>
                            </a>
                            <p class="text-justify">Se você adora juntar as pecinhas e dar uma de detetive (ou de vidente mesmo) enquanto assiste a um bom filme, esta lista é perfeita para pôr as suas habilidades à prova...</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="row m-1">
                        <div class="col-lg-6 col-md-12 mt-2">
                            <a href="suspense_news.php?suspenses=suspense4">
                                <img src="images/o-iluminado.jpg" class="img-fluid" max-width=100% height="auto" alt="Cena do filme O Iluminado">
                            </a>
                        </div>
                        <div class="col mb-3">
                            <a href="suspense_news.php?suspenses=suspense4" class="titulo-link">
                                <h3>Livros que viraram filmes</h3>
                            </a>
                            <p class="text-justify">Há um consenso tácito de que, quase sempre, o livro é melhor do que o filme inspirado nele. Indo contra esta maré, circulam pela rede várias listas de...</p>
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
                                            <td>Corra!</td>
                                            <td>Jordan Peele</td>
                                            <td>2017</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Nós</td>
                                            <td>Jordan Peele</td>
                                            <td>2019</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Bird Box</td>
                                            <td>Susanne Bier</td>
                                            <td>2018</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">4</th>
                                            <td>Garota Exemplar</td>
                                            <td>David Fincher</td>
                                            <td>2014</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">5</th>
                                            <td>Os Suspeitos</td>
                                            <td>Denis Villeneuve</td>
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
                                            <td>Onde os Fracos Não Têm Vez</td>
                                            <td>Irmãos Coen</td>
                                            <td>2007</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Disque M para Matar</td>
                                            <td>Alfred Hitchcock</td>
                                            <td>1954</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>O Colecionador de Ossos</td>
                                            <td>Phillip Noyce</td>
                                            <td>2000</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">4</th>
                                            <td>Janela Indiscreta</td>
                                            <td>Alfred Hitchcock</td>
                                            <td>1954</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">5</th>
                                            <td>O Homem que Sabia Demais</td>
                                            <td>Alfred Hitchcock</td>
                                            <td>1956</td>
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
                                            <td>O Estranho que Nós Amamos</td>
                                            <td>Sofia Coppola</td>
                                            <td>2017</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Ilha do Medo</td>
                                            <td>Martin Scorsese</td>
                                            <td>2010</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>A Casa</td>
                                            <td>David e Àlex Pastor</td>
                                            <td>2020</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">4</th>
                                            <td>o limite da traição</td>
                                            <td>Tyler Perry</td>
                                            <td>2020</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">5</th>
                                            <td>Mentiras Perigosas</td>
                                            <td>Michael Scott</td>
                                            <td>2020</td>
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
