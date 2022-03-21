<?php
include('components-php/header.php');
?>

<body>
    <!-- ------------------------------- -->
    <section class="section1">

        <article class="header_article">

            <p class="content_header">orem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it </p>

        </article>
        <figure class="header_img">
        </figure>



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


    <?php

    include('components-php/footer.php');

    ?>

</body>

</html>