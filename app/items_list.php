
<style>

#Tit{

color:black;


}

#Tit:hover{

 color:blue;


}


#itm{
width:160px;

}
</style>

<div class="container" id="Items">


  <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

    <div class="controls-top">
      <a class="btn-floating" href="#multi-item-example" data-slide="prev" style="position:absolute;top:160px;right:1030px;"><i class="fas fa-arrow-alt-circle-left fa-2x" ></i></a>
      <a class="btn-floating" href="#multi-item-example" data-slide="next" style="position:absolute;top:160px;left:990px;"><i class="fas fa-arrow-alt-circle-right fa-2x"></i></a>
    </div>
    
    <div class="carousel-inner" role="listbox">

      <div class="carousel-item active">

        <div class="row">
   


 <?php
 
 
 
 $sth = $conn->prepare("SELECT * from products where categorie=". "'elctro'");
 $sth->execute();
 
 
    

 for($i=0;$i<3;$i++){
   
 
   $result = $sth->fetch(PDO::FETCH_ASSOC);
 ?>
 
 
  <div class="col" >
  
 
  <div class="card" style="width:300px;margin-left:15px">
					  <?php  echo '<img width="130px" id="ItemImage" src="data:image/png;base64,'.base64_encode($result['image']).'"/>'?>
					  <div class="card-body">
            <?php echo "<a href='index.php?id=".$result['id']. "'>" ?><h5 class="card-title" id="Tit"><?php echo $result['nom']; ?></h5></a>
            <br>
            <h5 class="card-title"  style="color:orange"><?php echo $result['prix'] . " DH"; ?></h5>
					<?php 
          
          if(isset($_SESSION['nom'])){ echo " <a class='btn btn-outline-success w-100' href = 'plist.php?pro=" .   $result['id']   ."' >";}else{
            echo " <a class='btn btn-outline-success w-100' href = 'Login.php'>";};
          
          ?>
          Ajouter au panier</a>
					  </div>
					</div>


  
  </div>

<?php } ?>




   


        </div>

        




        

      </div>
      <!--/.First slide-->

<div class="carousel-item ">

        <div class="row">
   


 
        <?php
 
 
 
 $sth = $conn->prepare("SELECT * from products where categorie=". "'vet'");
 $sth->execute();
 
 
    

 for($i=0;$i<3;$i++){
   
 
   $result = $sth->fetch(PDO::FETCH_ASSOC);
 ?>
 
 
  <div class="col" >
  
 
  <div class="card" style="width:300px;margin-left:15px">
					  <?php  echo '<img width="130px" id="ItemImage" src="data:image/png;base64,'.base64_encode($result['image']).'"/>'?>
					  <div class="card-body">
            <?php echo "<a href='index.php?id=".$result['id']. "'>" ?><h5 class="card-title" id="Tit"><?php echo $result['nom']; ?></h5></a>
            <br>
            <h5 class="card-title"  style="color:orange;"><?php echo $result['prix'] . " DH"; ?></h5>
					<?php 
          
          if(isset($_SESSION['nom'])){ echo " <a class='btn btn-outline-success w-100' href = 'plist.php?pro=" .   $result['id']   ."' >";}else{
            echo " <a class='btn btn-outline-success w-100' href = 'Login.php'>";};
          
          ?>
          Ajouter au panier</a>
					  </div>
					</div>


  
  </div>

<?php } ?>


        </div>

        

      </div>

    
    <!--/.Slides-->

  </div>
  <!--/.Carousel Wrapper-->






<div class="card" style="margin-top:15px;border-top-left-radius:18px;border-top-right-radius:18px;margin-right:45px;margin-left:5px;">
  <h2 class="card-header" style="background-color:orange;color:white;border-top-left-radius:9px;border-top-right-radius:9px;">Electronique
</h2>
  <div class="card-body">
    <div class="container">
    



<?php 




$sth = $conn->prepare("SELECT * from products where categorie=". "'elctro'");
$sth->execute();


   
   
