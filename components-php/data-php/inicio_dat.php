<?php

include('Conecta.php');
$link = Conectarse();


if (isset($_POST["email"])) {
    $email = $_POST["email"];
}
if (isset($_POST["clave"])) {
    $original = $_POST["clave"];
}

if (isset($_POST['submit'])) {
    if (empty($email)) {
        echo "<p>El campo email esta vacio</p>";
    }
    if (empty($original)) {
        echo "<p>El campo contraseña esta vacio</p>";
    }

    if (!empty($email && $original)) {
    }






    if (isset($email)) {
        $email = trim($_POST['email']);
    } elseif (isset($original)) {
        $original = trim($_POST['clave']);
    }


    if (isset($email)) {
        $result = mysqli_query($link, "SELECT Contrasena_us FROM usuarios where Correo_us='$email';");
        $result2 = mysqli_fetch_array($result);
        if (isset($result)) {
        }
        if (isset($email)) {
        }
        if (isset($result2)) {
            $codificado = $result2['Contrasena_us'];
            if (password_verify($original, $codificado)) {
                //----------------
                // echo "inicio de sesion correcto <br>";
                session_start();
                $_SESSION['user'] = $email;
                echo "Usuario: " . $_SESSION['user'];

                Header("Location: ../../index.php");


                //enlazarpaginaprincipal
                // session_start()  $usuario= $SESSION['user'];
            } else {

                // echo "Usuario o contraseña incorrectos";
                // echo '<script> changePage("iniciosesion.php", "error ususario contraseña"); </script>';

                echo '<script>  window.alert("Usuario o contraseña incorrectos"); </script>';

                // solo marca contraseña incorrecta
            }
        }
    }
}
