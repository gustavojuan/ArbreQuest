<?php
session_start();

// Inicializa el array de errores
$errors = [];

// Verifica si el formulario ha sido enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recoge los datos del formulario
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Recoge la contraseña cifrada almacenada en la cookie
    $storedPassword = isset($_COOKIE['password']) ? base64_decode($_COOKIE['password']) : null;

    // Valida el nombre de usuario
    if (empty($username)) {
        $errors['username'] = "El campo de nombre de usuario es obligatorio.";
    }

    // Valida la contraseña
    if (empty($password)) {
        $errors['password'] = "El campo de contraseña es obligatorio.";
    }

    // Si no hay errores de validación, verifica la contraseña
    if (empty($errors)) {
        // Verifica si la contraseña coincide
        if (!password_verify($password, $storedPassword)) {
            $errors['password'] = "Contraseña incorrecta";
        }
    }

    // Si no hay errores de validación ni errores de contraseña, inicia la sesión y redirige al usuario
    if (empty($errors)) {
        $_SESSION['user'] = true;
        header('Location: profile.php');
        exit();
    }
}

// Si hubo errores o no se ha enviado el formulario, muestra la página de inicio de sesión con los errores (si los hay)
require('views/login.view.php');
?>
