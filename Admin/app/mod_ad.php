<?php 


include("config.php");
session_start();

if(isset($_POST['nom']) || isset($_POST['prenom']) || isset($_POST['email']) || isset($_POST['telephone']) || isset($_POST['addresse']) || isset($_POST['password']) || isset($_FILES)){

//$sql = " UPDATE USERS set nom= ". "'". $_POST['nom'] . "'";
//$sql .= ",prenom='" . $_POST['prenom'] . "'";
//$sql .= ",email='" . $_POST['email'] . "'";
//$sql .= ",telephone='" . $_POST['telephone'] . "'";

//$sql .= ",addresse='" . $_POST['addresse'] . "'";
//$sql .= ",password='" . $_POST['password'] . "'";
    


$sql = "UPDATE USERS SET id=" . $_SESSION['id'];
if( $_POST['nom'] != null ){

    $sql .= " ,nom=:n";
    $_SESSION['nom']=$_POST['nom'];
}
if( $_POST['prenom'] != null){

    $sql .= ",prenom=:p";
    $_SESSION['prenom']=$_POST['prenom'];
}
if( $_POST['email'] != null ){

    $sql .= ",email=:e";
    $_SESSION['email']=$_POST['email'];
}

if( $_POST['password'] != null ){

    $sql .= ",password=:pass";
    $_SESSION['password']=$_POST['password'];

}
if( $_FILES['image']['name'] != null){
    $name = $_FILES['image']['name'];
    
    $type = $_FILES['image']['type'];
    $data = file_get_contents($_FILES['image']['tmp_name']);
    $_SESSION['image'] = $data;
    $sql .= ",image=:img";
    
}

    $sql .= " where id=:id;" ;
    echo $sql;

$stmt = $conn->prepare($sql);
if($_POST['nom'] != null)$stmt->bindParam( ":n",$_POST['nom']);
if($_POST['prenom'] != null)$stmt->bindParam( ":p",$_POST['prenom']);
if($_POST['email'] != null)$stmt->bindParam( ":e",$_POST['email']);
if($_POST['password'] != null)$stmt->bindParam( ":pass",$_POST['password']);
if($_FILES['image']['name'] != null)$stmt->bindParam( ":img",$data);

$stmt->bindParam( ":id",$_SESSION['id']);


$stmt->execute();


header("Location: ../profile.php");


}









?>

