<?php
include('templates/header.php');
include('banco.php');
//Incluido o menu de navegação
?>

<!--NOTÍCIA EM DESTAQUE-->

<div class="alert bg-light">
    <div class="text-center mt-4">
        <h1 class="display-4 titulo-guinho">Ah, os filmes nacionais...</h1>
    </div>
    <p class="text-center"> Veremos algumas curiosidades sobre o Cinema Nacional e claro, indicações de filmes que você não pode deixar de assistir! </p>
</div>

<div class="container">
    <div class="row m-1">
        <div class="col-12 mt-4 text-left">
            <h2 class="h2-thiago">Destaque </h2> 
            <hr>
        </div>
    </div>


    <div class="row m-1">
        <div class="col-12 text-center mt-3">
            <h2 class="titulo">Primeiro Filme Brasileiro</h2>
        </div>
        <div class="col-sm-12">
            <div class="row m-1">
                <div class="col-lg-6 col-md-12 col-sm-12 mt-2 mb-2 p-1">
                    <img src="images/guinho/primeirofilmebrasileiro.jpg" id="Primeiro Filme" class="img-fluid" max-width=100% height="auto" alt="Imagem de cena do Primeiro Filme Brasileiro">
                </div>
                <div class="col-lg-6 mb-3 mt-1 p-1">
                    <p class="text-justify"> Os primeiros filmes brasileiros foram rodados entre 1897-1898. Hoje em dia, os pesquisadores consideram que os primeiros filmes realizados
                        no Brasil são: "Ancoradouro de Pescadores na Baía de Guanabara" (de José Roberto da Cunha Salles), "Chegada do trem em Petrópolis",
                        "Bailado de Crianças no Colégio, no Andaraí" e "Uma artista trabalhando no trapézio do Politeama" todos datados de 1897.
                        Já a obra chamada de "Acabaram-se os otários" é um filme brasileiro do gênero comédia, dirigido por Luiz de Barros em 1929. É considerado o primeiro filme sonoro do Brasil.
                        Fonte: Wikipedia</p>
                    <button type="button" class="btn btn-light confira-guinho"><a href="https://www.youtube.com/watch?v=tFD3_H5pQeo" target="_blank">Confira cena rara de "Acabaram-se os otários"</a></button>
                </div>
            </div>
        </div>
    </div>


    <div class="row m-1">
        <div class="col-sm-12 col-md-6 col-lg-6">
            <div class="text-center">
                <h2 class="h2-thiago mt-5">Você tem que assistir!</h2>
                <hr>
            </div>

            <div class="mb-3">
                <div class="card" style="max-width:100%">
                    <div class="row">
                        <div class="col-12 p-3">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/62DfweY9xss"></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="text-center titulo mt-3">O Auto da Compadecida</h5>
                        <p class="text-justify">
                            <p> <b> Ano: </b> 2000</p>
                            <p> <b> Direção: </b> Guel Arraes</p>
                            <p> <b> Gênero: </b> comédia dramática</p>
                            <p class="text-justify">O Auto da Compadecida foi o filme brasileiro de maior bilheteria no ano 2000, tendo vencido o Grande Prêmio
                                Cinema Brasil em 4 categorias. Baseado na peça de teatro de Ariano Suassuna, o filme conta as aventuras hilariantes
                                Chicó e João Grilo no interior da Paraíba nos anos 30. A história é tão cativante que é impossível desgrudar os olhos
                                da tela.
                            </p>
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <div class="card" style="max-width:100%">
                    <div class="row">
                        <div class="col-12 p-3">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/JSWgOhRjJmo"></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="text-center titulo mt-3">Central do Brasil</h5>
                        <p class="text-justify">
                            <p> <b> Ano: </b> 1998</p>
                            <p> <b> Direção: </b> Walter Salles</p>
                            <p> <b> Gênero: </b> drama</p>
                            <p class="text-justify">Esse road movie de Walter Salles é uma verdadeira joia rara do cinema nacional. O filme conta a história de um
                                encontro um tanto inusitado: Dora, uma ex-professora que escreve cartas na Central do Brasil, e o menino Josué, que
                                fica órfão da noite para o dia. O filme, que emocionou o mundo, recebeu duas indicações ao Oscar: nas categorias melhor
                                filme estrangeiro e melhor atriz (Fernanda Montenegro).</p>
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <div class="card" style="max-width:100%">
                    <div class="row">
                        <div class="col-12 p-3">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/a8ap3ZdSUEQ"></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="text-center titulo mt-3">O Que é Isso Companheiro</h5>
                        <p class="text-justify">
                            <p> <b> Ano: </b> 1997</p>
                            <p> <b> Direção: </b> Bruno Barreto</p>
                            <p> <b> Gênero: </b> drama</p>
                            <p class="text-justify">Esse filme, baseado no livro homônimo de Fernando Gabeira, conta a história do sequestro do embaixador norte-americano
                                no Brasil Charles Elbrick, em setembro de 1969, por militantes políticos clandestinos que lutavam contra a ditadura militar.
                                Foi indicado ao Oscar na categoria melhor filme estrangeiro em 1998.</p>
                        </p>
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <div class="card" style="max-width:100%">
                    <div class="row">
                        <div class="col-12 p-3">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Dffs46VCJ_g"></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="text-center titulo mt-3">Que Horas Ela Volta?</h5>
                        <p> <b> Ano: </b> 2015</p>
                        <p> <b> Direção: </b> Anna Muylaert</p>
                        <p> <b> Gênero: </b> drama</p>
                        <p class="text-justify">Regina Casé interpreta Val, uma emprega doméstica pernambucana que trabalha e mora há anos na casa dos patrões,
                            em São Paulo. A suposta harmonia da relação entre Val e a família para a qual trabalha é quebrada quando sua filha
                            Jéssica vai a São Paulo para se preparar para o vestibular.</p>
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <div class="card" style="max-width:100%">
                    <div class="row">
                        <div class="col-12 p-3">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/_V_nZNWPYQk"></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="text-center titulo mt-3">Tropa de Elite</h5>
                        <p class="text-justify">
                            <p> <b> Ano: </b> 2007</p>
                            <p> <b> Direção: </b> José Padilha</p>
                            <p> <b> Gênero: </b> ação</p>
                            <p class="text-justify">Vencedor do Urso de Ouro em 2008, Tropa de Elite marcou época e gerou muita discussão. Será o Capitão Nascimento
                                (interpretado por Wagner Moura) um herói? O filme faz apologia da tortura e outras práticas criminosas por parte de
                                agentes do Estado? Seja como for, o filme é eletrizante e imperdível para quem gosta de um bom filme de ação.</p>
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <div class="card" style="max-width:100%">
                    <div class="row">
                        <div class="col-12 p-3">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/H5qReKA8sD0"></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="text-center titulo mt-3">O Palhaço</h5>
                        <p class="text-justify">
                            <p> <b> Ano: </b> 2011</p>
                            <p> <b> Direção: </b> Selton Mello</p>
                            <p> <b> Gênero: </b> comédia dramática</p>
                            <p class="text-justify">Benjamin é um palhaço que está em meio a uma crise existencial: será que continua sua carreira no circo ou parte
                                para uma vida, digamos, mais comum?... Esse é o conflito em torno do qual gira a história de O Palhaço, filme escrito
                                e dirigido por Selton Mello, que também interpreta o palhaço Benjamin.</p>
                    </div>
                </div>
            </div>
        </div>



        <div class="col-sm-12 col-md-6 col-lg-6">

            <div class="text-center">
                <h2 class="h2-thiago mt-5">Filmes antigos!</h2>
                <hr>
            </div>

            <div class="mb-3">
                <div class="card" style="max-width:100%">
                    <img class="card-img-top" src="images/guinho/mazaroppi.jpg" id="img3_guinho" class="card-img" alt="Imagem do Mazzaropi">
                    <div class="card-body">
                        <h5 class="text-center titulo mt-3">O fenômeno Mazzaropi!</h5>
                        <p class="text-justify">Mazzaropi nasceu no bairro de Santa Cecília, em São Paulo. Aos 14 anos...</p>
                        <button type="button" class="btn btn-light confira-guinho"><a href="nacional_news.php?nacionais=nacional0">Clique para ver a matéria completa</a></button>
                    </div>
                </div>
            </div>

            <div class="card mb-3">
                <h3 class="text-center titulo mt-3">Eles Não Usam Black Tie</h3>
                <div class="card" style="max-width:100%">
                    <img class="card-img-top" src="images/guinho/elesnaousamblacktie.jpg" id="Eles Não Usam Black Tie" class="card-img" alt="Imagem do Filme Eles Não Usam Black Tie">
                    <div class="card-body">
                        <p> <b> Ano: </b> 1981</p>
                        <p> <b> Direção: </b> Leon Hirszman</p>
                        <p> <b> Gênero: </b> drama</p>
                        <p class="text-justify">Baseado na peça de teatro de Gianfrancesco Guarnieri, o filme conta a história do líder sindical Otávio
                            (Guarnieri) e de seu filho Tião (Carlos Alberto Riccelli). Ao saber que será pai e prestes a se casar, Tião decide
                            furar a greve, entrando em conflito com o pai, que anos anos havia sido preso por razões políticas. É o 14º melhor
                            filme brasileiro, de acordo com a Abraccine.</p>
                        <button type="button" class="btn btn-light confira-guinho"><a href="https://www.youtube.com/watch?v=FrcKaDYO3q4" target="_blank">Confira o Trailer</a></button>
                    </div>
                </div>
            </div>

            <div class="card mb-3">
                <h3 class="text-center titulo mt-3">Todas as Mulheres do Mundo</h3>
                <div class="card" style="max-width:100%">
                    <img class="card-img-top" src="images/guinho/todasasmulheresdomundo.jpg" id="Todas as Mulheres do Mundo" class="card-img" alt="Imagem do Filme Todas as Mulheres do Mundo">
                    <div class="card-body">
                        <p> <b> Ano: </b> 1967</p>
                        <p> <b> Direção: </b> Domingos Oliveira</p>
                        <p> <b> Gênero: </b> comédia</p>
                        <p class="text-justify">Este clássico do cinema nacional é considerado uma das melhores comédias brasileiras de todos os tempos, ocupando o 37º
                            lugar na lista da Abraccine. Trata-se da história de um mulherengo, Paulo (Paulo José), que se apaixona e acaba conquistando
                            o coração de Maria Alice (Leila Diniz), que rompe o noivado para ficar com ele.</p>
                        <button type="button" class="btn btn-light confira-guinho"><a href="https://www.youtube.com/watch?v=gJlFbhmMb0Y" target="_blank">Confira o Trailer</a></button>
                    </div>
                </div>
            </div>

            <div class="card mb-3">
                <h3 class="text-center titulo mt-3">Dona Flor e Seus Dois Maridos</h3>
                <div class="card" style="max-width:100%">
                    <div class="row">
                        <div class="col-12 p-3">
                            <div class="embed-responsive embed-responsive-21by9">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/dM4nZGsR-vc"></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <p> <b> Ano: </b> 1976</p>
                        <p> <b> Direção: </b> Bruno Barreto</p>
                        <p> <b> Gênero: </b> comédia</p>
                        <p class="text-justify">Adaptação do romance de Jorge Amado, publicado 10 anos antes, a famosa história do triângulo amoroso entre Dona Flor
                            (Sônia Braga), o farmacêutico Madureira (Mauro Mendonça) e o fantasma do malandro Vadinho (José Wilker) arrastou multidões
                            aos cinemas nos anos 70, transformando-se num dos maiores sucessos de bilheteria de todos os tempos do cinema nacional.</p>
                    </div>
                </div>
            </div>

            <div class="card mb-3">
                <h3 class="text-center titulo mt-3">Macunaíma</h3>
                <div class="card" style="max-width:100%">
                    <img class="card-img-top" src="images/guinho/macunaima.jpg" id="Todas as Mulheres do Mundo" class="card-img" alt="Imagem do Filme Macunaíma">
                    <div class="card-body">
                        <p> <b> Ano: </b> 1969</p>
                        <p> <b> Direção: </b> Joaquim Pedro de Andrade</p>
                        <p> <b> Gênero: </b> comédia, fantasia</p>
                        <p class="text-justify">O 10º melhor filme da história do cinema nacional, segundo os críticos da Abraccine, é um verdadeiro clássico.
                            Baseado no romance homônimo de Mário de Andrade, o filme narra a história de Macunaíma, o herói sem nenhum caráter,
                            do seu nascimento às margens do rio Uraricoera, em Roraima, às suas aventuras na cidade grande. O filme conta com atores
                            consagrados do cinema brasileiro, como Grande Otelo, Paulo José e Milton Gonçalves.</p>
                        <button type="button" class="btn btn-light confira-guinho ml-4"><a href="https://www.youtube.com/watch?v=t0XqoeIOeVs" target="_blank">Confira o Trailer</a></button>
                        <button type="button" class="btn btn-light confira-guinho ml-5"><a href="nacional_news.php?nacionais=nacional3" target="_blank">Leia o resumo do filme</a></button>
                    </div>
                </div>
            </div>

            <div class="card mb-3">
                <h3 class="text-center titulo mt-3">O Bandido da Luz Vermelha</h3>
                <div class="card" style="max-width:100%">
                    <div class="row">
                        <div class="col-12 p-3">
                            <div class="embed-responsive embed-responsive-21by9">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/N8rPl0XZWqI"></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <p> <b> Ano: </b> 1968</p>
                        <p> <b> Direção: </b> Rogério Sganzerla</p>
                        <p> <b> Gênero: </b> policial</p>
                        <p class="text-justify">"O bandido que não respeita a mulher nem a propriedade", diziam as manchetes policiais da época. O filme é ficcional,
                            mas inspirado na história de João Acácio Pereira da Costa, criminoso que amedrontou a cidade de São Paulo nos anos 60.
                            Trata-se de um clássico do chamado "cinema marginal", considerado pela Abraccine o 6º melhor filme brasileiro de todos os
                            tempos.</p>
                        <button type="button" class="btn btn-light confira-guinho"><a href="nacional_news.php?nacionais=nacional2" target="_blank">Saiba mais</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center mt-5">
        <h2 class="h2-thiago mt-3">Curiosidades do Cinema Nacional</h21>
            <hr>
    </div>
    <div class="card mb-3">
        <div class="col-12">
            <img src="images/guinho/cinemanacional.jpg" id="img3_guinho" class="card-img" alt="Imagem sobre o Cinema Nacional">
            <div class="card-body">
                <p class="text-justify">Algumas curiosidades sobre nosso cinema...</p>
                <button type="button" class="btn btn-light confira-guinho"><a href="nacional_news.php?nacionais=nacional1">Clique para ver a matéria completa</a></button>
            </div>
        </div>
    </div>


    <?php
include('templates/footer.php');
//Incluindo o rodapé
?>
