<?php 
include('config.php');

if(isset($_POST['email'])){
   $pass= $_POST['password'];
   
    $sql = "select * from users where email=" ."'". $_POST['email']."'";

    foreach  ($conn->query($sql) as $row) {
        $password=$row['password'];
        $nom=$row['nom'];
        $prenom=$row['prenom'];
        $email=$row['email'];
        $type=$row['type'];
        $addresse=$row['Addresse'];
        $tele=$row['telephone'];
        $id=$row['id'];
        $image=$row['image'];
       
    }

    if($password != null && $pass==$password && $type=='S'){
    
        session_start();
        $_SESSION["nom"] = $nom;
        $_SESSION["prenom"] = $prenom;
        $_SESSION["email"] = $email ;
        $_SESSION["addresse"] = $addresse;
        $_SESSION["telephone"] = $tele;
        $_SESSION["type"] = 'S';
        $_SESSION["id"]=$id;
        $_SESSION['image'] = $image;
        header('Location: ../index.php');
      
    }elseif($password != null && $pass==$password && $type=='B'){
        session_start();
        $_SESSION["nom"] = $nom;
        $_SESSION["prenom"] = $prenom;
        $_SESSION["email"] = $email ;
        $_SESSION["telephone"] = $tele;
        $_SESSION["id"]=$id;
        $_SESSION["type"] = 'B';
        $_SESSION['image'] = $image;
        $_SESSION["addresse"] = $addresse;
        header('Location: ../ClientB/addp.php');
    }

    else{

        header('Location: ../Login.php');
    }

}



?>