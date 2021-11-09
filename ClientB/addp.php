<?php 

include('header.php');
include('../app/config.php');

?>

<?php 





$sql = "select abonnement from users where id=" . $_SESSION['id'];

    foreach  ($conn->query($sql) as $row) {
        $ab= $row['abonnement'];     
        echo   $ab;
       
    }

    $sql = "select COUNT(*) cn from products" ;

    foreach  ($conn->query($sql) as $row) {
        $ab= $row['cn'];   
        echo   "\n".$ab;
       
    }


if($ab == ''){


    
}








?>


<div class="AddForm">
 



<form method="post"  name="Form"  action="../app/ajoup_data.php" enctype="multipart/form-data">
  
   <div class="md-form">
  <textarea name="description" placeholder="Description du Produit" id="descriptionFrom" class="md-textarea form-control" rows="10"></textarea>
 
</div>
  
  <div class="form-row">



    <div class="col">
      <input type="text" class="form-control" placeholder="Nom Produit" name="nomp">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Prix" name="prix">
    </div>
    <div class="col">
      <input type="number" class="form-control" placeholder="Quantite" name="quantite">
    </div>

  </div>

<div class="form-row">
    <div class="col">

  
  <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="categorie">

    <option value="elctro">Electronique</option>
    <option value="vet">Vetement</option>
    <option value="sp">Sport</option>
    <option value="bs">Beauté & Santé</option>
    <option value="is">Instruments de musique </option>
    <option value="ac">Accessoires</option>
    <option value="lv">Livres</option>
  </select>

    </div>
 


  </div>

<div class="custom-file">
    <input type="file" class="custom-file-input"  name="myfile" >
    <label class="custom-file-label" for="validatedCustomFile">Votre image...</label>

  
  </div>
  <div class="col">

  <input type="submit" id="BtLg" value="Ajouter produit">
</div>
</form>

</div>



?>

<script>




</script>





</body>
</html>

