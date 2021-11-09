<html>
<head>

<title>Ebouti-Com</title>


<link rel="stylesheet" href="../css/bootstrap.min.css">
<script src="../js/jquery.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>

<link rel="stylesheet" href="../fontawesome/css/all.css">
<link rel="stylesheet" href="../css/inscri.css">
<link rel="stylesheet" href="../css/adminlte.min.css">
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="../css/addProduct.css">
<link rel="stylesheet" href="../css/orders.css">
<link rel="stylesheet" href="../css/profile.css">
</head>

<?php 

session_start();
if(!isset($_SESSION['nom']))header('Location: Login.php');

?>

<style>


#search {
    outline: none;
    border: none;
    display: inline-block
}


.fa-search {
    font-size: 20px;
    padding: 10px;
    margin-bottom: 3px;
    padding-right: 20px
}

.search-nav-item {
    height: 40px
}




@media(min-width:1200px) {
    #search {
        width: 300px;
        padding: 5px;
        padding-left: 20px
    }

    .search-nav-item {
        margin-left: 400px;
        width: 350px
    }


  }

  @media(min-width:992px) and (max-width:1199px) {
    #search {
        width: 300px;
        padding: 5px;
        padding-left: 20px
    }

    .search-nav-item {
        margin-left: 200px;
        width: 350px
    }
  }


  @media(min-width:768px) and (max-width:991px) {
    #search {
        width: 300px;
        padding: 5px;
        padding-left: 20px
    }

    .search-nav-item {
        margin-left: 60px;
        width: 350px
    }

    .fa-user {
        margin-left: 80px
    }
  }

  @media(min-width:576px) and (max-width:767px) {
    .text {
        display: none
    }

    .search-nav-item {
        margin-left: 35px;
        width: 270px
    }

    #search {
        width: 240px;
        padding: 5px;
        padding-left: 20px
    }

    .fa-search {
        padding: 3px;
        font-size: 18px
    }
  }

  @media(max-width:575px) {
    .search-nav-item {
        margin: 0;
        width: 100%;
        margin-top: 10px
    }

    #search {
        width: 80%;
        padding-left: 10px;
        margin-top: 10px;
        padding-right: 10px
    }

    .fa-search {
        padding: 10px;
        font-size: 18px
    }

   
}



</style>


<body>

<nav class="main-header navbar navbar-expand navbar-dark navbar-light" >
    <!-- Left navbar links -->
    <ul class="navbar-nav" style="margin-left:250px;padding-bottom:15px;">
      
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">
          <i class="fas fa-home"></i>
          <p>Home</p> 
        </a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">
          <i class="fas fa-envelope"></i>
          <p>Messages</p>
        </a>
      </li>

      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">
        <i class="fas fa-bell"></i>
        <p>Notification</p> 
      </a>
   
      <li>
      <form action="listp.php" method="GET" style="position:absolute;left:650px;top:20px">
            <input type="text" id="search" name="search" class="bg-light" placeholder="Chercher produit"><span class="fa fa-search text-muted"></span></li>
            </form>

</li>

      
      <div class="dropdown show" style="position:absolute;left:1150px;top:20px;">
  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="AccDronpDown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
   <i class="fas fa-user-circle " style="color:black;"><span style="color:white" class="Account">  Votre Compte</span></i> 
  </a>

  <div class="dropdown-menu" aria-labelledby="AccDronpDown">
 <?php 
 
 if(!isset($_SESSION['nom']) ){
 
 
    echo "<a class='dropdown-item' href='Login.php'>S'authentifier</a>";
    echo "<a class='dropdown-item' href='inscription.php'>Creer Compte</a>";
    echo "<a class='dropdown-item' href='CLTBoffer.php'>Creer Compte Business</a>";
 }else{

  echo "<a class='dropdown-item' href='profile.php'>" . $_SESSION['nom'] ."  " .  $_SESSION['prenom']  .  "</a>";
  echo "<a class='dropdown-item' href='../app/logout.php?log=flase'>Logout</a>";



 }


 
 
 ?>


  </div>
</div>


      </li>


   
      
    </ul>

  

     
  </nav>
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
   
    <a class="navbar-brand ml-2 font-weight-bold" href="dash.php"><span style="color: black;">Bouti</span><span  style="color: rgb(153, 40, 59);">com</span></a>

    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../images/avatar.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="profile.php" class="d-block"><?php echo $_SESSION['nom'] . " " .  $_SESSION['prenom'] ?></a>
        </div>
      </div>

   

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          <li class="nav-item">
            <a href="dash.php" class="nav-link">
              <i class="fas fa-house-user"></i>
              <p>
                  Dashboard
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="Orders.php" class="nav-link">
              <i class="fas fa-database"></i>
              <p>
                  Orders
              </p>
            </a>
          </li> 

          <li class="nav-item">
            <a href="listp.php" class="nav-link">
              <i class="fas fa-list"></i>
              <p>
                  Products List
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="listuser.php" class="nav-link">
              <i class="fas fa-user"></i>
              <p>
                  Users List
              </p>
            </a>
          </li>

     

        
         </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

