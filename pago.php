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

        <div>
            <label class="label_pago " for="email">Nombre</label>
            <input class="input_pago " type="text" name="email" placeholder="Nombre">

        </div>

        <div class="email_number">

            <label class="label_pago " for="email">Correo</label>
            <input class="input_pago " type="email" name="email" placeholder="EventExperience@events.com">

            <label class="label_pago " for="email">Teléfono</label>
            <input class="input_pago " type="email" name="email" placeholder="EventExperience@events.com">

        </div>

        <div>


            <label class="label_pago " for="mensaje">Tarjeta</label>
            <input class="input_pago " type="password" name="clave" placeholder="Password">
        </div>
        <input class="boton_pago submit_card" type="submit" value="Pagar €<?php echo $precio; ?>" name="submit">
    </form>




</div>

<?php
include('./components-php/footer.php');
?>