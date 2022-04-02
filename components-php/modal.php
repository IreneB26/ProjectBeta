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



        ?>





        <div class="test">
            <button class="close" href="javascript:void(0)" onclick="volverIndex();"> <i class="fas fa-times fa-lg icon"></i> </button>
            <p><?php echo  $nombre; ?></p>
        </div>

<?php
    }
}
?>