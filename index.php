<?php
$conn=new PDO("mysql:host=localhost;dbname=gestion2","root","");
$req=$conn->prepare("select * from user where email=? and password=?  ");
$req->execute(array($_POST['email'],$_POST['password']));
$nb=$req->rowCount();
$ligne=$req->fetch();
if($nb==1){
    session_start();
    $_SESSION["utilisateur"]=$ligne['nom'];
    $_SESSION["role"]=$ligne['role'];
    header("location:home.php");
}
else{
    header("location:index.html");
}

?>
/*

*/