echo "<div class='row'>";
for($i=0;$i<6;$i++){
  

  $result = $sth->fetch(PDO::FETCH_ASSOC);
  $img=$result['image'];
  if($result == null)break;
  echo "<a href='index.php?id=".$result['id'] ."' style='margin-left:15px'><div class='col' id='itm'>";
  echo " <table ><tr ><th>" ; 

  echo '<img width="130px" src="data:image/png;base64,'.base64_encode($img).'"/>';
  
  echo "</th></tr>";
  
  echo "<tr><th>"  . $result['nom'] ."</th> </tr>";
  echo  "<tr><th style='color:orange'> " . $result['prix'] . " DH". "</th> </tr>";
  echo " </table> </div></a>";

 
}
echo "</div>";





?>


</div>
  </div>
</div>






<div class="card" style="margin-top:15px;border-top-left-radius:18px;border-top-right-radius:18px;margin-right:45px;margin-left:5px;">
  <h2 class="card-header" style="background-color:orange;color:white;border-top-left-radius:9px;border-top-right-radius:9px;">Sport</h2>
  <div class="card-body">
    <div class="container">
    



<?php 




$sth = $conn->prepare("SELECT * from products where categorie=". "'sp'");
$sth->execute();


   
echo "<div class='row'>";
for($i=0;$i<6;$i++){
  

  $result = $sth->fetch(PDO::FETCH_ASSOC);
  $img=$result['image'];
  if($result == null)break;
  echo "<a href='index.php?id=".$result['id'] ."' style='margin-left:18px'><div class='col' id='itm'>";
  echo " <table ><tr ><th>" ; 

  echo '<img width="130px" src="data:image/png;base64,'.base64_encode($img).'"/>';
  
  echo "</th></tr>";
  
  echo "<tr><th>"  . $result['nom'] ."</th> </tr>";
  echo  "<tr><th style='color:orange'> " . $result['prix'] . " DH".  "</th> </tr>";
  echo " </table> </div></a>";

 
}
echo "</div>";





?>


</div>
  </div>
</div>



<div class="card" style="margin-top:15px;border-top-left-radius:18px;border-top-right-radius:18px;margin-right:45px;margin-left:5px;">
  <h2 class="card-header" style="background-color:orange;color:white;border-top-left-radius:9px;border-top-right-radius:9px;">Vetement</h2>
  <div class="card-body">
    <div class="container">
    



<?php 




$sth = $conn->prepare("SELECT * from products where categorie=". "'vet'");
$sth->execute();


   
echo "<div class='row'>";
for($i=0;$i<6;$i++){
  

  $result = $sth->fetch(PDO::FETCH_ASSOC);
  $img=$result['image'];
  if($result == null)break;
  echo "<a href='index.php?id=".$result['id'] ."'><div class='col' id='itm' style='margin-left:15px'>";
  echo " <table ><tr ><th>" ; 

  echo '<img width="130px" src="data:image/png;base64,'.base64_encode($img).'"/>';
  
  echo "</th></tr>";
  
  echo "<tr><th>"  . $result['nom'] ."</th> </tr>";
  echo  "<tr><th style='color:orange;'> " . $result['prix'] . " DH" . "</th> </tr>";
  echo " </table> </div></a>";

 
}
echo "</div>";





?>


</div>
  </div>
</div>


<div class="card" style="margin-top:15px;border-top-left-radius:18px;border-top-right-radius:18px;margin-right:45px;margin-left:5px;">
  <h2 class="card-header" style="background-color:orange;color:white;border-top-left-radius:9px;border-top-right-radius:9px;">Livres</h2>
  <div class="card-body">
    <div class="container">
    



<?php 




$sth = $conn->prepare("SELECT * from products where categorie=". "'lv'");
$sth->execute();


   
echo "<div class='row'>";
for($i=0;$i<6;$i++){
  

  $result = $sth->fetch(PDO::FETCH_ASSOC);
  $img=$result['image'];
  if($result == null)break;
  echo "<a href='index.php?id=".$result['id'] ."'><div class='col' id='itm' style='margin-left:15px'>";
  echo " <table ><tr ><th>" ; 

  echo '<img width="130px" src="data:image/png;base64,'.base64_encode($img).'"/>';
  
  echo "</th></tr>";
  
  echo "<tr><th>"  . $result['nom'] ."</th> </tr>";
  echo  "<tr><th style='color:orange;'> " . $result['prix'] . " DH" . "</th> </tr>";
  echo " </table> </div></a>";

 
}
echo "</div>";





