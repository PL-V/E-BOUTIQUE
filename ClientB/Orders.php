<?php 

include("header.php");
include('../app/config.php');

$sth = $conn->prepare("SELECT * from orders where pid IN (select id from products where uid=" . $_SESSION['id'] . ")" );
$sth->execute();

$result = $sth->fetch(PDO::FETCH_ASSOC);

?>

<?php if($result) {?>
<div class="content_table">
    <div class="title">
        <h2 style="margin-left:300px;margin-top:50px;">Orders</h2>
    </div>
    <div class="main" style="width:1050px">
        <table>
            <thead>
                <tr>
                    <td>Nom</td>
                    <td>Email</td>
                    <td>Telephone</td>                 
                    <td>Date Order</td>
                    <td>Status Order </td>
                    <td>Addresse</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                <?php    while($result){?>
                    <td><?php echo $result['nom']. " " . $result['prenom']   ?></td>
                    <td><?php echo $result['email']  ?></td>
                    <td><?php echo $result['tele']  ?></td>
                   
                    <td><?php echo $result['date']  ?></td>
                    
                    <td>en attendant</td>
                    <td><?php echo $result['addresse']  ?></td>
                </tr>
             
 <?php
$result = $sth->fetch(PDO::FETCH_ASSOC);

}?>
            </tbody>
            

        </table>
    </div>
</div>
<?php }?>