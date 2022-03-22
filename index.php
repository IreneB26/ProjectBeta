<?php
include('components-php/header.php');
?>

<body>

    <div class="popup_after"></div>

    <!-- ------------------------------- -->
    <section class="section1">

        <article class="header_article">

            <p class="content_header">orem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it </p>

        </article>
        <!-- <figure class="header_img">
        </figure> -->

        <video class="header_img" autoplay="autoplay" loop="loop" muted defaultMuted>
            <source src="imagenes/video.mp4" type="video/mp4">
        </video>



    </section>

    <!-- -------------------------- -->

    <section class="section2">
        <h1>Busca tu evento</h1>

        <form class="busqueda" action="" method="post">

            <input class="form_search" type="text" name="busqueda" placeholder="Busca tu evento">
            <input class="form_submit" type="submit" name="enviar">

        </form>

    </section>

    <!-- ----------------------------- -->

    <section class="section3">

        <!-- <div class="pop"> </div> -->

        <div class="display_category">
            <p>test</p>

        </div>



        <div class="display_card">


            <?php include('components-php/cards.php'); ?>


        </div>





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