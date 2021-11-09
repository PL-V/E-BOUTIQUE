<?php 

include('app/header.php');
include('app/nav.php');



?>




<span id="burgundy" style="position:absolute;font-weight: 1000;font-size:30px;font-family: 'Open Sans', sans-serif;top:140px;left:380px">Votre commande a été bien validée</span>


<a href="plist.php"><input type="submit" class="btn btn-warning" style="width:250px;margin-left:550px;position:absolute;top:220px" id="BtLg" value="Liste Produit">


<?php 

unset($_SESSION['cart']);
unset($_SESSION['quant']);


?>

