<?php 

include('config.php');

?>


<style>
#itm:hover{

  box-shadow: 3px 3px 5px 6px #ccc;


}

</style>


<?php 

if(!isset($_GET['id'])){

include('items_list.php');




}else{



include('item.php');

  
}


?>