<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="Complementos/LOGOS/LOGO_PRETA.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body class="listar">
<?php
    @session_start();
    if(isset($_SESSION['msg'])){
        echo "<p class=alert>$_SESSION[msg]</p>";
        unset($_SESSION['msg']);
    }
    include('php/navbar.php');
    require('connect.php');
?>
<?php
    $codigo = $_GET['cod'];
    require('connect.php');
   
?>
<?php
echo "<div class=desc>";
$busca = mysqli_query($con, "Select * from `tab_animes` where `Codanime` = '$codigo'");
$anime = mysqli_fetch_array($busca);
echo "<div>";
echo "<img src=$anime[Capa]>";
echo "<h1>$anime[Nome]</h1>";
echo "<p>$anime[Sinopse]</p>";
echo "<p>$anime[Genero]</p>";
echo "<p>Estréia: $anime[Data]</p>";
echo "<p>$anime[Episodios] episódios</p>";
echo "<p>Diretor: $anime[Diretor]</p>";
echo "<p>Estúdio: $anime[Estudio]</p>";
echo "<p>Faixa etária: $anime[fEtaria]</p>";
echo "<div class=centro>";
echo "<button class=btn><a href=alterar.php?cod=$anime[Codanime]>Alterar</a></button>";
echo "<button class=btn><a href=javascript:excluir($anime[Codanime])>Excluir</a></button>";
echo "</div>";
echo "</div>";
echo "</div>";
?>
<script>
        function excluir(Codanime){
            resp = confirm('Deseja excluir '+Codanime+'?');
            if(resp == true){
                window.location = "excluir.php?cod="+Codanime;
            }
        }
    </script>
<script>
    document.title = '<?php echo $anime['Nome'];?> - Assista no ALLnimation';
</script>
</body>
</html>