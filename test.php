<?php


// recorro bd y saco categorias e id
$result = mysqli_query($link, "SELECT * FROM categoria");

// titulo
echo "<h3>Categorias</h3><br>";
echo "<a class='btn2' href=''>&#8226 Todos los productos &nbsp</a>";



while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    $id_cat = $row['id_cat'];
    $categoria = $row['categoria'];

    echo "&#8226 &nbsp";
    echo "<a class='btn1' data-id='$id_cat' href=''>$categoria</a>";
    echo "&nbsp ";
}
?>


<script>
    $(document).ready(function() {
        $('.btn1').on('click', function() {

            var id = $(this).attr('data-id');

            $.ajax({
                type: "GET",
                async: true,
                url: "productos.php?id_cat=" + id,
                cache: false,
                success: function(response) {
                    $('#todo').html(response);

                },
                error: function(error) {
                    console.log('Error ${error}')
                }

            });
            return false;
        });
    });
</script>

<script>
    $(document).ready(function() {
        $('.btn2').on('click', function() {


            $.ajax({
                type: "GET",
                cache: false,
                url: "productos.php",
                success: function(response) {
                    $('#todo').html(response);

                }

            });
            return false;
        });
    });
</script>



<?php

// echo "<TABLE border=0>";
// echo "<TR>";
// echo "<TD>" ."<li><a href=tienda.php?id_cat=$id_cat>$categoria</a></li>" . "</TD>";
// echo "</TR>";

// echo "</TABLE>";



// cierro while
?>

<!-- cardsss -->
<div id='todo'>

    <?php

    $_SESSION["shopping_cart"];






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








            <?php session_start();
            if (isset($_SESSION['user'])) { ?><form method="post" action="carrito.php?action=add&id=<?php echo $row["id"]; ?>"><?php } else {
                                                                                                                                echo '<form  method="post" action="iniciosesion.php">';
                                                                                                                            } ?>



                <figure style="background-image:url('imagenes/<?php echo "$imagen"; ?>');" class="bg_card">

                    <form method=" post" action="tienda.php?action=add&id=<?php echo $row["id"]; ?>">



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

        <?php
        }
    }

        ?>
</div>






<!-- Estilos -->