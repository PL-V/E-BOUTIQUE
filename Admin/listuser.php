<?php 

include('app/header_nav.php');

include('app/config.php');




?>








<div class="container" id="list" style="position:absolute;left:300px;width:1000px;margin-top:15px;">




<?php 


$sth = $conn->prepare("SELECT * from users");
$sth->execute();


while(true){
   
    echo "<div class='row'>";
for($i=0;$i<3;$i++){
  
    $result = $sth->fetch(PDO::FETCH_ASSOC);

    if($result == null)break;
    /*echo "<div class='col' id='itemsCol' >  <table>";
   
    echo "<tr><th>" ;
    echo '<img width="130px" id="ItemImage" src="data:image/png;base64,'.base64_encode($img).'"/>' . '</th></tr>';
    echo "<table><tr><th> <span id='ItemTitle'>".$result['nom']."<span></th> </tr>";
    echo "<tr><th> </th></tr>";
    echo "<tr><th> </th></tr>";
    echo "<tr><th> </th></tr>";
    echo "<tr><th> <span style='color:orange;margin-left:120px'>".$result['prix']."<span></th> </tr>";
    echo "<tr><th><button data-toggle='modal' data-target='#modify'  type='button' class='btn btn-outline-success' id='ItemButt'>Modifier Produit</button></th></tr>";
   
   echo "<tr><th><a href='../app/supp_data.php?id=" .$result['id']."'><button  type='button' class='btn btn-outline-danger' style='margin-top:50px;' id='ItemButt'>Supprimer produit</button></a></th></tr>";
    echo "</table> </div>";
  */
  ?>
  <div class="card" style="width:300px;margin-left:15px">
					  <?php 
                      
                      if($result['image']){
            echo '<img width="130px" id="ItemImage" src="data:image/png;base64,'.base64_encode($result['image']).'"/>';
                      }else{

                        echo '<img width="130px" id="ItemImage" src="../images/avatar.png"/>';



                      }
            
            ?>
					  
                      
                      
                      
                      <div class="card-body">
						<h5 class="card-title"><?php echo  "Nom et Prenom: ".$result['nom'] . " " . $result['prenom']; ?></h5>
            <br>
            <h5 class="card-title"  style="color:orange"><?php echo "Client Type:". " ". $result['type'] ?></h5>
            <h5 class="card-title"  ><?php echo "Email:". " ". $result['email'] ?></h5>

            <?php echo "<a class='btn btn-outline-danger w-100' href='app/supp_user.php?id=" .$result['id']."' style='margin-top:15px'>" ?>Supprimer Client</a>
					  </div>
					</div>


<?php 
}
echo "</div>";
if($result == null)break;
}



?>




<div class="modal fade" id="modify" tabindex="-1" role="dialog" aria-hidden="true">
<form method="post"  name="Form"  action="../app/modp_data.php" enctype="multipart/form-data">  
<div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        

      <div >
 




 
  <div class="form-row">



    <div class="col">
      <input type="text" class="form-control" placeholder="Nom Produit" name="nomp">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Prix" name="prix">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Quantite" name="quantite">
    </div>

  </div>

<div class="form-row">
    <div class="col">

  
  <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="categorie">

    <option value="elctro">Electronic</option>
    <option value="vet">vetement</option>
    <option value="sp">Sport</option>
  </select>

    </div>
 


  </div>

<div class="custom-file">
    <input type="file" class="custom-file-input"  name="myfile" >
    <label class="custom-file-label" for="validatedCustomFile">choisir votre image...</label>

  
  </div>
  <textarea name="description" placeholder="Description du Produit" id="descriptionFrom" class="md-textarea form-control" rows="10"></textarea>

</form>

</div>



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">fermer</button>
        <button type="submir" class="btn btn-primary">modifier</button>
      </div>
    </div>
  </div>
</form>
</div>





</body>
</html>