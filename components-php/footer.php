<footer class="footer" id="footer">

    <div class="footer_iz">
        <h1 class="footer_title">Siguenos en nuestras redes sociales</h1>

        <ul class="list_social">
            <li class="social"><a class="visited" href="https://github.com/IreneB26/project_beta" target="_blank">linkedin</a></li>
            <li class="social"><a class="visited"> Facebook</a></li>
            <li class="social"><a class="visited"> twitter</a></li>
            <li class="social"><a class="visited"> twitter</a></li>

        </ul>




    </div>

    <div class="footer_de">



        <form class="formulario" method="post" action="principal.php">
            <h1 class="title_footer_form">Contactanos</h1>
            <p class="content_footer_form">Hola, ¿Cómo podemos ayudarte?</p>

            <label class="label" for="email">Correo</label>
            <input class="input" type="email" id="email" name="email" placeholder="Correo">
            <label class="label" for="mensaje">Mensaje</label>
            <textarea class="input" type="text" id="mensaje" name="mensaje" placeholder="Escriba su mensaje aqui..."></textarea>
            <input class="boton" type="submit" value="Enviar" name="submit">
        </form>

    </div>

    <!-- SCRIPTS -->
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="js/jquery.min.js"></script>


</footer>

<container class="legal">

    <div class="empresa">

        <p class="marca"> Ticket 2 you</p>
    </div>

    <div class="pag">

        <ul class="link_legal">

            <li><a class="link_legal_a" href="">Política de privacidad</a></li>
            <li><a class="link_legal_a" href=""> Aviso Legal</a></li>
            <li><a class="link_legal_a" href=""> Politica de cookies</a></li>

        </ul>


    </div>



</container>



<?php
if (isset($_POST['submit'])) {

    $mensaje .= "Contacto desde la web:\n";
    $mensaje .= "-------------------------------------\n";
    $mensaje .= "\n";
    $mensaje .= "email: $_POST[email]\n";
    $mensaje .= "\n";
    $mensaje .= "Mensaje: $_POST[mensaje]\n";
    $desde = 'From: Desde la web <irene@gmail.com>' . "\r\n";
    $to = "bargues.irene@gmail.com";
    $subject = "Web Contacto AboutMe";


    mail($to, $subject, $mensaje, $desde);
    echo "<p class='confirmacion'>Su mensaje se ha enviado correctamente</p>";


?>
    <script>
        console.log("enviado");
        window.location = "#footer";
    </script>
<?php
    exit();
}
?>