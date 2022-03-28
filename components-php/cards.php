<!-- <div class="popup">

    <div class="pop"> </div> -->



<?php




// $link = Conectarse();






$_SESSION["shopping_cart"];



// $query = "SELECT * FROM tbl_product ORDER BY id ASC";

// si hay categoria muesra producto segun esta
if (isset($_GET["id_cat"])) {
    $id_cat = $_GET['id_cat'];
    $query = "SELECT * FROM tbl_product WHERE id_cat='$id_cat' ORDER BY name ASC";
} else {
    $query = "SELECT * FROM tbl_product ORDER BY price ASC";
}



$result = mysqli_query($link, $query);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) {
?>






        <?php
        $imagen = $row["image"];

        $id = $row["id"];

        ?>


        <figure style="background-image:url('imagenes/<?php echo "$imagen"; ?>');" class="bg_card">

            <?php session_start();
            if (isset($_SESSION['user'])) { ?><form class="form_card" method="post" action="./components-php/carrito.php?action=add&id=<?php echo "$id"; ?>"><?php } else {
                                                                                                                                                                echo '<form class="form_card"  method="post" action="./inicio_sesion.php">';
                                                                                                                                                            } ?>

                <!-- <form class="form_card" method="post" action="tienda.php?action=add&id=<?php echo "$id"; ?>"> -->



                <article class=" inf_card">



                    <div class="parafos_card">
                        <p class="title_card"> concierto viveros <?php echo $row["name"] ?></p>
                        <p>valecnia <?php echo $row["price"]; ?></p>
                        <p>€ <?php echo $row["price"]; ?></p>


                        <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />
                        <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />
                    </div>


                    <input class="input_card" type="number" name="quantity" min="0" placeholder="Número de entradas">
                    <div class="contain_form_buttons">
                        <button type="submit" name="add_to_cart" class="submit_card">comprar</button>
                        <button class="ver_mas">Ver más</button>
                    </div>

                </form>

                </article>

        </figure>
        <!-- </div> -->

<?php
    }
}
?>