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
        <div class="row">
            <div class="col-lg-6 col-md-7 col-12 mt-4 mb-5 img-left">
                <img src="images/artur/titulo_acao(n).jpg" class="img-fluid" max-width=100% height="auto" alt="Imagem de um helicóptero sobrevoando uma paisagem com uma pessoa pendurada a ele.">
            </div>
            <div class="col-lg-6 col-md-5 col-10 mt-4 mb-5 border-bottom border-dark">
                <h1 class="titulo">Sobre os filmes:</h1>
                <p>Perseguições alucinantes, efeitos especiais , explosões, perseguições de carros, motos, ou em labirintos urbanos, vilões sem caráter, e um protagonista que certamente sacrificaria sua vida pelo bem da humanidade, são alguns dos ingredientes infalíveis de todo bom filme de ação.</p>
                <p>Ainda que rejeitado pela crítica, esse gênero é responsável por arrastar multidões para as salas de cinema. Quanto a sua estrutura, possui fórmulas geralmente convencionais e facilmente reconhecíveis como rápidos desenvolvimentos da ação, picos dramáticos intensos, planos clássicos e trilhas que traduzem emocionalmente o tom das situações. Além disso, as personagens possuem pouca profundidade, sendo clara a luta entre Bem e Mal.</p>
                <p>O filme considerado como o primeiro do gênero é Rambo: Programado para Matar (1982).</p>
            </div>
        </div>

        <section>

            <div class="row m-1">
                <div class="col-12 mt-4 pt-2 text-left ">
                    <h2 class="h2-Artur">Veja também...</h2>
                    <hr>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-2 col-md-3 col-6 mt-5 mb-5 img-left">
                    <img src="images/artur/melhores_0.jpg" class="img-fluid" max-width=100% height="auto" alt="Poster do filme VIngadores Ultimato com a escrita Melhores lançamentos.">
                </div>

                <div class="col-lg-3 col-md-3 col-5 mt-5 mb-5 border-right border-bottom border-dark">
                    <h4 class="titulo">Melhores Lançamentos:</h4>
                    <p>Confira os maiores destaques em lançamentos cinematograficos dos filmes de ação...</p>
                    <a class="saibaArt" href="acao_news.php?acoes=acao0">Leia sobre os lançamentos</a>
                </div>

                <div class="col-lg-2 col-md-3 col-6 mt-5 mb-5">
                    <img src="images/artur/atores_0.jpg" class="img-fluid" max-width=100% height="auto" alt="Imagem com os atores Bruce Willis, Arnold Schwarzenegger e Silvester Stalone, com a escrita Maiores Atores.">
                </div>
                <div class="col-lg-3 col-md-3 col-5 mt-5 mb-5 border-right border-bottom border-dark">
                    <h4 class="titulo">Maiores Atores:</h4>
                    <p>Veja os maiores atores, seus maiores sucessos e suas premiações...</p>
                    <a class="saibaArt" href="acao_news.php?acoes=acao1">Leia sobre os atores</a>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-2 col-md-3 col-6 mt-5 mb-5 img-left">
                    <img src="images/artur/curiosidades_0.jpg" class="img-fluid" max-width=100% height="auto" alt="Imagem de uma câmera profissional para gravações de cinema, com a escrita Curiosidades.">
                </div>
                <div class="col-lg-3 col-md-3 col-5 mt-5 mb-5 border-right border-bottom border-dark">
                    <h4 class="titulo">Curiosidades:</h4>
                    <p>Confira curiosidades sobre as produções de ação cinematograficas...</p>
                    <a class="saibaArt" href="acao_news.php?acoes=acao2">Leia sobre as curiosidades</a>
                </div>
                <div class="col-lg-2 col-md-3 col-6 mt-5 mb-5">
                    <img src="images/artur/antigos_0.jpg" class="img-fluid" max-width=100% height="auto" alt="Imagem do Ator Buce Willis, com a escrita Maiores filmes.">
                </div>
                <div class="col-lg-3 col-md-3 col-5 mt-5 mb-5 border-right border-bottom border-dark">
                    <h4 class="titulo">Maiores filmes:</h4>
                    <p>Conheça as nossas indicações sobre os melhores filmes de ação de todos os tempos...</p>
                    <a class="saibaArt" href="acao_news.php?acoes=acao3">Leia sobre os filmes</a>
                </div>
            </div>
        </section>
    </div>
</main>








<?php
include('templates/footer.php');
?>
