<?php 
session_start();
$com = mysqli_connect("mysql995.umbler.com:41890","bancosmn","smn0K3NOis","smn");
if(!$com){
    echo" erro no banco";
}
$sql ="Select * from refeicao where idcomida = 5";
$result = mysqli_query($com,$sql);
if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result)){
        $data = $row["dia"].$row["mes"];
    }
}
$user = $_SESSION['token'];
$prato = $_POST['prato5'];


if (isset($_POST['che5'])) {
    $buton = "não vai almoçar";
} else {
    $buton = 1;
}



if($buton== 1 ){
    $sql = "INSERT INTO alteracao (comida, dat, fk_user)
VALUES ('".$prato."','".$data."','".$user."')";
}else{
    $sql1 = "INSERT INTO alteracao (comida, dat, fk_user)
VALUES ('".$buton."','".$data."','".$user."')";
}

if (mysqli_query($com, $sql)) {
    echo "<Script>alert('alterado com sucesso')</script>";
} else {
    echo "<Script>alert('Erro ao salvar')</script> ";
}
header('Location: ../principal.php');
mysqli_close($com);
?>

