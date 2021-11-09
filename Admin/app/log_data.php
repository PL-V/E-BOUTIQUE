<?php 
include('config.php');

if(isset($_POST['email'])){
   $pass= $_POST['password'];
   
    $sql = "select * from admin where email=" ."'". $_POST['email']."'";

    foreach  ($conn->query($sql) as $row) {
        $password=$row['password'];
        $nom=$row['nom'];
        $prenom=$row['prenom'];
        $email=$row['email'];
        $type=$row['type'];
        $id=$row['id'];
        $image=$row['image'];
       
    }

    if($password != null && $pass==$password ){
    
        session_start();
        $_SESSION["nom"] = $nom;
        $_SESSION["prenom"] = $prenom;
        $_SESSION["email"] = $email ;
        $_SESSION["id"]=$id;
        $_SESSION['image'] = $image;
        $_SESSION['type'] = 'A';
        header('Location: ../dash.php');
      
    }


}

header('Location: ../profile.php');


?>