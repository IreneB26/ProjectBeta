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
        <h1>Categorías</h1>

        <ul class="contain_cat">

            <li class="cat"><a class="button_cat" href=""> Deporte </a></li>
            <li class="cat"><a class="button_cat" href=""> Deporte </a></li>
            <li class="cat"><a class="button_cat" href=""> Deporte </a></li>
            <li class="cat"><a class="button_cat" href=""> Deporte </a></li>
            <li class="cat"><a class="button_cat" href=""> Deporte </a></li>


        </ul>

    </section>

    <!-- ----------------------------- -->

    <section class="section3">

        <!-- <div class="pop"> </div> -->




        <?php include('components-php/cards.php'); ?>



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