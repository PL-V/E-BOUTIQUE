<?php 

 include('config.php');





    $name = $_FILES['image']['name'];
    $type = $_FILES['image']['type'];
    $data = file_get_contents($_FILES['image']['tmp_name']);
    $stmt = $conn->prepare("update users set image = :im where id=:id");
    $stmt->bindParam( ":im",$data);
    $stmt->bindParam( ":id",$_SESSION['id']); 
    $_SESSION['image'] = $data;
   header('Location: ../profile.php');





?>