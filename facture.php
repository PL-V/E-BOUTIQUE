
<?php 

include('app/header.php');
include('app/nav.php');
include('app/config.php');



if (!isset($_SESSION['cart'])){

header('Location: plist.php');


}

?>






<div class="container">
    <div class="row">
        <div class="col-xs-12">
    		
    	
    		<div class="row">
    			<div class="col-xs-6">
    				<address>
    					<strong>Payment Method</strong><br>
    					<?php if(isset($_SESSION['method'])) echo $_SESSION['method']?><br>
    			
    				</address>
    			</div>
    			<div class="col-xs-6 text-right">
    				<address>
    					<strong style="margin-left:40px">   <?php echo  "Order date" ?></strong><br>
    					      <?php echo  date("Y/m/d") ?><br><br>
    				</address>
    			</div>
    		</div>
    	</div>
    </div>
    
    <div class="row">
    	<div class="col-md-12">
    		<div class="panel panel-default">
    			<div class="panel-heading">
    				<h3 class="panel-title"><strong>Facture</strong></h3>
    			</div>
    			<div class="panel-body">
    				<div class="table-responsive">
    					<table class="table table-condensed">
    						<thead>
                                <tr>
        							<td><strong>Produit</strong></td>
        							<td class="text-center"><strong>Prix</strong></td>
        							<td class="text-center"><strong>Quantité</strong></td>
        							<td class="text-right"><strong>Total</strong></td>
                                </tr>
    						</thead>
    						<tbody>
    							<?php 
                                
                                $total=0;
								$count=0;
                                foreach($_SESSION['cart'] as $id){
                                    
                                   
                                
                 
                                
                                $sth = $conn->prepare("SELECT nom,prix from products where id=" . $id);
                                $sth->execute();
                                $result = $sth->fetch(PDO::FETCH_ASSOC);
                                $total= $total + ($result['prix'] * $_SESSION['quant'][$count]);

                               
        





                                     
                                
                                ?>
    							<tr>
    								<td><?php echo $result['nom']; ?></td>
    								<td class="text-center"><?php echo $result['prix'] . " DH"; ?></td>
    								<td class="text-center"><?php echo $_SESSION['quant'][$count]; ?></td>
    								<td class="text-right"><?php echo $result['prix'] * $_SESSION['quant'][$count] . " DH"; ?></td>
    							</tr>
                               <?php $count++; } ?>
    						
    							
    							<tr>
    								<td class="no-line"></td>
    								<td class="no-line"></td>
    								<td class="no-line text-center"><strong>Total</strong></td>
    								<td class="no-line text-right"><?php echo $total . " DH"; ?></td>
    							</tr>

                               

    						</tbody>
    					</table>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
</div>

<div style="margin-left:1090px" style>
<a href="paymentS.php"><button type="button" class="btn btn-warning">Valider Commande</button></a>

</div>

