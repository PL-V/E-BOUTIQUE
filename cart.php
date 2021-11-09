<?php 

include('app/header.php');
include('app/nav.php');
include('app/config.php');


if(!isset($_SESSION['nom'])){
  header('Location: Login.php');

}

if(isset($_SESSION['cart'])){


$panier = $_SESSION['cart'];


}

if(isset($_GET['del'])){

    $panier = $_SESSION['cart'];

for($i=0;$i<count($panier);$i++){

     if($panier[$i] == $_GET['del']){
           
        array_splice($_SESSION['cart'], $i, 1);
        break;
     }


}



}




?>



















        
<?php 
            
            if(!empty($panier)){
   
              
            $count = 0;
            foreach($panier as $id ){

                $sth = $conn->prepare("SELECT * from products where id=" . $id);
                $sth->execute();
                $result = $sth->fetch(PDO::FETCH_ASSOC);

                $count += 1;
             


            ?>


<div class="container" style="margin-top:15px;">
    <div class="row">
        <div class="col-sm-12 col-md-10 col-md-offset-1"> 
            <table class="table table-hover">
            <?php if($count < 2){ ?>
                <thead>
                    <tr>
                        <th>Product</th>
                        
                        <th class="text-center">Price</th>
                        <th class="text-center">Quantité</th>
                        <th> </th>
                    </tr>
                </thead>
                <?php } ?>
              
              
              
        
              
              
                <tbody>
                    <tr>
                        <td class="col-sm-8 col-md-6">
                        <div class="media">
                            <a class="thumbnail pull-left" href="#"> 
<?php  echo '<img class="media-object" style="width: 72px; height: 72px;" src="data:image/png;base64,'.base64_encode($result['image']).'"/>' ; ?>  
                            <div class="media-body">
                                <h4 class="media-heading"><a href="#"><?php echo $result['nom'] ?></a></h4>
                               
                            </div>
                        </div></td>
                        <td class="col-sm-1 col-md-1" style="text-align: center">
                        <?php echo $result['prix']. " DH" ?>
                        </td>
                        <form action="check.php" method="post">
    
                        <td class="col-sm-1 col-md-1 text-center"><input type="number" class="form-control" name=<?php echo "quant" . $count ?> placeholder="" required="">
</td>
                        <td class="col-sm-1 col-md-1 text-center"><strong></strong></td>
                        <td class="col-sm-1 col-md-1">
                     <?php  echo "<a href='delete.php?del=". $result['id'] ."'>" ?><button type="button" class="btn btn-danger">
                            <span class="glyphicon glyphicon-remove"></span> Supprimer
                        </button></a></td>
                    </tr>
                   
                 
                   
                    <tr>
                        
                        

                        <?php 
               
            }




               ?> 

                 
                    </tr>

                   
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td>
                       <button type="button" class="btn btn-default">
                       <a href="plist.php">    <span class="glyphicon glyphicon-shopping-cart"></span> Continue Shopping
                        </button></td></a>
                        <td>
                      <button type="submit" class="btn btn-success">
                            passer commande <span class="glyphicon glyphicon-play"></span>
                        </button></td></form>
                    </tr>
                </tbody>
                </form>
        
         

            </table>
        </div>
    </div>
</div>



<?php 

}

?>



























