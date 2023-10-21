<?php
session_start(); // Asegúrate de iniciar la sesión en profile.php

// Verifica si el usuario ha iniciado sesión
if (isset($_SESSION['user']) && $_SESSION['user'] === true) {
    // El usuario ha iniciado sesión, muestra el contenido de la página
    // Puedes personalizar esta parte según tus necesidades
    require 'views/profile.view.php';
} else {
    // Si el usuario no ha iniciado sesión, redirige a login.php
    header('Location: login.php');
    exit();
}
?>
