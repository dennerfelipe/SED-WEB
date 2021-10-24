<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> Login </title>
        <link rel="stylesheet" href="css/style2.css">
    </head>

    <body>
        <div class="box_login">
            <div class="capa">
            </div>

            <h1> Autenticação de Usuário </h1>

            <form action="autentic.php" method="post">
                <br>
                <!-- <label for="login"> Usuario </label> -->
                <br>
                <input type="text" name="login" id="login" placeholder="LOGIN">
                <br>
                <!-- <label for="senha"> Senha: </label> -->
                <br>
                <input type="password" name="senha" id="senha" placeholder="SENHA">
                <br>
                <br>
                <button class="neon"> ENVIAR </button>
            </form>
        </div>
    </body>

    <?php
        
        session_start();
        define("LOGIN", "admin");
        define("SENHA", "admin");

    if($_SERVER["REQUEST_METHOD"] == 'POST'){
        if(isset($_POST["login"]) && isset($_POST["senha"])){
            $login = $_POST["login"];
            $senha = $_POST["senha"];
            if($login == LOGIN && $senha == SENHA){
                $_SESSION["USUARIO"] = "Usuario Fulano";
                header("Location: index.php");
            }
        } else {echo "Tente novamente";
        }
    }

    ?>
</html>