<?php 


session_start();
if(isset($_GET['del'])){

    $panier = $_SESSION['cart'];

for($i=0;$i<count($panier);$i++){

     if($panier[$i] == $_GET['del']){
           
        array_splice($_SESSION['cart'], $i, 1);
        break;
     }


}
}
header('Location: cart.php');



?>