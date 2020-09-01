<?php
include '../conexion.php';

if(isset($_POST['ingresar_usuario'])){
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $insertar = "INSERT INTO users (nombre, apellido, telefono, email, password) VALUES ('$nombre', '$apellido', '$telefono', '$email', '$password')";
    //    $insertar = "INSERT INTO lic (nombre, apellido, telefono, email, password) VALUES ('$nombre', '$apellido', '$telefono', '$email', '$password')";
    $verficar_email = mysqli_query ($conn, "SELECT * FROM users WHERE email = '$email'");
    //$verficar_email = mysqli_query ($conn, "SELECT * FROM lic WHERE email = '$email'");
    if(mysqli_num_rows($verficar_email)>0){
        $_SESSION['message'] = 'El correo electronico ya existe ';
        $_SESSION['message_type'] = 'danger';
        $_SESSION['exit'] = '!!oops: ';
        header ("location:../registrarse.php");
        exit;
    }

    $verficar_telefono = mysqli_query ($conn, "SELECT * FROM users WHERE telefono = '$telefono'");
    if(mysqli_num_rows($verficar_telefono)>0){
        $_SESSION['message'] = 'El correo electronico ya existe ';
        $_SESSION['message_type'] = 'danger';
        $_SESSION['exit'] = '!!oops: ';
        header ("location:../registrarse.php");
        exit;
    }

    $resultado = mysqli_query($conn, $insertar);
    if(!$resultado){
        $_SESSION['message'] = 'Cuenta no creada';
        $_SESSION['message_type'] = 'danger';
        $_SESSION['exit'] = '!!oops: ';
    }else{
        $_SESSION['message'] = 'Cuenta creada';
        $_SESSION['message_type'] = 'success';
        $_SESSION['exit'] = 'Excelente: ';
        header("location:../registrarse.php");
    }
}

?>