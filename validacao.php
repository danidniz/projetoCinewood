<?php 
date_default_timezone_set('America/Sao_Paulo');


$nome = (isset($_POST['nome'])) ? $_POST['nome'] : ''; 
$email = (isset($_POST['email'])) ? $_POST['email'] : ''; 
$cidade = (isset($_POST['cidade'])) ? $_POST['cidade'] : ''; 
$UF = (isset($_POST['UF'])) ? $_POST['UF'] : ''; 
$mensagem = (isset($_POST['mensagem'])) ? $_POST['mensagem'] : ''; 
$confirme = (isset($_POST['confirme'])) ? $_POST['confirme'] : ''; 
$mensagemErro = '';    


include ('templates/header.php');

if ($nome == '' || $email == '' || $cidade == '' || $UF == '' || $mensagem == ''): 
    
    echo '
        <div class="row">
            <div class="col-12 ml-5 mt-5 text-left-justify">
                <p>É necessário preencher todos os campos!</p>
            </div>
            </div>
        <div class="row">
            <div class="col-12 ml-5 mt-2 text-left-justify">
                <a href="contato.php">Voltar</a>
            </div>
        </div>'; 
    exit; 
endif; 

if (strpos($email, '@') === false):
     $mensagemErro .= '
     <div class="row">
        <div class="col-12 m-5 text-center-justify">
            <h6>* E-mail inválido!</h6>
        </div>
    </div>
    <div class="row">
        <div class="col-12 ml-5 mt-2 text-left-justify">
            <a href="contato.php">Voltar</a>
        </div>
    </div>';
endif; 


if($confirme == ''): 
    $mensagemErro .= '
   <div class="row">
        <div class="col-12 m-5 text-center-justify">
            <h6>* É necessária a confirmação!</h6>
        </div>
    </div>
    <div class="row">
        <div class="col-12 ml-5 mt-2 text-left-justify">
          <a href="contato.php">Voltar</a>
        </div>
    </div>';
 endif;



if ($mensagemErro === ''): 
    
    $contLinha = 0;
    if (file_exists('cinewood.txt')):
        $file = fopen('cinewood.txt', 'r'); 
        while(!feof($file)):
            $linha = fgets($file, 1024); 
            $contLinha++;
        endwhile;
        fclose($file);
        $contLinha--;
    endif;
    
    $file = fopen('cinewood.txt', 'a+'); 
    if ($contLinha == 0): 
        fwrite($file, 'CODIGO | NOME | EMAIL | CIDADE | UF | DATA DE ENVIO' . PHP_EOL);    
        $contLinha++;
    endif;

    $dataAtual = date("d/m/Y H:i:s");
    $codigo = str_pad($contLinha, 6, '0', STR_PAD_LEFT);
    $info = "$codigo | $nome | $email | $cidade | $UF |  $dataAtual" . PHP_EOL;
    fwrite($file, $info); 
    fclose($file);


?>

<main>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 mt-5">
                <h4>Mensagem enviada!</h4>
                <p>Nós agradecemos seu contato.</p>
                <p><a href="contato.php">Voltar</a></p>
                <div class="col-lg-5 col-md-8 col-sm-12">
                    <div class="img-center">
                        <img src="images/equipeicone.png" class="img-fluid" alt="icone" />
                    </div>
                </div>


            </div>
        </div>
    </div>
</main>
<?php include('templates/footer.php');?>


<?php
   
else: 
    echo $mensagemErro;
endif;
?>
