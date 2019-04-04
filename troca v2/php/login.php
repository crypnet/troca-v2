<?php 
$user = $_POST["user"];
$pass = $_POST["pass"];

$com = mysqli_connect("mysql995.umbler.com:41890","bancosmn","smn0K3NOis","smn");
if(!$com){
    echo" erro no banco";
}
$sql ="Select * from user where user ='".$user."'and pass = '".$pass."'";
$result = mysqli_query($com,$sql);
if(mysqli_num_rows($result)>0){

    while($row = mysqli_fetch_assoc($result)){
        session_start();
        $_SESSION['token'] = $row["id"];
    } if($user != "admin"){
        header('Location: ../principal.php');
    }   else{
        header('Location: ../admin.php');
    }
}else{
    echo "<script>alert('Senha incorreta')</script>";
}

mysqli_close($com);
?>

