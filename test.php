<?php
include('./components-php/header.php');



include('./components-php/data-php/Conecta.php');
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
                url: "./components-php/productos.php?id_cat=" + id,
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
                url: "./components-php/productos.php",
                success: function(response) {
                    $('#todo').html(response);

                }

            });
            return false;
        });
    });
</script>





<!-- cardsss -->
<div id='todo'>

    <?php

    include('./components-php/cards.php')

    ?>
</div>






<!-- Estilos -->












// titulo
echo "<h1>Categorias</h1><br>";
echo "<ul class='contain_cat'>
    <li class='cat'>
        <a class='button_cat btn1' href=''> Todos los productos &nbsp</a>
    </li>";



    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    $id_cat = $row['id_cat'];
    $categoria = $row['categoria'];

    echo "<li class='cat'><a class='button_cat btn2' data-id='$id_cat' href=''>$categoria</a>
    </li>";

    // cierro while
    } ?>