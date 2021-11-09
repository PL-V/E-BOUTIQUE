
<?php 

include('app/header.php');
include('app/nav.php');



?>

<div class="container emp-profile">
        
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <?php 
                                       
                                       if($_SESSION['image']){
                                        echo '<img style="height:120px;width:150px" id="ItemImage" src="data:image/png;base64,'.base64_encode($_SESSION['image']).'"/>';
                                                  }else{
                            
                                                    echo '<img  style="height:120px;width:150px" id="ItemImage" src="images/avatar.png"/>';
                            
                            
                            
                                                  }
                                       
                                       ?> 
                                    </h5>
                           
                            
                           
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5>
                                       <?php 
                                       
                                       if(isset($_SESSION['nom']))echo $_SESSION['nom'] . " " . $_SESSION['prenom'];
                                       
                                       
                                       ?> 
                                    </h5>
                                    
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Infos</a>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                    <input type="submit" data-toggle='modal' data-target='#modify' onclick='ShowLogs()' class="profile-edit-btn" name="btnAddMore" style="width:120px" value="Modifier Profile"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            
                                            
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Nom Prenom</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php if(isset($_SESSION['nom']))echo $_SESSION['nom'] . " " . $_SESSION['prenom'];?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php if(isset($_SESSION['email']))echo $_SESSION['email'] ;?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Telphone</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php if(isset($_SESSION['telephone']))echo $_SESSION['telephone'] ;?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Addresse</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $_SESSION['addresse'] ;?></p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Type</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $_SESSION['type'] ;?></p>
                                            </div>
                                        </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
               
        </div>

        <div class="modal fade" id="modify" tabindex="-1" role="dialog" aria-hidden="true">
        <form action="app/moduser_data.php" method="post" enctype="multipart/form-data">
<div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" type="submit">Modifier Profile</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        

      <div >
 




 
  <div class="form-row">


<div class="profileForm" >

<input type="text" placeholder="Nom" name="nom" >
<br>
<br>
<input type="text" placeholder="Prenom" name="prenom" >
<br>
<br>
<input type="text" placeholder="Email" name="email" >
<br>
<br>
<input type="text" placeholder="telephone" name="telephone" >
<br>
<br>

<input type="text" placeholder="Votre Addresse" name="addresse" >
<br>
<br>

<input type="password" placeholder="Passsword" name="password" >
<br>
<br>
<div class="custom-file">
    <input type="file" class="custom-file-input"  name='image' >
    <label class="custom-file-label" for="validatedCustomFile">Votre image...</label>

  
  </div>




</div>



 


  </div>
 
</form>

</div>



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
        <button type="submir" class="btn btn-primary">modifier</button>
      </div>
    </div>
  </div>
</form>
</div>
