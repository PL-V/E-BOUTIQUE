<?php 

include("app/header.php");
include("app/nav.php");
if(!isset($_GET['pack'])){

    header('Location: CLTBoffer.php');
    
    }
    session_destroy(); 
    session_start();
    $_SESSION['pack'] =$_GET['pack']; 

?>

<span id="burgundy" style="position:absolute;font-weight: 700;font-family: 'Open Sans', sans-serif;top:140px;left:640px">Creer Compte</span>
<div class="Ins">
<form name="Form" action="app/insc_data.php" method="post" enctype="multipart/form-data">
<input type="text" placeholder="Nom" name="nom" required>
<br>
<br>
<input type="text" placeholder="Prenom" name="prenom" required>
<br>
<br>
<input type="text" placeholder="Email" name="email" required>
<br>
<br>
<input type="text" placeholder="telephone" name="telephone" required>
<br>
<br>

<input type="text" placeholder="Votre Addresse" name="addresse" required>
<br>
<br>
<div class="custom-file" name="image">
    <input type="file" class="custom-file-input"  name="image" >
    <label class="custom-file-label" for="validatedCustomFile">Votre image...</label>

  
  </div>
  <br>
<br>
<input type="password" placeholder="Passsword" name="password" required>
<br>
<br>

<input type="submit" class="btn btn-warning" style="width:250px;margin-left:83px;" id="BtLg" value="Creer Compte">

</form>
</div>


