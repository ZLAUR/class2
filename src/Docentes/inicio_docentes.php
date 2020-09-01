<?php 
session_start ();
$varsesion = $_SESSION['email'];
if($varsesion == null || $varsesion= ''){
    header('Location: /');
    die();
}

?>

<?php include '../conexion.php'; ?>

<?php include 'include/header.php'; ?>

<?php include 'panel.php'; ?>


