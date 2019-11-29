<?php
session_start();
$pri_kor = $_SESSION['korisnicko_ime'];
$log = $_SESSION['menadzer'];
if ($log != "log"){
    header ("Location: logovanje.php");
}
?>

