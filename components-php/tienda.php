<?php
include('header.php');


include('data-php/Conecta.php');
$link = Conectarse();

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

<hr>

<div id='todo'>

    <?php



    //$connect = mysqli_connect("localhost", "root", "", "proyecto_gs");

    $_SESSION["shopping_cart"]



    ?>


    <br>
    <div class="container" style="display: grid;
  		grid-template-columns: repeat(3, 1fr); 
  		grid-gap: 10px;">
        <!--  estilo cuadricula GRID -->




        <?php
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






                <div id="results" class="row">

                    <div class="col"><br>

                        <?php session_start();
                        if (isset($_SESSION['user'])) { ?><form method="post" action="carrito.php?action=add&id=<?php echo $row["id"]; ?>"><?php } else {
                                                                                                                                            echo '<form  method="post" action="iniciosesion.php">';
                                                                                                                                        } ?>



                            <form method="post" action="tienda.php?action=add&id=<?php echo $row["id"]; ?>">

                                <br>
                                <div class="BumpUp" data-aos="fade-up" data-aos-delay="200" style="border:1px solid #333; background-color:#FFFFFF; padding:16px;   border-radius: 30px; align:center;">


                                    <img class="imagen" style="width:70%;" src="images/<?php echo $row["image"]; ?>" class="img-responsive" /><br />

                                    <h4 class="text-dark"><?php echo $row["name"]; ?></h4>

                                    <h4 class="text-danger">€ <?php echo $row["price"]; ?></h4>

                                    <input type="text" name="quantity" value="1" class="form-control" />

                                    <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />

                                    <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />

                                    <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-danger" value="añadir al carrito" />
                                </div>
                            </form>
                    </div>
                </div>

        <?php
            }
        }

        ?>
    </div>

    <br />





    <!-- Estilos -->