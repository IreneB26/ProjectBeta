<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">

    <title>ticket2you</title>
</head>

<body class="crear_usuario">

    <video class="video_inicio_sesion" autoplay="autoplay" loop="loop" muted defaultMuted>
        <source src="imagenes/video.mp4" type="video/mp4">
    </video>

    <a class="click_logo" href="index.php">
        <h1 class="logo_incio_sesion">LOGO</h1>
    </a>


    <form class="formulario_inicio_sesion" method="post" action="crear_usuario.php">

        <h1 class="title_footer_form inicio_sesion_title ">Registro</h1>
        <p class="content_footer_form  inicio_sesion_text">Crea tu usuario para acceder a la web</p>


        <label class="label label_sesion" for="email">Correo</label>
        <input TYPE="text" NAME="correo" class="input input_sesion" required>

        <label class="label label_sesion" for="mensaje">Contraseña</label>
        <INPUT TYPE="password" NAME="clave" class="input input_sesion" required>

        <label class="label label_sesion" for="mensaje">Repetir contraseña</label>
        <INPUT TYPE="password" NAME="clave2" class="input input_sesion" required>




        <input class="boton boton_sesion" type="submit" value="Enviar" name="submit">


    </form>

    <script>
        function changePage(whereToGo, messageText) {
            alert(messageText);
            window.location = whereToGo;
        }
    </script>

    <div class="crear_cuenta">

        <p class="p_registro">¿Ya tienes cuenta? <a class="a_registro" href="inicio_sesion.php">Inicia sesión</a></p>

    </div>


    <div class="legal_inicio_sesion">

        <ul class="link_legal">

            <li><a class="link_legal_a_incio_sesion" href="">Política de privacidad</a></li>
            <li><a class="link_legal_a_incio_sesion" href=""> Aviso Legal</a></li>
            <li><a class="link_legal_a_incio_sesion" href=""> Politica de cookies</a></li>

        </ul>
    </div>


    <?php

    include("./components-php/data-php/Conecta.php");
    $link = Conectarse();


    if (isset($_POST['correo'])) {
        $correo = trim($_POST['correo']);
    }

    if (isset($_POST['clave'])) {
        $password = trim($_POST['clave']);




        if (isset($_POST['submit'])) {

            if (empty($correo)) {
                echo "<p>El campo correo esta vacio</p>";
            }

            if (empty($password)) {
                echo "<p>El campo contraseÃ±a esta vacio</p>";
            }
        }





        $q = mysqli_query($link, "SELECT * FROM usuarios WHERE Correo_us = '$correo'");
        //verificamos si el user exite con un condicional
        if (mysqli_num_rows($q) == 0) {

            // mysql_num_rows <- esta funcion me imprime el numero de registro que encontro
            // si el numero es igual a 0 es porque el registro no exite, en otras palabras ese user no esta en la tabla miembro por lo tanto se puede registrar

            if (!empty($correo && $password)) {



                $password = password_hash($password, PASSWORD_DEFAULT);
                mysqli_query($link, "insert into usuarios(Correo_us,Contrasena_us) values('$correo','$password')");


                echo '<script> changePage("inicio_sesion.php", "Te has registrado correctamente"); </script>';

                // Header("Location: iniciosesion.php");

            }
        } else {


            // echo 'el correo ya esta registrado, ingresa otro';

            echo '<script>  window.alert("El correo ya esta registrado, ingresa otro"); </script>';
        }
    }

    ?>




    <!-- 
    <video class="video_inicio_sesion_mobile" autoplay="autoplay" loop="loop" muted defaultMuted> 
        <source src="imagenes/inicio_sesion_mobile.mp4" type="video/mp4">
    </video> -->











</body>

</html>