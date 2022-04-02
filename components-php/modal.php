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
                <button class="close" href="javascript:void(0)" onclick="volverIndex();"> <i class="fas fa-times fa-lg icon"></i> </button>

                <h1><?php echo  $nombre; ?></h1>

                <p><?php echo  $descripcion; ?></p>
                <p> <?php echo  $precio; ?></p>
                <p> <?php echo  $lugar; ?></p>

            </div>
        </div>

<?php
    }
}
?>