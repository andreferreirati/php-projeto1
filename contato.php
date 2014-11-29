<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>PHP - Projeto 1 </title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/justified-nav.css" rel="stylesheet">
</head>
<body>
<?php require_once("menu.php"); ?>

<!-- Jumbotron -->
<div class="jumbotron">
    <h1>Contato:</h1>
    <form action="formulario-sucesso.php" method="post">
        <div class="form-group">
            <input name="nome" id="nome" type="text" class="form-control" placeholder="Seu nome">
        </div>

        <div class="form-group">
            <input name="email" id="email" type="email" class="form-control" placeholder="Seu E-mail" requiredMessage="Você deve informar um email válido!">
        </div>

        <div class="form-group">
            <input name="assunto" id="assunto" type="text" class="form-control" placeholder="Assunto">
        </div>

        <div class="form-group">
            <textarea name="mensagem" id="mensagem" class="form-control" rows="5" placeholder="Sua mensagem"></textarea>
        </div>
        <button type="submit" class="btn btn-default">Enviar</button>
    </form>
</div>


<!--
<div>
    <?php //require_once($_GET["arquivo"]); ?>
</div>
-->
<?php require_once("rodape.php"); ?>
</body>
</html>
