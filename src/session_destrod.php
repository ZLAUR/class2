<?php 
session_start ();
$varsesion = $_SESSION['email'];
if ($varsesion == null || $varsesion='') {
    echo 'usted no tine utorizacion';
    die();
}
session_destroy ();
header("location:../index.php");
?>