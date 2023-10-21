<?php
session_start();
$errors = [];

/*
 * Si recibimos el formulario
 * */
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $username = $_POST['username'];
    $password = $_POST['password'];

    // Obtenemos el password que tenemos almacenado en la Cookie
    $storedPassword = isset($_COOKIE['password']) ? base64_decode($_COOKIE['password']) : null;


    /*TODO: Esto se puede refactorizar a una funcion de validacion*/
    if (empty($username)) {
        $errors['username'] = "El campo de nombre de usuario es obligatorio.";
    }

    if (empty($password)) {
        $errors['password'] = "El campo de contraseña es obligatorio.";
    }


    if (empty($errors)) {
        if (!password_verify($password, $storedPassword)) {
            $errors['password'] = "Contraseña incorrecta";
        }
    }

   // Si no hay rerrores seteamos session y pasamos a profle
    if (empty($errors)) {
        $_SESSION['user'] = true;
        header('Location: profile.php');
        exit();
    }
}

require('views/login.view.php');
?>
