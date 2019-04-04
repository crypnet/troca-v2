<!DOCTYPE html>
<html lang="pt-BR">
<head>
<?php
$com = mysqli_connect("mysql995.umbler.com:41890","bancosmn","smn0K3NOis","smn");
if(!$com){
    echo" erro no banco";
}
$sql ="Select * from refeicao where idcomida = 1";
$result = mysqli_query($com,$sql);
if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result)){
        $prato = $row["pratoPrincipal"];
        $guarni =$row["guarnicao"];
        $salada1 =$row["salada1"];
        $salada2 =$row["salada2"];
        $sobre =$row["sobremesa"];
        $dia =$row["dia"];
        $mes =$row["mes"];
    
}
}
$sql ="Select * from refeicao where idcomida = 2";
$result = mysqli_query($com,$sql);
if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result)){
        $prato2 = $row["pratoPrincipal"];
        $guarni2 =$row["guarnicao"];
        $salada12 =$row["salada1"];
        $salada22 =$row["salada2"];
        $sobre2 =$row["sobremesa"];
        $dia2 =$row["dia"];
        $mes2 =$row["mes"];
    
}
}
$sql ="Select * from refeicao where idcomida = 3";
$result = mysqli_query($com,$sql);
if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result)){
        $prato3 = $row["pratoPrincipal"];
        $guarni3 =$row["guarnicao"];
        $salada13 =$row["salada1"];
        $salada23 =$row["salada2"];
        $sobre3 =$row["sobremesa"];
        $dia3 =$row["dia"];
        $mes3 =$row["mes"];
    
}
}
$sql ="Select * from refeicao where idcomida = 4";
$result = mysqli_query($com,$sql);
if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result)){
        $prato4 = $row["pratoPrincipal"];
        $guarni4 =$row["guarnicao"];
        $salada14 =$row["salada1"];
        $salada24 =$row["salada2"];
        $sobre4 =$row["sobremesa"];
        $dia4 =$row["dia"];
        $mes4 =$row["mes"];
    
}
}
$sql ="Select * from refeicao where idcomida = 5";
$result = mysqli_query($com,$sql);
if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result)){
        $prato5 = $row["pratoPrincipal"];
        $guarni5 =$row["guarnicao"];
        $salada15 =$row["salada1"];
        $salada25 =$row["salada2"];
        $sobre5 =$row["sobremesa"];
        $dia5 =$row["dia"];
        $mes5 =$row["mes"];
    
}
}
mysqli_close($com);
   // session_start();
   // if($_SESSION['token'] !=null){
    //}else{
       //echo"<script>window.location.href = 'index.php'</script>";
    //}
  ?>
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
                <a href="index.php" class="dropbtn"><i class="material-icons">exit_to_app</i></a>
        </div>
    </header>
    <div class="swiper-container">
        <div class="swiper-wrapper">
        <div class="swiper-slide"><footer>
            <div class="page">
            <form id="test" method="POST" action="php/prin.php">
                <section class="cardapio-header">
                    <h1>Cardápio</h1>
                    <h2><?php echo $dia."/".$mes ?></h2>
                </section>
    
                <section class="content">
    
                    <div class="prato">
                        <h1>Prato Principal</h1>
                    </div>
    
                    <div class="prato">
    
                            <select class="select-prato" id="prato" name="prato">
                                <option id="op1" value="ovo">ovo</option>
                                <option id="op2" value="frango">frango</option>
                                <option id="op3" value="carne">carne</option>
                            </select>
                    </div>
    
                    <div class="prato">
                        <span>Guarnição</span>
                    </div>
                    <div class="prato">
                        <span><?php echo $guarni ?></span>
                    </div>
    
                    <div class="prato">
                        <span>Salada I</span>
                    </div>
                    <div class="prato">
                        <span><?php echo $salada1 ?></span>
                    </div>
    
                    <div class="prato">
                        <span>Salada II</span>
                    </div>
                    <div class="prato">
                        <span><?php echo $salada2 ?></span>
                    </div>
    
                    <div class="prato">
                        <span>Sobremesa</span>
                    </div>
                    <div class="prato">
                        <span><?php echo $sobre ?></span>
                    </div>
    
                </section>
    
                <footer>
    
                    <button>SALVAR</button>
    
                    <div class="cancelar" id="cancel" name="cancel">
                        <input name="che1" id="che1" type="checkbox" />
                        <span>Cancelar almoço</span>
                    </div>
    
                </footer>
    </form>
    
           
            </div>
        </div>
        <div class="swiper-slide"><footer>
            <div class="page">
            <form id="test" method="POST" action="php/prin2.php">
                <section class="cardapio-header">
                    <h1>Cardápio</h1>
                    <h2><?php echo $dia2."/".$mes2 ?></h2>
                </section>
    
                <section class="content">
    
                    <div class="prato">
                        <h1>Prato Principal</h1>
                    </div>
    
                    <div class="prato">
    
                            <select class="select-prato" id="prato2" name="prato2">
                                <option value="a">das</option>
                                <option value="a">das</option>
                                <option value="a">das</option>
                            </select>
                            </div>
    
    <div class="prato">
        <span>Guarnição</span>
    </div>
    <div class="prato">
        <span><?php echo $guarni2 ?></span>
    </div>

    <div class="prato">
        <span>Salada I</span>
    </div>
    <div class="prato">
        <span><?php echo $salada12 ?></span>
    </div>

    <div class="prato">
        <span>Salada II</span>
    </div>
    <div class="prato">
        <span><?php echo $salada22 ?></span>
    </div>

    <div class="prato">
        <span>Sobremesa</span>
    </div>
    <div class="prato">
        <span><?php echo $sobre2 ?></span>
    </div>
                </section>
    
                <footer>
    
                    <button>SALVAR</button>
    
                    <div class="cancelar">
                        <input name="che2" id="che2" type="checkbox" />
                        <span>Cancelar almoço</span>
                    </div>
    
                </footer>
    </form>
    
           
            </div></div>
        <div class="swiper-slide"><footer>
            <div class="page">
            <form id="test" method="POST" action="php/prin3.php">
                <section class="cardapio-header">
                    <h1>Cardápio</h1>
                    <h2><?php echo $dia3."/".$mes3 ?></h2>
                </section>
    
                <section class="content">
    
                    <div class="prato">
                        <h1>Prato Principal</h1>
                    </div>
    
                    <div class="prato">
    
                            <select class="select-prato" id="prato3" name="prato3">
                                <option value="a">das</option>
                                <option value="a">das</option>
                                <option value="a">das</option>
                            </select>
                            </div>
    
    <div class="prato">
        <span>Guarnição</span>
    </div>
    <div class="prato">
        <span><?php echo $guarni3 ?></span>
    </div>

    <div class="prato">
        <span>Salada I</span>
    </div>
    <div class="prato">
        <span><?php echo $salada13 ?></span>
    </div>

    <div class="prato">
        <span>Salada II</span>
    </div>
    <div class="prato">
        <span><?php echo $salada23 ?></span>
    </div>

    <div class="prato">
        <span>Sobremesa</span>
    </div>
    <div class="prato">
        <span><?php echo $sobre3 ?></span>
    </div>
    
                </section>
    
                <footer>
    
                    <button>SALVAR</button>
    
                    <div class="cancelar">
                        <input name="che3" id="che3" type="checkbox" />
                        <span>Cancelar almoço</span>
                    </div>
    
                </footer>
    </form>
           
            </div></div>
        <div class="swiper-slide"><footer>
            <div class="page">
            <form id="test" method="POST" action="php/prin4.php">
                <section class="cardapio-header">
                    <h1>Cardápio</h1>
                    <h2><?php echo $dia4."/".$mes4 ?></h2>
                </section>
    
                <section class="content">
    
                    <div class="prato">
                        <h1>Prato Principal</h1>
                    </div>
    
                    <div class="prato">
    
                            <select class="select-prato" id="prato4" name="prato4">
                                <option value="a">das</option>
                                <option value="a">das</option>
                                <option value="a">das</option>
                            </select>
                            </div>
    
    <div class="prato">
        <span>Guarnição</span>
    </div>
    <div class="prato">
        <span><?php echo $guarni4?></span>
    </div>

    <div class="prato">
        <span>Salada I</span>
    </div>
    <div class="prato">
        <span><?php echo $salada14 ?></span>
    </div>

    <div class="prato">
        <span>Salada II</span>
    </div>
    <div class="prato">
        <span><?php echo $salada24 ?></span>
    </div>

    <div class="prato">
        <span>Sobremesa</span>
    </div>
    <div class="prato">
        <span><?php echo $sobre4 ?></span>
    </div>
                </section>
    
                <footer>
    
                    <button>SALVAR</button>
    
                    <div class="cancelar">
                        <input name="che4" id="che4" type="checkbox" />
                        <span>Cancelar almoço</span>
                    </div>
    
                </footer>
    </form>
           
            </div></div>
        <div class="swiper-slide"><footer>
            <div class="page">
            <form id="test" method="POST" action="php/prin5.php">
                <section class="cardapio-header">
                    <h1>Cardápio</h1>
                    <h2><?php echo $dia5."/".$mes5 ?></h2>
                </section>
    
                <section class="content">
    
                <div class="prato">
                        <h1>Prato Principal</h1>
                    </div>
    
                    <div class="prato">

    
                            <select class="select-prato" id="prato5" name="prato5">
                                <option value="a">das</option>
                                <option value="a">das</option>
                                <option value="a">das</option>
                            </select>
                            </div>
    
    <div class="prato">
        <span>Guarnição</span>
    </div>
    <div class="prato">
        <span><?php echo $guarni5 ?></span>
    </div>

    <div class="prato">
        <span>Salada I</span>
    </div>
    <div class="prato">
        <span><?php echo $salada15 ?></span>
    </div>

    <div class="prato">
        <span>Salada II</span>
    </div>
    <div class="prato">
        <span><?php echo $salada25 ?></span>
    </div>

    <div class="prato">
        <span>Sobremesa</span>
    </div>
    <div class="prato">
        <span><?php echo $sobre5 ?></span>
    </div>
    
                </section>
    
                <footer>
    
                    <button>SALVAR</button>
    
                    <div class="cancelar">
                        <input type="checkbox" />
                        <span>Cancelar almoço</span>
                    </div>
    
                </footer>
    </form>
           
            </div></div>
        </div>
        
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
    <script src="comp/dist/js/swiper.min.js"></script>

<script>
    var swiper = new Swiper('.swiper-container', {
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
  </script>
</body>
</html>