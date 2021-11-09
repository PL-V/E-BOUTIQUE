<?php 

include('../app/config.php');

if(isset($_GET['id'])){

$sql = "delete from users where id=" .  $_GET['id'] ;
$conn->exec($sql) ;


}

header('Location: ../listuser.php');








?>