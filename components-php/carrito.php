<?php
include('data-php/Conecta.php');

$link = Conectarse();


if (!empty($_GET)) {



    session_start();
    $producto = $_REQUEST['producto'];


    $query = "SELECT * FROM tbl_product WHERE id='$producto'";

    $result = mysqli_query($link, $query);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {





            if (isset($_SESSION['carrito'])) {
                $carrito_mio = $_SESSION['carrito'];
                if (isset(
                    $_REQUEST['producto']
                )) {
                    $producto = $_REQUEST['producto'];
                    $cantidad = $_REQUEST['cantidad'];




                    $nombre = $row["name"];

                    $descripcion = $row["descripcion"];
                    $num = 0;
                    $precio = $row["price"];
                    $lugar = $row["lugar"];

                    $carrito_mio[] = array("nombre" => $nombre, "cantidad" => $cantidad, "precio" => $precio);
                }
            } else {


                $producto = $_REQUEST['producto'];

                $cantidad = $_REQUEST['cantidad'];

                $nombre = $row["name"];

                $descripcion = $row["descripcion"];

                $precio = $row["price"];
                $lugar = $row["lugar"];
                $carrito_mio[] = array("nombre" => $nombre, "cantidad" => $cantidad, "precio" => $precio);
            }


            $_SESSION['carrito'] = $carrito_mio;
            // $producto = $_REQUEST['producto'];
            // $cantidad = $_REQUEST['cantidad'];

            echo ' <button class="close" href="javascript:void(0)" onclick="cerrarCarrito();"> <i class="fas fa-times fa-lg icon"></i> </button>';

            // echo '<a href="./components-php/borrar_carrito.php">borrar carrito</a>';


            echo ' <table class="tabla_carrito">

            <tr>

                <td class="product cabecera_carrito">Producto</td>

                <td class="cantidad cabecera_carrito">Cantidad</td>

                <td class="precio cabecera_carrito">Precio</td>

            </tr> ';

            for ($i = 0; $i <= count($carrito_mio) - 1; $i++) {
                if ($carrito_mio[$i] != NULL) {




?>




                    <tr class="info_cart">

                        <td class="product contenido_carrito"> <?php echo $carrito_mio[$i]['nombre']; ?> </td>

                        <td class="cantidad contenido_carrito"> <?php echo $carrito_mio[$i]['cantidad'];  ?> </td>

                        <td class="precio contenido_carrito">€ <?php echo $carrito_mio[$i]['cantidad'] * $carrito_mio[$i]['precio']; ?> </td>

                    </tr>





            <?php
                }
            }



            ?>

            </table>















<?php
        }
    }
} else {
    echo ' <button class="close" href="javascript:void(0)" onclick="cerrarCarrito();"> <i class="fas fa-times fa-lg icon"></i> </button>';
    echo "<div class='header_cart'";
    echo "<h2><a class='titulo_carrito' href='./index.php#section3' > Tu carrito esta vacio</a></h2>";
    echo "<hr class='hr_cart' >";
    echo "</div>";
}
?>