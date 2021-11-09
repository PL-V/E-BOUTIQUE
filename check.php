<?php 

include('app/header.php');
include('app/nav.php');
if (!isset($_SESSION['cart'])){

    header('Location: plist.php');
    
    
    }




$_SESSION['quant'] = array();
for($i=0;$i<sizeof($_SESSION['cart']);$i++){

    array_push($_SESSION['quant'],$_POST['quant'.($i+1)]);

}






?>
<div class="container" style="height:80px;">
    
    <div class="row">
        
        <div class="col-md-8 order-md-1">
            <h4 class="mb-3" style="color:orange;position:absolute;left:440px;top:30px;width:500px;">Méthodes De Paiment</h4>
            <form  action="app/checkout_data.php" method="post"     class="needs-validation" novalidate="" style="position:absolute;left:300px;top:90px;width:500px;">
              
               
                <h4 class="mb-3">Payment</h4>
            <div class="d-block my-3">
            
<div class="form-check">
  <input class="form-check-input" type="radio" name="cc" id="radio2" onclick=radioCheck() checked>
  <label class="form-check-label" for="flexRadioDefault2">
Paiement à la livraison
  </label>
</div>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="cc" id="radio1" onclick=radioCheck()>
  <label class="form-check-label" for="flexRadioDefault1">
  Carte de crédit
  </label>
</div>


<div id="parent">
<br>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="addresse">Votre Addresse</label>
                        <input type="text" class="form-control" name="addresse" placeholder="" required="" style="width:500px">
                        
</div>    
</div>



            </div>
            <br>
            <br>
            <div id="individual" style="display:none">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="cc-name">Nom sur la carte</label>
                        <input type="text" class="form-control" name="nom" placeholder="" required="">
                        
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="cc-number">Nombre de la carte</label>
                        <input type="number" class="form-control" name="nombre" placeholder="" required="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 mb-3">
                        <label for="cc-expiration">Expiration</label>
                        <input type="text" class="form-control" name="exp" placeholder="" required="">
                       
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="cc-cvv">CVV</label>
                        <input type="number" class="form-control" name="cvv" placeholder="" required="">
                        <div class="invalid-feedback"> Entrer votre CVV </div>
                    </div>
                </div>
                </div>
                <hr class="mb-4">
                <button class="btn btn-primary btn-lg btn-block" type="submit">Continue</button>
            </form>
        </div>
    </div>

</div>

<script>
function radioCheck() {
    var radio1 = document.getElementById("radio1");
    var radio2 = document.getElementById("radio2");
    var individual = document.getElementById("individual");
    var parent = document.getElementById("parent");
    if (radio2.checked == true){
        individual.style.display = "none";
        parent.style.display = "block";
    } 
    else {
        individual.style.display = "block";
        parent.style.display = "none";
    }
}
</script>