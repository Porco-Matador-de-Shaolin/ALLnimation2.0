<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/carousel.css">
    <link rel="icon" href="Complementos/LOGOS/LOGO_PRETA.png">
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="crossorigin="anonymous"></script>
    <script src="js/carousel.js"></script>
    <title>AlLnimation - O maior do mundo</title>
</head>
<body class="index">
<?php
    include('php/navbar.php')
?>
<div class="content">
    <div class="slides">
        <input class="inputslide" type="radio" name="slide" id="slide1">
        <input class="inputslide" type="radio" name="slide" id="slide2">
        <input class="inputslide" type="radio" name="slide" id="slide3">
        <input class="inputslide" type="radio" name="slide" id="slide4">
        <input class="inputslide" type="radio" name="slide" id="slide5">


        <div class="slide s1">
            <img src="./imgindex/DBSUPERINDEX.jpeg"  srcset="./poster/dbz_capa.jpg 100%" sizes="max-width: 1012 700" alt="capa dragon ball super">
        </div>
        <div class="slide">
            <img src="./imgindex/OVERLORDINDEX.jpg" alt="capa overlord">
        </div>
        <div class="slide">
            <img src="./imgindex/TOKYOGHOULINDEX.webp" alt="capa tokyo ghoul">
        </div>
        <div class="slide">
            <img src="./imgindex/DEMONSLAYERINDEX.jpeg" alt="capa demon slayer">
        </div>
        <div class="slide">
            <img src="./imgindex/HRODHIZIO.png" alt="capa gangsta">
        </div>
    </div>

    <div class="navigation">
        <label class="bar" for="slide1"></label>
        <label class="bar" for="slide2"></label>
        <label class="bar" for="slide3"></label>
        <label class="bar" for="slide4"></label>
        <label class="bar" for="slide5"></label>
    </div>
</div>
<div class="index_animes">
<?php
    include('connect.php');
?>
    <p>Últimos lançamentos</p>
    <div class="gallery js-flickity" data-flickity-options='{ "wrapAround": true }'>
        <?php
            $animes = mysqli_query($con, "Select * from `tab_animes` order by `Codanime` desc limit 10");
            while($anime = mysqli_fetch_array($animes)){
                echo "<div class=recentes>";
                echo "<a href=template.php?cod=$anime[Codanime]><img src=$anime[Capa]></a>";
                echo "</div>";
            }
        ?>
    </div>
    <hr>
    <p>Para morrer de rir</p>
    <div class="gallery js-flickity" data-flickity-options='{ "wrapAround": true }'>
        <?php
            $animes = mysqli_query($con, "Select * from `tab_animes` where `Genero` like '%comédia%' order by rand() limit 10");
            while($anime = mysqli_fetch_array($animes)){
                echo "<div class=recentes>";
                echo "<a href=template.php?cod=$anime[Codanime]><img src=$anime[Capa]></a>";
                echo "</div>";
            }
        ?>
    </div>
    <hr>
    <p>Ação a todo momento</p>
    <div class="gallery js-flickity" data-flickity-options='{ "wrapAround": true }'>
        <?php
            $animes = mysqli_query($con, "Select * from `tab_animes` where `Genero` like '%ação%' order by rand() limit 10");
            while($anime = mysqli_fetch_array($animes)){
                echo "<div class=recentes>";
                echo "<a href=template.php?cod=$anime[Codanime]><img src=$anime[Capa]></a>";
                echo "</div>";
            }
        ?>
    </div>
    <hr>
    <p>Para entrar em clima de copa</p>
    <div class="gallery js-flickity" data-flickity-options='{ "wrapAround": true }'>
        <?php
            $animes = mysqli_query($con, "Select * from `tab_animes` where `Genero` like '%esporte%' order by rand() limit 10");
            while($anime = mysqli_fetch_array($animes)){
                echo "<div class=recentes>";
                echo "<a href=template.php?cod=$anime[Codanime]><img src=$anime[Capa]></a>";
                echo "</div>";
            }
        ?>
    </div>
    <hr>
    <p>Viaje em diversas aventuras</p>
    <div class="gallery js-flickity" data-flickity-options='{ "wrapAround": true }'>
        <?php
            $animes = mysqli_query($con, "Select * from `tab_animes` where `Genero` like '%aventura%' order by rand() limit 10");
            while($anime = mysqli_fetch_array($animes)){
                echo "<div class=recentes>";
                echo "<a href=template.php?cod=$anime[Codanime]><img src=$anime[Capa]></a>";
                echo "</div>";
            }
        ?>
    </div>
</div>
</body>
</html>