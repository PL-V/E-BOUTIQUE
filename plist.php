<?php 

include('app/header.php');
include('app/nav.php');
include('app/utils.php');
include('app/config.php');


?>

<?php 






?>

<aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a class="navbar-brand ml-2 font-weight-bold" href="index.php"><span id="orange" style="color:black;">Bouti</span><span id="burgundy">com</span></a>
    </a>

    <!-- Sidebar -->
    <div class="sidebar" width="200px;">


   <hr style="margin-top:20px;width:240px">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false" style= "margin-top:15px;width:150px;position:absolute;right:80px;" >
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          <li class="nav-item">
            <a href="plist.php?cat=sp" class="nav-link">
            Sport
           
            </a>
          </li>

          <li class="nav-item">
            <a href="plist.php?cat=vet" class="nav-link">
            Vetement
              
            </a>
          </li> 

          <li class="nav-item">
            <a href="plist.php?cat=elctro" class="nav-link">
            Electronique             
            </a>
          </li>

          <li class="nav-item">
            <a href="plist.php?cat=lv" class="nav-link">
            Livres
           
            </a>
          </li>

          <li class="nav-item">
            <a href="plist.php?cat=bs" class="nav-link">
            Beauté & Santé
              
            </a>
          </li> 

          <li class="nav-item">
            <a href="plist.php?cat=is" class="nav-link">
            Instruments de musique             
            </a>
          </li>
 
<li class="nav-item">
            <a href="plist.php?cat=ac" class="nav-link">
            Accessoires           
            </a>
          </li>

         </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>








  <div class="container" id="list" style="position:absolute;left:300px;width:1000px;margin-top:15px;">




<?php 


if(isset($_GET['search'])){

  getProductsByName($_GET['search'],$conn);
}


if(!isset($_GET['cat']) && !isset($_GET['search'])){

getProducts($conn);


}
if(isset($_GET['cat'])){

getProductsByCat($_GET['cat'],$conn);

}



?>



