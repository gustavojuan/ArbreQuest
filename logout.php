<?php
// Inicia la sesión
session_start();

// Destruye la sesión
session_destroy();

// Redirige al usuario a la página de inicio o a donde desees
header('Location: /'); // Puedes cambiar la URL según tus necesidades
exit();
?>