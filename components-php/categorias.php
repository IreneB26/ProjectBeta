<?php
// include('data-php/Conecta.php');
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