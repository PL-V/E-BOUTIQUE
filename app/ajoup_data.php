<?php 

include('config.php');

session_start();






if(isset($_POST['nomp'])){

$nomp = $_POST['nomp'];
$prix= $_POST['prix'];
$quant = $_POST['quantite'];
$cat = $_POST['categorie'];
$desc = $_POST['description'];



 $name = $_FILES['myfile']['name'];
 $type = $_FILES['myfile']['type'];
 $data = file_get_contents($_FILES['myfile']['tmp_name']);

$stmt = $conn->prepare("INSERT INTO products(`nom`, `prix`, `quantite`, `categorie`,`description`,`date`,`image`,`uid`) VALUES (:n,:p,:q,:c,:d,:date,:i,:uid)");
$stmt->bindParam( ":n",$nomp);
$stmt->bindParam( ":p",$prix);
$stmt->bindParam( ":q",$quant);
$stmt->bindParam( ":c",$cat);
$stmt->bindParam( ":d",$desc);
$stmt->bindValue( ":date","sysdate()");
$stmt->bindParam( ":i",$data);
$stmt->bindParam( ":uid",$_SESSION['id']);
$stmt->execute();







}



header('Location: ../ClientB/listp.php');

?>