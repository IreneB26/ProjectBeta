<?php
include('components-php/header.php');
?>


<body>
    <div class="carrito">
        <button class="cerrar_carrito">
            <i class="fas fa-times fa-lg"></i>
        </button>

        <?php
        include('components-php/carrito.php');
        ?>


    </div>

    <div class="popup_after"></div>

    <!-- ------------------------------- -->
    <section class="section1">


        <figure class="header_img">
            <p class="text_img">Busca tu evento</p>

            <form class="busqueda" action="" method="post">

                <input class="form_search" type="text" name="busqueda" placeholder="Busca tu evento">
                <input class="form_submit" type="submit" name="enviar">

            </form>

        </figure>

        <!-- <video class="header_img" autoplay="autoplay" loop="loop" muted defaultMuted> -->
        <!-- <source src="imagenes/video.mp4" type="video/mp4"> -->
        <!-- </video> -->



    </section>


    <!-- -------------------------- -->

    <section class="section2">

        <?php
        include("/components-php/data-php/Conecta.php");
        $link = Conectarse();

        // recorro bd y saco categorias e id
        // recorro bd y saco categorias e id
        $result = mysqli_query($link, "SELECT * FROM categoria");

        // titulo
        echo "<h1>Categorias</h1>";
        echo "<ul class='contain_cat'>
        <li class='cat'><a class='btn2 button_cat' href=''> Todos los productos &nbsp</a></li>";



        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $id_cat = $row['id_cat'];
            $categoria = $row['categoria'];

            echo "<li class='cat'><a class='btn1 button_cat' data-id='$id_cat' href=''>$categoria</a></li>";
        }
        ?>

        </ul>

        <script>
            $(document).ready(function() {
                $('.btn1').on('click', function() {

                    var id = $(this).attr('data-id');

                    $.ajax({
                        type: "GET",
                        async: true,
                        url: "./components-php/productos.php?id_cat=" + id,
                        cache: false,
                        success: function(response) {
                            $('#section3').html(response);

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
                        url: "./components-php/productos.php",
                        success: function(response) {
                            $('#section3').html(response);

                        }

                    });
                    return false;
                });
            });
        </script>



    </section>

    <!-- ----------------------------- -->


    <section class="section3" id="section3">

        <!-- <div class="pop"> </div> -->

        <?php

        include('./components-php/cards.php')

        ?>


    </section>



    <!-- -------------------------- -->

    <section class="section4">

        <h1>FAQ</h1>

        <div class="flex_faq">
            <div class="izquierda">
                <container class="question">
                    <p>test <button class="open">abrir</button></p>

                    <hr>

                    <div class="answer no_visible">
                        <p>test</p>
                    </div>


                </container>
            </div>
            <div class="derecha">
                <container class="question">
                    <p>test <button class="open">abrir</button></p>
                    <hr>

                    <div class="answer no_visible">
                        <p>test</p>
                    </div>


                </container>
            </div>
        </div>


    </section>



    <!-- -------------------------------- -->


    <?php

    include('components-php/footer.php');

    ?>






</body>

</html>