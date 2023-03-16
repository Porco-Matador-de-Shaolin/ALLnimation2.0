<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php
    @session_start();
?>
    <header>
        <div class="navbar">
        <nav>
            <a href="index2.php"><img class="logonav" src="Complementos/LOGOS/LOGO_BRANCA.png" alt="Erro na Logo"></a>
            <ul class="links">              
                <?php
                echo "<li><a href=pesquisar.php>Buscar</a></li> ";
                    if(isset($_SESSION['login']) && $_SESSION['login'] == true){
                        echo "<div class=lol>";
                        if($_SESSION['Adm'] == true){
                            echo "<li><a href=cad_anime.php>Cadastrar</a></li>";
                            echo "<li><a href=listar.php>Lista</a></li>";
                        }
                        echo "<a href=logoff.php><li>Sair</li></a>";
                        echo "<a href=login.php><li>$_SESSION[nome]</li><a/>";
                        echo "</div>";
                    }else{
                        echo "<a href=login.php><li>Entrar</li></a>";
                    }
                ?>
            </ul>
        </nav>
        </div>
    </header>
</body>
</html>