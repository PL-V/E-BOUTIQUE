<?php

define('SERVER', '127.0.0.1');
define('USER','root');
define('PASSWORD','');
define('DB','eboutique');


$conn = new PDO('mysql:host='.SERVER.';dbname='.DB,USER,PASSWORD);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

?>