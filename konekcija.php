<?php

$server = "localhost";
$user_name = "root";
$password = "";
$database = "zavr_rad_tim_me";

$kon_sa_serv = mysqli_connect($server, $user_name, $password);
$kon_sa_baz = mysqli_select_db($kon_sa_serv, $database);

if (!$kon_sa_baz) {
    die("Baza nije pronađena!");
}

?>
