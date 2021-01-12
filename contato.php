<?php
include ('templates/header.php');
//Incluido o menu de navegação
?>

<main>
    <div class="container">
        <div class="row">

            <div class="col-md-12 col-lg-6 col-sm-12 col-xl-6 mt-5">
                <form action="validacao.php" method="POST">
                    <div class="form-row">
                        <div class="form-group col-lg-7 col-md-7 col-sm-12 offset-md-3">
                            <label for="inputNome">Nome:</label>
                            <input type="text" name="nome" class="form-control" id="inputNome" placeholder="Digite o seu nome." autocomplete="nome" aria-required="true">
                            <br>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-lg-7 col-md-7 col-sm-12 offset-md-3">
                            <label for="inputEmail4">E-mail:</label>
                            <input type="text" name="email" class="form-control" id="inputEmail" placeholder="Digite o seu e-mail." autocomplete="email" aria-required="true">
                            <br>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-lg-7 col-md-7 col-sm-12 offset-md-3">
                            <label for="inputCity">Cidade:</label>
                            <input type="text" name="cidade" class="form-control" id="inputCity" placeholder="Digite a sua cidade." autocomplete="cidade">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-lg-7 col-md-7 col-sm-12 offset-md-3">
                            <label for="inputState">UF:</label>
                            <select name="UF" id="inputState" class="form-control">
                                <option value="">Selecione o estado</option>
                                <option value="AC">AC</option>
                                <option value="AL">AL</option>
                                <option value="AP">AP</option>
                                <option value="AM">AM</option>
                                <option value="BA">BA</option>
                                <option value="CE">CE</option>
                                <option value="DF">DF</option>
                                <option value="ES">ES</option>
                                <option value="GO">GO</option>
                                <option value="MA">MA</option>
                                <option value="MT">MT</option>
                                <option value="MS">MS</option>
                                <option value="MG">MG</option>
                                <option value="PA">PA</option>
                                <option value="PB">PB</option>
                                <option value="PR">PR</option>
                                <option value="PE">PE</option>
                                <option value="PI">PI</option>
                                <option value="RJ">RJ</option>
                                <option value="RN">RN</option>
                                <option value="RS">RS</option>
                                <option value="RO">RO</option>
                                <option value="RR">RR</option>
                                <option value="SC">SC</option>
                                <option value="SP">SP</option>
                                <option value="SE">SE</option>
                                <option value="TO">TO</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-lg-7 col-md-7 col-sm-12 offset-md-3">
                            <label for="exampleFormControlTextarea1">Mensagem:</label>
                            <textarea name="mensagem" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Sua opinião é muito importante para nós." aria-required="true"></textarea>
                        </div>
                    </div>

                    <div class="form-row">

                        <div class="form-group  offset-md-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck" name="confirme" aria-required="true">
                                <label class="form-check-label" for="gridCheck">
                                    Confirme
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <button type="submit" class="btn btn-secondary col-md-3 offset-md-3">
                            <a class="dropdown-item bg-secondary">Enviar</a>
                        </button>
                    </div>

                </form>
            </div>
            <div class="col-lg-5 col-md-12 col-sm-12">

                <img src="images/equipeicone.png" class="img-fluid" max-width=100% height="auto" alt="icone" />

            </div>
        </div>
    </div>
</main>


<?php
include('templates/footer.php');
//Incluindo o rodapé
?>
