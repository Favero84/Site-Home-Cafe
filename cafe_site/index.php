<?php
require 'config.php';
require 'classes/Usuarios.php';

$u = new Usuarios();

if(isset($_POST['name']) && !empty($_POST['name'])) {
    $name = addslashes($_POST['name']);
    $email = addslashes($_POST['email']);
    $message = addslashes($_POST['message']);
    
    $u->addMensagem($name, $email, $message);
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>CAFE HOME</title>
        <meta charset="UTF-8">
        <meta id="viewport" name="viewport" content="width=device-width, user-scalable=no">
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
        <link href="assets/css/style.css" rel="stylesheet" />
    </head>
    <body>
        <div class="menutopo">
            <ul>
                <a href="#principal"><li><strong>CAFE HOME</strong></li></a>
                <a href="#cardapio"><li><strong>CARDAPIO</strong></li></a>
                <a href="#contato"><li><strong>CONTATO</strong></li></a>
            </ul>
        </div>
        <div id="principal" class="principal">
            <div class="imagemprincipal">
                <img src="assets/images/main.jpg" class="img-responsive"/>
            <div class="grades">
                <div class="grade1">
                    <div class="titulo">C A F E H O M E</div>
                    <div class="subtitulo"><strong>Seja bem vindos</strong></div>
                    <div class="texto"><br/>Queremos crescer cada vez mais no Brasil para levar o melhor café<br/> e as melhores infusões cada vez mais perto de você.
                    </div>
                </div>
            </div>
            </div>
        </div>    
            <div id="cardapio" class="cardapio">
            <div class="titulocardapio"><strong>M e n u</strong></div>
            <div class="gradescardapio">
                <div class="cardapiograde1">
                    <img src="assets/images/1.jpg" width="350" />
                    <img src="assets/images/2.jpg" width="350" />
                    <img src="assets/images/3.jpg" width="350" />
                </div>
                <div class="cardapiograde2">
                    <img src="assets/images/4.jpg" width="350" />
                    <img src="assets/images/5.jpg" width="350" />
                    <img src="assets/images/6.jpg" width="350" />
                </div>
            </div>
        </div>
        <div id="cardapio2" class="cardapio">
            <div class="gradescardapio">
                <div class="cardapiograde1">
                    <img src="assets/images/2.jpg" width="350" />
                    <img src="assets/images/3.jpg" width="350" />
                    <img src="assets/images/1.jpg" width="350" />
                </div>
                <div class="cardapiograde2">
                    <img src="assets/images/6.jpg" width="350" />
                    <img src="assets/images/4.jpg" width="350" />
                    <img src="assets/images/5.jpg" width="350" />
                </div>
            </div>
        </div>
        <div id="contato" class="contato">
            <div class="titulocontato"><strong>C o n t a t o</strong></div>
            
            <form method="POST">
                <div class="form-group">
                    <label for="name">Nome</label>
                    <input type="name" class="form-control" name="name" id="name" />
                </div>
                <br/>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" id="email" />
                </div>
                <br/>
                <div class="form-group">
                    <label for="message">Mensagem</label>
                    <textarea name="message" id="message" class="form-control"></textarea>
                </div>
                <br/>
                <div class="botao">
                    <button type="submit" class="btn btn-default">Enviar Mensagem</button>
                </div>    
             </form>
        </div>
        <div class="rodapecafe">
            <div class="textoroda">
                Copyright @ CAFEHOME - Luiz Carlos Favero Junior
            </div>
        </div>
    </body>
</html>

