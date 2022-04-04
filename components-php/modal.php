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
        $imagen = $row["image"];

        $img2 = $row["img2"];


        $precio = $row["price"];
        $lugar = $row["lugar"];





        ?>





        <div class="contain_modal">
            <div class="modal">

                <div style="background-image:url('imagenes/img2/<?php echo "$img2"; ?>');" class="img_modal">
                </div>


                <div class="info_modal">

                    <div class="contain_but">
                        <button class="close" href="javascript:void(0)" onclick="volverIndex();"> <i class="fas fa-times fa-lg icon"></i> </button>

                    </div>

                    <div class="text_modal">


                        <h4 class="tittle_modal"><?php echo  $nombre; ?></h4>

                        <p class="modal_description"><?php echo  $descripcion; ?></p>

                        <div class="button_modal">


                            <p class="text"> €<?php echo  $precio; ?></p>
                            <p class="text"> <?php echo  $lugar; ?></p>


                            <?php if (isset($_SESSION['user'])) { ?>
                                <button type="button" name="add_to_cart" class="submit_card" href=" javascript:void(0);" onclick=' carritos(<?php echo $row["id"]  ?> )'>comprar</button>

                            <?php } else {
                                echo '  <a class="submit_card" href="./inicio_sesion.php">comprar </a>';
                            }

                            ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>

<?php
    }
}
?>