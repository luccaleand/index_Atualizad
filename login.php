<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>CRUD</title>
    </head>
    <style>
    article {
        padding: 2%;
        display: flex;
        /*<background-color: red;*/
    }

    section {
        padding: 50px;
        border: 1px solid #000;
        border-radius: 50px;
        background-color: #eee;
        margin-bottom: 50px;
        /*  background-color: purple;*/
        /*color: yellow;*/

    }

    * {
        margin: 0 auto;
        padding: 0;
        box-sizing: border-box;
    }

    #menu-h {
        list-style: none;
        padding: 0;
        padding-top: 5px;
        background-color: #99BCBD;
        text-align: center;
        height: 80px;
        font-family: arial, sans-serif;
        border-bottom: solid 4px #4E9094;
    }

    #titulo {
        margin-left: 10px;
        text-align: left;
        font-weight: bold;
    }

    #menu-h li {
        display: inline;
        background-color: #326950;
        justify-content: center;
        margin: 90px;
        padding-left: 20px;
        padding-right: 20px;
        padding-top: 5px;
        padding-bottom: 5px;
        border-radius: 4px;
    }

    #menu-h li a {

        color: #FFF;
        padding: 10px;
        display: inline-block;
        text-decoration: none;
        display: inline;
    }
</style>
    <body>
    <header>

<nav>
<div class="menu-h">
    
    <ul>
    <div class="logo">
        <img src="../imagens/borboleta.png">
    </div>
    <div class="primli">
    <li><a href="index.php"> HOME </a></li>
    </div>
    <li><a href="famosos.php"> RELATOS </a></li>
    <li><a href="faleconosco.php"> FALE CONOSCO </a></li>
    <li><a href="empresas.php"> EMPRESAS </a></li>
    <li><a href="login.php"> LOGIN </a></li>
    </ul>
    
    
</div>
</nav>
</header>
    <main>
    <article>

        <section>
        <h1>Login</h1>
        <?php
            if(isset($_SESSION['msg'])){
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
            }
        ?>
        <form method="POST" action="valida.php">
            <label for= "inputEmail">E-mail: </label>
            <input type="email" name="email" id="inputPassword">
            <br><br>
            <label for= "inputPassword">Senha: </label>
            <input type="password" name="senha" id="inputPassword">
            <br><br>
            <input type="submit" value="Logar">
        </form>
        <P>
            <?php
                if(isset($_SESSION['loginErro'])){
                    echo $_SESSION ['loginErro'];
                    unset ($_SESSION ['loginErro']);
                }
            ?>
        </p>
        </section>
        </article> 
        </main> 
    </body>
</html>