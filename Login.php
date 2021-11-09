<?php 



include('app/header.php');
include('app/nav.php');





?>

<span id="burgundy" style="position:absolute;font-weight: 700;font-family: 'Open Sans', sans-serif;top:140px;left:330px">Se connecter</span>
<div class="login">
<form action="app/log_data.php" method="post" onsubmit="return validateForm()">
<input type="text" placeholder="Email" name="email" style="border: 1px solid #9e9c9c;" required>
<br>
<br>
<input type="password" placeholder="Passsword" name="password" style="border: 1px solid #9e9c9c;" required>
<br>
<br>
<input type="submit" id="BtLg" value="Login">
</form>
</div>


<div class="vl"></div>


<div class="inscri">
<span id="burgundy" style="position:absolute;font-weight: 700;font-family: 'Open Sans', sans-serif;top:-170px;left:200px">Créer votre Compte</span>

<h5>Creer un compte sur Bouti-com si vous n'avez pas encore un</h5>
<br>
<a href="inscription.php"><button type="button" class="btn btn-warning" id="BtLg" style="margin-left:185px;">Créer Compte</button>

<script>

function validateForm() {
    var email = document.forms["Form"]["email"].value;
    var password = document.forms["Form"]["password"].value;
  
    if (email == null || email == "", password == null || password == "") {
      alert("Please Fill All Required Field");
      return false;
    }else{

        var headerData="email="+email+"&password=" + password +;
sendPost(headerData,"app/log_data.php");
    }
  }


  function sendPost(headerData,path){
    var xhr = new XMLHttpRequest();
    xhr.open("POST", path, true);
    
    //Envoie les informations du header adaptées avec la requête
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    
    xhr.onreadystatechange = function() { //Appelle une fonction au changement d'état.
        if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
    // Requête finie, traitement ici.
        }
    }
    
    xhr.send(headerData);


}


</script>