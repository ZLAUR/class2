<?php include 'conexion.php';?>
<?php include 'includes/header/header.php';?>

<!-- FORMULARIO-->
<section class="formulario1">
<form action="php/registrarse.php" method="POST" class=formulario2>
    <div class="contenedor">
    <div class="logo1">
        <img class="logo2" src="https://i.ibb.co/ThNB3Bn/LOGO.png" alt="">
    </div>
    <br>

    <!--ALERTA DE CUENTA CREADA O ERRONEA-->

    <?php if (isset($_SESSION['message'])) { ?>
    <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
        <strong><?= $_SESSION['exit']?></strong> <?= $_SESSION['message'] ?>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    </div>
    <?php session_unset (); } ?>

    <!--SECCION DE REGISTRO INPUTS-->

        <input class="input_50 form-control" name="nombre" type="text" placeholder="Nombre" autofocus>
        <input class="input_50 form-control" name="apellido" type="text" placeholder="Apellido">
        <input class="input_100 form-control" name="email" type="email" placeholder="Correo">
        <input class="input_100 form-control" name="telefono" type="text" placeholder="Teléfono">
        <input class="input_100 form-control" name="password" type="password" placeholder="Contraseña">
        <input class=" boton btn btn-success btn-lg btn-block" name="ingresar_usuario" type="submit" value="Registrar">
        <h2 class="info1">¿Ya tienes<a class="info2" href="iniciarsecion.php"> una cuenta</a>?</h2>
    </div>
</form>
</section>

</body>
</html>