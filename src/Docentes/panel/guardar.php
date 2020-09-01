<?php
include '../../conexion.php';
if (isset($_POST['guardar_tarea'])) {
    $materia = $_POST['materia'];
    $descripcion = $_POST['descripcion'];
    $documento = $_POST['documento'];

    $guardar_tareas = "INSERT INTO tareas (materia, descripcion, documento) VALUES ('$materia', '$descripcion', '$documento')";
    $resultado = mysqli_query($conn, $guardar_tareas);
    if (!$resultado) {
        echo 'error';
    }else{
        $_SESSION['message_task'] = 'Tarea Guardada';
        $_SESSION['message_type'] = 'success';
        header("location:../inicio_docentes.php");
    }
}

?>