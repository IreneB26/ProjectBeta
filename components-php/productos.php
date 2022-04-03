<!-- <div class="popup">

    <div class="pop"> </div> -->


<?php






include('data-php/Conecta.php');
$link = Conectarse();

// recorro bd y saco categorias e id







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



                <article class="inf_card">



                    <div class="parafos_card">
                        <p class="title_card"><?php echo $row["name"] ?></p>
                        <p> <?php echo $row["lugar"] . ", " . $row["fecha"] ?></p>
                        <p>€ <?php echo $row["price"]; ?></p>


                        <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />
                        <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />
                    </div>


                    <input class="input_card" id="cantidad" type="number" name="quantity" min="1" value="1" placeholder="Número de entradas">
                    <div class="contain_form_buttons">
                        <?php if (isset($_SESSION['user'])) { ?>
                            <button type="button" name="add_to_cart" class="submit_card" href=" javascript:void(0);" onclick=' carritos(<?php echo $row["id"]  ?> )'>comprar</button>

                        <?php } else {
                            echo '  <a class="submit_card" href="./inicio_sesion.php">comprar </a>';
                        }

                        ?>

                        <button type="button" class="ver_mas" href=" javascript:void(0);" onclick='mostrarDetalles(<?php echo $row["id"]; ?>)'>Ver más</button>
                    </div>

                </form>

                </article>

        </figure>
        <!-- </div> -->

<?php
    }
}
?>