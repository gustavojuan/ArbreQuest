<?php
/*TODO: Esto de abrir sesiones tantas veces no lo ve claro*/
session_start();

/*Operador modernete*/
if (isset($_SESSION['user']) ? $_SESSION['user'] : false) {
    require 'views/profile.view.php';
} else {
    header('Location: login.php');
    exit();
}
?>
