<?php
session_start();
$pri_kor = $_SESSION['korisnicko_ime'];
$log = $_SESSION['obicni_clan'];
if ($log != "log"){
    header ("Location: logovanje.php");
}
?>

