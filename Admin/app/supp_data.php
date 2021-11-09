<?php 

include('../app/config.php');

if(isset($_GET['id'])){

$sql = "delete from products where id=" .  $_GET['id'] ;
$conn->exec($sql) ;


}

header('Location: ../listp.php');








?>