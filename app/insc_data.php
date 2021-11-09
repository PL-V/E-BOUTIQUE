<?php 

include('config.php');
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$password = $_POST['password'];
$tele = $_POST["telephone"];
$email=$_POST["email"];

$addresse=$_POST['addresse'];

$name = $_FILES['image']['name'];
$type = $_FILES['image']['type'];
$data = file_get_contents($_FILES['image']['tmp_name']);

session_start();


if($_SESSION['pack'] !=null){


$stmt = $conn->prepare("INSERT INTO `users`(`nom`, `prenom`, `email`, `password`,`telephone`,`type`,`image`,`addresse`,`abonnement`) VALUES (:n,:p,:e,:pass,:t,:tp,:i,:add,:ab)");
$stmt->bindParam( ":n",$nom);
$stmt->bindParam( ":p",$prenom);
$stmt->bindParam( ":e",$email);
$stmt->bindParam( ":pass",$password);
$stmt->bindParam( ":t",$tele);
$stmt->bindValue( ":tp","B");
$stmt->bindParam( ":i",$data);

$stmt->bindParam( ":add",$addresse);
$stmt->bindParam( ":ab",$_SESSION['pack']);

$stmt->execute();



}else{

    $stmt = $conn->prepare("INSERT INTO `users`(`nom`, `prenom`, `email`, `password`,`telephone`,`type`,`image`,`addresse`) VALUES (:n,:p,:e,:pass,:t,:tp,:i,:add)");
    $stmt->bindParam( ":n",$nom);
    $stmt->bindParam( ":p",$prenom);
    $stmt->bindParam( ":e",$email);
    $stmt->bindParam( ":pass",$password);
    $stmt->bindParam( ":t",$tele);
    $stmt->bindValue( ":tp","S");
    $stmt->bindParam( ":i",$data);
    $stmt->bindParam( ":add",$addresse);


    $stmt->execute();
}


header('Location: ../done.php');


?>