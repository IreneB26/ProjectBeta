<?php
include('components-php/header.php');
?>


<body>



    <div class="pop"> </div>


    <div class="carrito">

        <?php
        include('components-php/carrito.php');
        ?>


    </div>

    <div class="popup_after"></div>

    <!-- ------------------------------- -->
    <section class="section1">

        <?php
        include("./components-php/busca_evento.php");
        ?>

    </section>


    <!-- -------------------------- -->

    <section class="section2">

        <?php
        include("./components-php/categorias.php");
        ?>

    </section>

    <!-- ----------------------------- -->


    <section class="section3" id="section3">


        <?php

        include('./components-php/cards.php')

        ?>


    </section>



    <!-- -------------------------- -->

    <section class="section4">

        <?php

        include('./components-php/faq.php')

        ?>

    </section>



    <!-- -------------------------------- -->


    <?php

    include('components-php/footer.php');

    ?>







</body>

</html>