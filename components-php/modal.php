<?php
include('data-php/Conecta.php');

$link = Conectarse();


$info = $_REQUEST['info'];


$query = "SELECT * FROM tbl_product WHERE id='$info'";

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





        <div class="contain_modal">
            <div class="modal">

                <div style="background-image:url('imagenes/<?php echo "$imagen"; ?>');" class="img_modal">
                </div>


                <div class="info_modal">

                    <div class="contain_but">
                        <button class="close" href="javascript:void(0)" onclick="volverIndex();"> <i class="fas fa-times fa-lg icon"></i> </button>

                    </div>

                    <div class="text_modal">


                        <h4><?php echo  $nombre; ?></h4>

                        <p><?php echo  $descripcion; ?></p>
                        <p class="text"> €<?php echo  $precio; ?></p>
                        <p class="text"> <?php echo  $lugar; ?></p>
                        <button type="button" name="add_to_cart" class="submit_card">comprar</button>

                    </div>
                </div>

            </div>
        </div>

<?php
    }
}
?>