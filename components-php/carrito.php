<?php
include('data-php/Conecta.php');

$link = Conectarse();


$producto = $_REQUEST['producto'];

$cantidad = $_REQUEST['cantidad'];



$query = "SELECT * FROM tbl_product WHERE id='$producto'";

$result = mysqli_query($link, $query);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) {
?>






        <?php
        $nombre = $row["name"];

        $descripcion = $row["descripcion"];

        $precio = $row["price"];
        $lugar = $row["lugar"];





        ?>









        <button class="close" href="javascript:void(0)" onclick="cerrarCarrito();"> <i class="fas fa-times fa-lg icon"></i> </button>






        <p class="modal_description"><?php echo  $cantidad; ?></p>
        <p class="text"> €<?php echo  $precio; ?></p>
        <button type="button" name="add_to_cart" class="submit_card">comprar</button>


        <table class="default">

            <tr>

                <td>Producto</td>

                <td>Cantidad</td>

                <td>Precio</td>

            </tr>

            <tr>

                <td> <?php echo  $nombre; ?> </td>

                <td> <?php echo  $cantidad; ?> </td>

                <td>€ <?php echo $cantidad * $precio; ?> </td>

            </tr>

            <tr>



                <td> <?php echo  $precio; ?> </td>

            </tr>

        </table>


<?php
    }
}
?>