<?php 

include('config.php');
session_start();
if(empty($_SESSION['cart'])){

 
}



if(isset($_POST['nom'])){

    if($_POST['nom'] == null){

     

                      
            foreach($_SESSION['cart'] as $id){
            $stmt = $conn->prepare("insert into orders(pid,uid,status,date,nom,prenom,email,addresse,tele) VALUES (:p,:u,:s,:d,:n,:pr,:e,:add,:t)");
            $stmt->bindParam( ":p",$id);
            $stmt->bindParam( ":u",$_SESSION ['id']);
            $stmt->bindValue( ":s","pending");
            $stmt->bindValue( ":d",date("Y-m-d"));
            $stmt->bindParam( ":n",$_SESSION['nom']);
            $stmt->bindParam( ":pr",$_SESSION['prenom']);
            $stmt->bindParam( ":e",$_SESSION['email']);
            $stmt->bindParam( ":add",$_POST['addresse']);
            $stmt->bindParam( ":t",$_SESSION['telephone']);
           
            //$sql = "insert into orders(pid,uid,status,date) values(". $id. "," . $_SESSION ['id'] . ",'" . "pending" . "'," . "sysdate()".")";
            $stmt->execute();
        
            //$conn->exec($sql);
        
        
             }
           $_SESSION['method']= 'Paiement à la livraison';
        

    }else{
        
    
   


    $sql = "insert into carte(uid,nom,exp,nombre,ccv) value(". $_SESSION ['id'] . ",'" . $_POST['nom'] . "','" . $_POST['exp'] . "',". $_POST['nombre'] . "," . $_POST['cvv'].")";

  
    $conn->exec($sql);

    foreach($_SESSION['cart'] as $id){
    $stmt = $conn->prepare("insert into orders(pid,uid,status,date,nom,prenom,email,addresse,tele) VALUES (:p,:u,:s,:d,:n,:pr,:e,:add,:t)");
    $stmt->bindParam( ":p",$id);
    $stmt->bindParam( ":u",$_SESSION ['id']);
    $stmt->bindValue( ":s","pending");
    $stmt->bindValue( ":d",date("Y-m-d"));
    $stmt->bindParam( ":n",$_SESSION['nom']);
    $stmt->bindParam( ":pr",$_SESSION['prenom']);
    $stmt->bindParam( ":e",$_SESSION['email']);
    $stmt->bindParam(":add",$_SESSION['addresse']);
    $stmt->bindParam( ":t",$_SESSION['telephone']);
 
    $stmt->execute();


     }
    $_SESSION['method']= 'Carte de crédit';


    }









}


header('Location: ../facture.php');


?>