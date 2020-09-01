<?php include 'conexion.php';?>
<?php include 'includes/header/header.php';?>

<!-- FORMULARIO-->
<section class="formulario1">
<form action="php/iniciarsecion.php" method="POST" class=formulario2>
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
        <input class="login input_100 form-control" name="email" type="text" placeholder="Email">
        <input class="login input_100 form-control" name="password" type="password" placeholder="Contraseña">
        <input class="boton btn btn-success btn-lg btn-block" name="verificar_usuario" type="submit" value="Registrar">
    </div>
</form>
</section>

</body>
</html>
</body>
</html>