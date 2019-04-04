
<!DOCTYPE html>
<html lang="pt-BR">

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Troca Almoço</title>

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,400,400italic,500,500italic,700,700italic"
        rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="comp/dist/css/swiper.min.css">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
<header class="header" style="background-color: #00E676;">
        <img src="http://www.smn.com.br/content/img/logotipo/light-bg.svg" alt="">
        <div class="flex-center">
            <div class="menu">
               <a href="google.com"> </a>
            </div>
                <a href="adcar.php" class="dropbtn">Cardapio</a>
                <a href="index.php" class="dropbtn"><i class="material-icons">exit_to_app</i></a>
        </div>
    </header>

    <?php
$cx = mysqli_connect("mysql995.umbler.com:41890","bancosmn","smn0K3NOis");
$db = mysqli_select_db($cx, "smn");
$sql = mysqli_query($cx, "SELECT a.comida,a.dat,u.user FROM alteracao a INNER JOIN user u ON u.id = a.fk_user; ") or die( 
  mysqli_error($cx)
);
while($aux = mysqli_fetch_assoc($sql)) { 
  echo "-----------------------------------------<br />"; 
  echo "Nome:".$aux["user"]."<br />"; 
  echo "Prato:".$aux["comida"]."<br />"; 
  echo "Dia:".$aux["dat"]."<br />";
}
?>
</body>
</html>