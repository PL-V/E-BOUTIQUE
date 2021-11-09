<?php 

include('header.php');

?>

<span id="burgundy" style="position:absolute;font-weight: 700;font-family: 'Open Sans', sans-serif;top:140px;left:600px">Login Administration</span>
<div class="login" style="position:absolute;;left:470px;width:400px;">
<form action="app/log_data.php" method="post" onsubmit="return validateForm()">
<input type="text" placeholder="Email" name="email" style="border: 1px solid #9e9c9c;" required>
<br>
<br>
<input type="password" placeholder="Passsword" name="password" style="border: 1px solid #9e9c9c;" required>
<br>
<br>
<input type="submit" id="BtLg" style="postition:absolute;right:200px" value="Login">
</form>
</div>