
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