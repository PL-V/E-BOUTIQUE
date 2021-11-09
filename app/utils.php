<style>


#Tit{

color:black;


}

#Tit:hover{

 color:blue;


}


</style>

<?php 

if(isset($_GET['pro'])){

 if(empty($_SESSION['cart'])){
   $_SESSION['cart']=array($_GET['pro']);

 }else{
array_push($_SESSION['cart'],$_GET['pro']);
 }
}





function getProducts($conn){

  
$sth = $conn->prepare("SELECT * from products");
$sth->execute();


while(true){
           
    echo "<div class='row'>";
for($i=0;$i<3;$i++){
  
    $result = $sth->fetch(PDO::FETCH_ASSOC);
    if($result == null)break;

   
  ?>


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


<?php 

}
echo "</div>";
if($result == null)break;
}

}


function getProductsByCat($cat,$conn){

    
    $sth = $conn->prepare("SELECT * from products where categorie=" . "'". $cat . "'");
    $sth->execute();
    
    
    while(true){
           
            echo "<div class='row'>";
        for($i=0;$i<3;$i++){
          
            $result = $sth->fetch(PDO::FETCH_ASSOC);
            if($result == null)break;
        
           
          ?>
       <div class="card" style="width:300px;margin-left:15px">
					  <?php  echo '<img width="130px" id="ItemImage" src="data:image/png;base64,'.base64_encode($result['image']).'"/>'?>
					  <div class="card-body">
            <?php echo "<a href='index.php?id=".$result['id']. "'>" ?><h5 class="card-title" id="Tit"><?php echo $result['nom']; ?></h5></a>
            <br>
            <h5 class="card-title"  style="color:orange;"><?php echo $result['prix']. " DH"; ?></h5>
					<?php 
          
          if(isset($_SESSION['nom'])){ echo " <a class='btn btn-outline-success w-100' href = 'plist.php?pro=" .   $result['id']   ."' >";}else{
            echo " <a class='btn btn-outline-success w-100' href = 'Login.php'>";};
          
          ?>
          Ajouter au panier</a>
					  </div>
                      </div>
        
        
        <?php 
       
        }
        echo "</div>";
        if($result == null)break;
        }
       
    }



?>



<?php 





function getProductsByName($name,$conn){

   
    $sth = $conn->prepare("SELECT * from products where nom LIKE " . "'%". $name . "%'");
    $sth->execute();
    
    
        
        while(true){
           
            echo "<div class='row'>";
        for($i=0;$i<3;$i++){
          
            $result = $sth->fetch(PDO::FETCH_ASSOC);
            if($result == null)break;
        
           
          ?>
       <div class="card" style="width:300px;margin-left:15px">
					  <?php  echo '<img width="130px" id="ItemImage" src="data:image/png;base64,'.base64_encode($result['image']).'"/>'?>
					  <div class="card-body">
            <?php echo "<a href='index.php?id=".$result['id']. "'>" ?><h5 class="card-title" id="Tit"><?php echo $result['nom']; ?></h5></a>
            <br>
            <h5 class="card-title"  style="color:orange;"><?php echo $result['prix']." DH"; ?></h5>
					<?php 
          
          if(isset($_SESSION['nom'])){ echo " <a class='btn btn-outline-success w-100' href = 'plist.php?pro=" .   $result['id']   ."' >";}else{
            echo " <a class='btn btn-outline-success w-100' href = 'Login.php'>";};
          
          ?>
          Ajouter au panier</a>
					  </div>
                      </div>
        
        
        <?php 
       
        }
        echo "</div>";
        if($result == null)break;
        }
       
    }

    
    
    



?>






