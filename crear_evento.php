<?php
include('./components-php/header.php');
?>

<form class="formulario_inicio_sesion" method="post" action="components-php/data-php/inicio_dat.php">

    <h1 class="title_footer_form inicio_sesion_title ">Login</h1>
    <p class="content_footer_form  inicio_sesion_text">Entra y disfruta de todas las opciones de la web</p>

    <label class="label label_sesion" for="email">Correo</label>
    <input class="input input_sesion" type="email" id="email" name="email" placeholder="ticket2you@events.com">
    <label class="label label_sesion" for="mensaje">Contraseña</label>
    <input class="input input_sesion" type="password" id="contraseña" name="clave" placeholder="Password">
    <input class="boton boton_sesion" type="submit" value="Enviar" name="submit">
</form>

<?php
include('./components-php/footer.php');
?>