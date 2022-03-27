<?php

include('header.php');


include('data-php/Conecta.php');
$link = Conectarse();






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
                    if (isset($_SESSION['user'])) { ?><form method="post" action="carrito.php?action=add&id=';?><?php echo $row["id"]; ?>><?php } else {
                                                                                                                                            echo '<form  method="post" action="iniciosesion.php">';
                                                                                                                                        } ?>

	

				<form method=" post" action="tienda.php?action=add&id=<?php echo $row["id"]; ?>">

                            <br>
                            <div class="BumpUp" data-aos="fade-up" data-aos-delay="200" style="border:1px solid #333; background-color:#FFFFFF; padding:16px;   border-radius: 30px; " align="center">


                                <img class="imagen" style="width:70%;" src="images/<?php echo $row["image"]; ?>" class="img-responsive" /><br />
                                <style>
                                    .BumpUp {
                                        text-align: center;
                                        width: 100%;
                                    }

                                    .BumpUp img {

                                        margin: 15px;
                                        -webkit-transition: margin 0.5s ease-out;
                                        -moz-transition: margin 0.5s ease-out;
                                        -o-transition: margin 0.5s ease-out;
                                    }

                                    .BumpUp img:hover {
                                        margin-top: 2px;
                                    }
                                </style>
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

    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/custom.js"></script>