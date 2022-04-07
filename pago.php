<?php
include('./components-php/header.php');
include('./components-php/data-php/Conecta.php');
$link = Conectarse();



$precio = $_REQUEST['precio'];

// $email = $_SESSION['user'];

// $autor = mysqli_query($link, "SELECT Nombre_us FROM  usuarios WHERE Correo_us = '$email'");

// while ($row = mysqli_fetch_array($autor)) {
//     $autor2 = $row['Nombre_us'];
// }




?>



<div class="container_pago">



    <form class="formulario_pago" method="post" action="">

        <div class="titles_pago">
            <h1 class="title_h1">Método de pago</h1>

            <p class="sub_title">Introduzca sus datos para ejecutar el pago</p>

        </div>
        <div>
            <label class="label_pago label " for="email">Nombre</label>
            <input class="input_pago input " type="text" name="email" placeholder="Nombre">

        </div>

        <div class="email_number">

            <div class="email">
                <label class="label_pago label " for="email">Correo</label>
                <input class="input_pago input " type="email" name="email" placeholder="EventExperience@events.com">

            </div>

            <div class="telf">

                <label class="label_pago label" for="email">Teléfono</label>
                <input class="input_pago input " type="email" name="email" placeholder="Introduzca su teléfono">

            </div>


        </div>

        <div>


            <label class="label_pago label " for="mensaje">Tarjeta</label>
            <input class="input_pago input" type="password" name="clave" placeholder="Número de tarjeta">
        </div>
        <input class="boton_pago submit_card" type="button" value="Pagar €<?php echo $precio; ?>" onclick="pagoRealizado()" name="submit">
    </form>




</div>

<?php
include('./components-php/footer.php');
?>