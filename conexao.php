<?php
$servername = "mysql742.umbler.com:41890";
$username   = "recruta";
$password   = "senhadificil1";
$database   = "recruta";

//create connections
$conexao = mysqli_connect($servername, $username, $password, $database);
mysqli_set_charset($conexao,"utf8");
?>