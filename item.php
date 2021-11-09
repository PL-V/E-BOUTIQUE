<?php

error_reporting(E_ERROR | E_PARSE);
include('app/config.php');


$sth = $conn->prepare("SELECT * from products where id=" . $_GET['id']);
$sth->execute();

$result = $sth->fetch(PDO::FETCH_ASSOC);



?>
<link rel="stylesheet" href="css/item.css">



<div class="container" style="margin-top:50px;">

<div class="card">
	<div class="row">
		<aside class="col-sm-5 border-right">
<article class="gallery-wrap"> 
<div class="img-big-wrap">
  <div> <a href="#">
  
  <?php echo '<img style="width:450px;" src="data:image/png;base64,'.base64_encode($result['image']).'"/>'; ?>
  
  </a>
  </div>
</div> <!-- slider-product.// -->

</article> <!-- gallery-wrap .end// -->
		</aside>
		<aside class="col-sm-7">
<article class="card-body p-5">
	<h3 class="title mb-3">  <?php echo $result['nom']; ?>
</h3>

<p class="price-detail-wrap"> 
	<span class="price h3 text-warning"> 
		<span class="currency">DH </span><span class="num"><?php echo $result['prix']; ?></span>
	</span> 
	 
</p> <!-- price-detail-wrap .// -->
<dl class="item-property">
  <dt>Description</dt>
  <dd><p><?php echo $result['description']; ?></p></dd>
</dl>
 <!-- item-property-hor .// -->
  <!-- item-property-hor .// -->
<dl class="param param-feature">
  <dt>Expédition</dt>
  <dd>Casablanca</dd>
</dl>  <!-- item-property-hor .// -->

<hr>
<?php 
 if(isset($_SESSION['nom'])){ echo " <a class='btn btn-outline-success w-100' href = 'plist.php?pro=" .   $result['id']   ."' >";}else{
    echo " <a class='btn btn-outline-success w-100' href = 'Login.php'>";};?>
	
		<i class="fas fa-shopping-cart"></i> Ajouter au panier </a>
</article> <!-- card-body.// -->
		</aside> <!-- col.// -->
	</div> <!-- row.// -->
</div> <!-- card.// -->


</div>
