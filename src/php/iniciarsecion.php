<?php
include '../conexion.php';

if(isset($_POST['verificar_usuario'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $_SESSION['email']= $email;
}

$consulta_verificar_estudiantes = "SELECT * FROM users WHERE email = '$email' && password = '$password'";
$consulta_verificar_docente = "SELECT * FROM lic WHERE email = '$email' && password = '$password'";


$resultado_e = mysqli_query($conn, $consulta_verificar_estudiantes);
$validacion_e = mysqli_num_rows($resultado_e);

$resultado_d = mysqli_query($conn, $consulta_verificar_docente);
$validacion_d = mysqli_num_rows($resultado_d);

if($validacion_e  > 0){
    header("location:../estudiantes/inicio_estudiantes.php");
}else if($validacion_d >0){
    header("location:../Docentes/inicio_docentes.php");
}else{
    $_SESSION['message'] = 'El correo o la contraseña son incorrectos';
    $_SESSION['message_type'] = 'danger';
    $_SESSION['exit'] = '!!oops: ';
    header ("location:../iniciarsecion.php");
    exit;
}

?>
