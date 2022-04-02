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
        $imagen = $row["name"];

        $id = $row["id"];

        ?>





        <div style="background-color:red;" class="test">
            <p><?php echo  $imagen; ?></p>
        </div>

<?php
    }
}
?>