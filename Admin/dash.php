<?php 

include('app/header_nav.php');
include('app/config.php');

$sth = $conn->prepare("SELECT COUNT(*) as nbr  from products");
$sth->execute();

$result = $sth->fetch(PDO::FETCH_ASSOC);
$pnbr = $result['nbr'];

$sth = $conn->prepare("SELECT sum(prix) nbr  from products");
$sth->execute();

$result = $sth->fetch(PDO::FETCH_ASSOC);
$amount = $result['nbr'];

$sth = $conn->prepare("SELECT COUNT(*) nbr  from orders");
$sth->execute();

$result = $sth->fetch(PDO::FETCH_ASSOC);
$orders = $result['nbr'];



?>


<div class="container" style="position:absolute;left:300px;width:1000px;top:80px">
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo $orders; ?></h3>

                <p>Orders</p>
              </div>
              <div class="icon">
                <i class="fas fa-shopping-cart"></i>
              </div>
              <a href="Orders.php" class="small-box-footer">
              Plus d'info <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
        </div> 
<div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?php echo $amount . " DH"; ?></h3>

                <p>Montant</p>
              </div>
              <div class="icon">
                <i class="fas fa-dollar-sign"></i>
              </div>
              <a href="#" class="small-box-footer">
                Plus d'info <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
        </div> 


            <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-warning" id="hello">
              <div class="inner">
                <h3><?php echo $pnbr; ?></h3>

                <p>Liste des Produit</p>
              </div>
              <div class="icon">
              <i class="fab fa-product-hunt"></i>
              </div>
              <a href="listp.php" class="small-box-footer">
                Plus d'info <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>


            
          </div>

</div>
