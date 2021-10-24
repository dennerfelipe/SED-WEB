<?php
    session_start();

    if(!isset($_SESSION["USUARIO"])){
        //REDIRECIONADO PARA O LOGIN
        header("Location: autenticacao.php");
    }

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Pagina Inicial </title>
    <link rel="stylesheet" href="css/style2.css">
</head>
<body>
    <div class="box_login">
        <h2> Bem-vindo </h2>
        <p><img src="figure/nobk_bender.gif"></p>
    </div>   
</body>
</html>

