<?php 

session_start();


?>
<body>

<nav class="navbar navbar-expand-sm navbar-light bg-white border-bottom"> <a class="navbar-brand ml-2 font-weight-bold" href="index.php"><span id="orange">Bouti<span id="burgundy">com</span></span></a> <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor" aria-controls="navbarColor" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
    <div class="collapse navbar-collapse" id="navbarColor">
        <ul class="navbar-nav">
            <li class="nav-item rounded bg-light search-nav-item">
            <form action="plist.php" method="GET">
            <input type="text" id="search" name="search" class="bg-light" placeholder="Chercher produit"><span class="fa fa-search text-muted"></span></li>
            </form>
            <li class="nav-item"><span class="fa fa-user"></span><span class="text"></span></li>
            <li class="nav-item "><a class="nav-link" href="cart.php"><span class="fa fa-shopping-cart"></span><span class="text">Cart</span></a> </li>
        </ul>
    </div>
</nav>


<div class="dropdown show" style="position:absolute;left:1070px;top:10px;">
  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="AccDronpDown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
   <i class="fas fa-user-circle " style="color:black;"><span style="color:white" class="Account">  Votre Compte</span></i> 
  </a>

  <div class="dropdown-menu" aria-labelledby="AccDronpDown">
 <?php 
 
 if(!isset($_SESSION['nom']) ){
 
 
    echo "<a class='dropdown-item' href='Login.php'>S'authentifier</a>";
    echo "<a class='dropdown-item' href='inscription.php'>Créer Compte</a>";
    echo "<a class='dropdown-item' href='CLTBoffer.php'>Créer Compte Business</a>";
 }else{

  echo "<a class='dropdown-item' href='profile.php'>" . $_SESSION['nom'] ."  " .  $_SESSION['prenom']  .  "</a>";
  echo "<a class='dropdown-item' href='app/logout.php?log=flase'>Logout</a>";



 }


 
 
 ?>


  </div>
</div>







