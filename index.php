<?php
include('templates/header.php');
include('banco.php');
?>

<main>
    <div class="container">

        <div class="row m-1">
            <div class="col-12 mt-4 text-left">
                <h3 class="h2-dani">
                    <i>Lançamentos da semana</i>
                </h3>
                <p>12/07/20</p>
                <hr>
            </div>
        </div>


        <div class="row m-1">
            <div class="col-lg-12 col-sm-12 col-md-12 mb-3 bg-warning">
                <h3 class="aviso-dani p-1">Aviso:</h3>
                <p>Os cinemas brasileiros estão temporariamente fechados por causa da pandemia de Covid-19. Portanto, nossa página não disponilizará os lançamentos mais famosos da semana, até que de fato tudo volte ao normal. Acompanhe o CineWood para saber as últimas novidades para assistir em casa. Proteja-se. <b class="aviso-dani">#fiqueemcasa</b></p>
            </div>
        </div>


        <div class="row m-1">
            <div class="col-12 mt-5 text-left">
                <h3 class="h2-dani">
                    <i>Destaque</i>
                </h3>
                <hr>
            </div>
        </div>


        <div class="row m-1">
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-lg-6 col-md-12 mt-2">
                        <a href="suspense_news.php?suspenses=suspense0">
                            <img src="images/furia-incontrolavel.jpg" class="img-fluid" max-width=100% height="auto" alt="Imagem da capa do filme Fúria Incontrolável">
                        </a>
                    </div>
                    <div class="col-lg-6 mb-3 mt-2">
                        <a href="suspense_news.php?suspenses=suspense0" class="titulo-link">
                            <h3>‘Fúria Incontrolável’: Suspense com Russell Crowe ganha nova data de estreia</h3>
                        </a>
                        <p class="text-justify">Após diversos adiamentos e mudanças devido ao surto de coronavírus, o thriller ‘Fúria Incontrolável’ (Unhinged), estrelado por Russell Crowe, finalmente teve sua estreia confirmada para o dia 31 de julho, nos EUA...</p>
                    </div>
                </div>
            </div>
        </div>


        <div class="row m-1">
            <div class="col-12 mt-5 text-left">
                <h3 class="h2-dani">
                    <i>Veja mais...</i>
                </h3>
                <hr>
            </div>
        </div>

        <div class="row m-1">
            <div class="col-sm-6">
                <div class="row m-1">
                    <div class="col-lg-6 col-md-12 mt-2">
                        <a href="romance_news.php?romances=romance0">
                            <img src="images/guinho/casablanca.jpg" class="img-fluid" max-width=100% height="auto" alt="Imagem da capa do filme Casablanca">
                        </a>
                    </div>
                    <div class="col-lg-6 mb-3 mt-2">
                        <a href="romance_news.php?romances=romance0" class="titulo-link">
                            <h3>Casablanca</h3>
                        </a>
                        <p class="text-justify">O roteiro de "Casablanca" foi escrito durante uma manifestação, a Segunda Guerra Mundial tinha deixado Hollywood sem galãs e Humphrey Bogart havia entrado no elenco...</p>
                    </div>
                    <div class="col-lg-6 col-md-12 mt-2 ml-2">
                        <a href="ficcao_senhoraneis.php">
                            <img src="images/perri/ficcao_senhoraneis2.jpg" class="img-fluid" max-width=100% height="auto" alt="Imagem ilustrativa do filme O Senhor dos Anéis">
                        </a>
                    </div>
                    <div class="col mb-3 mt-2 ml-1">
                        <a href="ficcao_senhoraneis.php" class="titulo-link">
                            <h3>Repensando O Senhor dos Anéis!</h3>
                        </a>
                        <p class="text-justify">"Demorei para assistir esse filme (2014), mas foi o melhor que já vi, ele é simplesmente fantástico, dispensa elogios, ouso-me a...</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="row m-1">
                    <div class="col-lg-12 col-md-12 mt-2">
                        <a href="nacional_news.php?nacionais=nacional0">
                            <img src="images/guinho/mazaroppi.jpg" class="img-fluid" max-width=100% height="auto" alt="Imagem do ator Mazzaropi">
                        </a>
                        <h4 class="titulo mt-1">Mazzaropi</h4>
                        <p class="mt-2">Mazzaropi nasceu no bairro de Santa Cecília, em São Paulo. Aos 14 anos, deixou a casa paterna, à revelia dos pais, para acompanhar o Circo La Paz. Para isso contou com a ajuda do Faquir Ferris, que alterou a idade do garoto no documento de identidade. Viajando pelo interior do país, teve a ideia de fazer o papel de caipira. <button type="button" class="btn btn-light confira-guinho"><a href="nacional_news.php?nacionais=nacional0">Ver a matéria completa</a></button></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row m-1">
            <div class="col-12 mt-5 text-left">
                <h3 class="h2-dani">
                    <i>Outras</i>
                </h3>
                <hr>
            </div>
        </div>

        <div class="row m-1">
            <div class="col-sm-6">
                <div class="row m-1">
                    <div class="col-lg-6 col-md-12 mt-2">
                        <a href="acao_news.php?acoes=acao0">
                            <img src="images/artur/melhores_0.jpg" class="img-fluid" max-width=100% height="auto" alt="Imagem de heróis da Marvel">
                        </a>
                    </div>
                    <div class="col-lg-6 mb-3 mt-2">
                        <a href="acao_news.php?acoes=acao0" class="titulo-link">
                            <h3>Melhores Lançamentos:</h3>
                        </a>
                        <p class="text-justify">“Vingadores Ultimato” (2019) ficou marcado por feitos impressionantes, sendo o final da conhecida como “Fase 3 do Universo Marvel”...</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="row m-1">
                    <div class="col-lg-6 col-md-12 mt-2">
                        <a href="animacao_drags.php">
                            <img src="images/perri/animacao_drags.jpg" class="img-fluid" max-width=100% height="auto" alt="Imagem cena da série 'Super Frags'">
                        </a>
                    </div>
                    <div class="col mb-3 mt-2">
                        <a href="animacao_drags.php" class="titulo-link">
                            <h3>“Super Drags”!</h3>
                        </a>
                        <p class="text-justify">Primeira série animada brasileira da Netflix. A série de cinco episódios que deve estrear no segundo semestre de 2018 traz as aventuras de Patrick, Donny e Ramon, três jovens...</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row m-1">
            <div class="col-sm-6">
                <div class="row m-1">
                    <div class="col-lg-6 col-md-12 mt-2">
                        <a href="drama_news.php?dramas=drama3">
                            <img src="images/amazon.jpg" class="img-fluid" max-width=100% height="auto" alt="Imagem logo da Amazon Prime Video">
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
                        <a href="animacao_japan.php">
                            <img src="images/perri/animacao_japan.jpg" class="img-fluid" max-width=100% height="auto" alt="Imagem capa da animação Your Name">
                        </a>
                    </div>
                    <div class="col mb-3 mt-2">
                        <a href="animacao_japan.php" class="titulo-link">
                            <h3>Animações no Japão</h3>
                        </a>
                        <p class="text-justify">O número total de espectadores no ano passado chegou a 180,1 milhões, 8% a mais que em 2015</p>
                    </div>
                </div>
            </div>
        </div>


        <div class="row m-1">
            <div class="col-sm-6">
                <div class="row m-1">
                    <div class="col-lg-6 col-md-12 mt-2">
                        <a href="aventura_news.php?aventuras=aventura3">
                            <img src="images/artur/antigos_0_av.jpg" class="img-fluid" max-width=100% height="auto" alt="Imagem cena do filme O Rei Leão">
                        </a>
                    </div>
                    <div class="col-lg-6 mb-3 mt-2">
                        <a href="aventura_news.php?aventuras=aventura3" class="titulo-link">
                            <h3>Maiores de todos os tempos:</h3>
                        </a>
                        <p class="text-justify">Conheça as indicações de nosso site sobre os melhores filmes de aventura de todos os tempos.</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="row m-1">
                    <div class="col-lg-6 col-md-12 mt-2">
                        <a href="suspense_news.php?suspenses=suspense4">
                            <img src="images/o-iluminado.jpg" class="img-fluid" max-width=100% height="auto" alt="Imagem cena do filme O Iluminado">
                        </a>
                    </div>
                    <div class="col mb-3 mt-2">
                        <a href="suspense_news.php?suspenses=suspense4" class="titulo-link">
                            <h3>Livros que viraram filmes</h3>
                        </a>
                        <p class="text-justify">Há um consenso tácito de que, quase sempre, o livro é melhor do que o filme inspirado nele. Indo contra esta maré, circulam pela rede várias listas de... </p>
                    </div>
                </div>
            </div>
        </div>



    </div>
</main>







<?php
include('templates/footer.php');
?>