?>


</div>
  </div>
</div>




<div class="card" style="margin-top:15px;border-top-left-radius:18px;border-top-right-radius:18px;margin-right:45px;margin-left:5px;">
  <h2 class="card-header" style="background-color:orange;color:white;border-top-left-radius:9px;border-top-right-radius:9px;">Beauté & Santé</h2>
  <div class="card-body">
    <div class="container">
    



<?php 




$sth = $conn->prepare("SELECT * from products where categorie=". "'bs'");
$sth->execute();


   
echo "<div class='row'>";
for($i=0;$i<6;$i++){
  

  $result = $sth->fetch(PDO::FETCH_ASSOC);
  $img=$result['image'];
  if($result == null)break;
  echo "<a href='index.php?id=".$result['id'] ."'><div class='col' id='itm' style='margin-left:15px'>";
  echo " <table ><tr ><th>" ; 

  echo '<img width="130px" src="data:image/png;base64,'.base64_encode($img).'"/>';
  
  echo "</th></tr>";
  
  echo "<tr><th>"  . $result['nom'] ."</th> </tr>";
  echo  "<tr><th style='color:orange;'> " . $result['prix'] . " DH" . "</th> </tr>";
  echo " </table> </div></a>";

 
}
echo "</div>";





?>


</div>
  </div>
</div>




<div class="card" style="margin-top:15px;border-top-left-radius:18px;border-top-right-radius:18px;margin-right:45px;margin-left:5px;">
  <h2 class="card-header" style="background-color:orange;color:white;border-top-left-radius:9px;border-top-right-radius:9px;">Accessoires 
</h2>
  <div class="card-body">
    <div class="container">
    



<?php 




$sth = $conn->prepare("SELECT * from products where categorie=". "'ac'");
$sth->execute();


   
echo "<div class='row'>";
for($i=0;$i<6;$i++){
  

  $result = $sth->fetch(PDO::FETCH_ASSOC);
  $img=$result['image'];
  if($result == null)break;
  echo "<a href='index.php?id=".$result['id'] ."'><div class='col' id='itm' style='margin-left:15px'>";
  echo " <table ><tr ><th>" ; 

  echo '<img width="130px" src="data:image/png;base64,'.base64_encode($img).'"/>';
  
  echo "</th></tr>";
  
  echo "<tr><th>"  . $result['nom'] ."</th> </tr>";
  echo  "<tr><th style='color:orange;'> " . $result['prix'] . " DH" . "</th> </tr>";
  echo " </table> </div></a>";

 
}
echo "</div>";





?>


</div>
  </div>
</div>

<div class="card" style="margin-top:15px;border-top-left-radius:18px;border-top-right-radius:18px;margin-right:45px;margin-left:5px;">
  <h2 class="card-header" style="background-color:orange;color:white;border-top-left-radius:9px;border-top-right-radius:9px;">Instruments de musique
</h2>
  <div class="card-body">
    <div class="container">
    



<?php 




$sth = $conn->prepare("SELECT * from products where categorie=". "'is'");
$sth->execute();


   
echo "<div class='row'>";
for($i=0;$i<6;$i++){
  

  $result = $sth->fetch(PDO::FETCH_ASSOC);
  $img=$result['image'];
  if($result == null)break;
  echo "<a href='index.php?id=".$result['id'] ."'><div class='col' id='itm' style='margin-left:15px'>";
  echo " <table ><tr ><th>" ; 

  echo '<img width="130px" src="data:image/png;base64,'.base64_encode($img).'"/>';
  
  echo "</th></tr>";
  
  echo "<tr><th>"  . $result['nom'] ."</th> </tr>";
  echo  "<tr><th style='color:orange;'> " . $result['prix'] . " DH" . "</th> </tr>";
  echo " </table> </div></a>";

 
}
echo "</div>";





?>


</div>
  </div>
</div>

