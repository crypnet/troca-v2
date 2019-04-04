<?php 
session_start();
$com = mysqli_connect("mysql995.umbler.com:41890","bancosmn","smn0K3NOis","smn");
if(!$com){
    echo" erro no banco";
}
$sql ="Select * from refeicao where idcomida = 1";
$result = mysqli_query($com,$sql);
if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result)){
        $data = $row["dia"]."/".$row["mes"];
    }
}
mysqli_close($com);
$user = $_SESSION['token'];
$prato = $_POST['prato'];


if (isset($_POST['che1'])) {
    $buton = "não vai almoçar";
} else {
    $buton = 1;
}
if($buton== 1 ){
    $sql = "INSERT INTO alteracao(comida,dat,fk_user)VALUES('".$prato."','".$data."','".$user."')";
}else{
    $sql1 = "INSERT INTO alteracao(comida,dat,fk_user)VALUES('".$buton."','".$data."','".$user."')";
}
$com = mysqli_connect("mysql995.umbler.com:41890","bancosmn","smn0K3NOis","smn");
if (mysqli_query($com, $sql)) {
    echo "<Script>alert('alterado com sucesso')</script>";
    header('Location: ../principal.php');
} else {
    echo "<Script>alert('Erro ao salvar')</script> ";
}
mysqli_close($com);
?>

