<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">

    <title>ticker 2 you</title>
</head>

<body class="inicio_sesion">

    <video class="video_inicio_sesion" autoplay="autoplay" loop="loop" muted defaultMuted>
        <source src="imagenes/video.mp4" type="video/mp4">
    </video>

    <a class="click_logo" href="index.php">
        <h1 class="logo_incio_sesion">LOGO</h1>
    </a>


    <form class="formulario_inicio_sesion" method="post" action="principal.php">

        <h1 class="title_footer_form inicio_sesion_title ">Login</h1>
        <p class="content_footer_form  inicio_sesion_text">Entra y disfruta de todas las opciones de la web</p>

        <label class="label label_sesion" for="email">Correo</label>
        <input class="input input_sesion" type="email" id="email" name="email" placeholder="ticket2you@events.com">
        <label class="label label_sesion" for="mensaje">Contraseña</label>
        <input class="input input_sesion" type="password" id="contraseña" name="contraseña" placeholder="Password">
        <input class="boton boton_sesion" type="submit" value="Enviar" name="submit">
    </form>

    <div class="crear_cuenta">

        <p class="p_registro">¿No estás registrado? <a class="a_registro" href="crear_usuario.php">Crea una cuenta</a></p>

    </div>


    <div class="legal_inicio_sesion">

        <ul class="link_legal">

            <li><a class="link_legal_a_incio_sesion" href="">Política de privacidad</a></li>
            <li><a class="link_legal_a_incio_sesion" href=""> Aviso Legal</a></li>
            <li><a class="link_legal_a_incio_sesion" href=""> Politica de cookies</a></li>

        </ul>
    </div>



    <!-- 
    <video class="video_inicio_sesion_mobile" autoplay="autoplay" loop="loop" muted defaultMuted> 
        <source src="imagenes/inicio_sesion_mobile.mp4" type="video/mp4">
    </video> -->

</body>

</html>