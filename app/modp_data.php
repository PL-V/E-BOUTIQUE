<?php 


include("config.php");
session_start();
$sql = " UPDATE PRODUCTS set id=" . $_POST['id'];
if(isset($_POST['nomp']) || isset($_POST['prix']) || isset($_POST['quantite']) || isset($_POST['categorie']) || isset($_FILES) || isset($_POST['description']) ){

if($_POST['nomp'] != null)$sql .= ",nom=:np" ;
if($_POST['prix'] != null)$sql .= ",prix=:p" ;
if($_POST['quantite'] != null)$sql .= ",quantite=:q";
if($_POST['categorie'] != null)$sql .= ",categorie=:c";
if($_POST['description'] != null)$sql .= ",description=:d";

if( $_FILES['image']['name'] != null){
    $name = $_FILES['image']['name'];
    
    $type = $_FILES['image']['type'];
    $data = file_get_contents($_FILES['image']['tmp_name']);
    $_SESSION['image'] = $data;
    $sql .= ",image=:img";
}

$sql .= " where id=" .    $_POST["id"];
echo $sql;


$stmt = $conn->prepare($sql);
if($_POST['nomp'] != null)$stmt->bindParam( ":np",$_POST['nomp']);
if($_POST['prix'] != null)$stmt->bindParam( ":p",$_POST['prix']);
if($_POST['quantite'] != null)$stmt->bindParam( ":q",$_POST['quantite']);
if($_POST['categorie'] != null)$stmt->bindParam( ":c",$_POST['categorie']);
if($_POST['description'] != null)$stmt->bindParam( ":d",$_POST['description']);
if($_FILES['image']['name'] != null)$stmt->bindParam( ":img",$data);

$stmt->execute();
header('Location: ../ClientB/listp.php');
}









?>