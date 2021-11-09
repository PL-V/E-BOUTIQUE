<?php 

include('config.php');
echo "asdasd";
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$password = $_POST['password'];

$email=$_POST["email"];


$name = $_FILES['image']['name'];
$type = $_FILES['image']['type'];
$data = file_get_contents($_FILES['image']['tmp_name']);
session_start();



$stmt = $conn->prepare("INSERT INTO `admin`(`nom`, `prenom`, `email`, `password`,`type`,`image`) VALUES (:n,:p,:e,:pass,:tp,:i)");
$stmt->bindParam( ":n",$nom);
$stmt->bindParam( ":p",$prenom);
$stmt->bindParam( ":e",$email);
$stmt->bindParam( ":pass",$password);
$stmt->bindValue( ":tp","A");
$stmt->bindParam( ":i",$data);
$stmt->execute();




header('Location: ../Login.php');


?>