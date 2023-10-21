<?php


$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recoge y valida los datos del formulario
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validación de username
    if (empty($username)) {
        $errors['username'] = "El campo de nombre de usuario es obligatorio.";
    }

    // Validación de email
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Ingresa una dirección de correo electrónico válida.";
    }

    // Validación de password
    if (empty($password) || strlen($password) < 8) {
        $errors['password'] = "La contraseña debe tener al menos 8 caracteres.";
    }

    // Si no hay errores de validación, puedes realizar alguna acción, como guardar en la base de datos
    // Si todo está bien, redirige a otra página o muestra un mensaje de éxito
    if (empty($errors)) {
        // Redirige al usuario a la página principal con un mensaje de felicitación
        header('Location: /?success=1');
        exit();
    }
}

// Muestra la vista de registro, ya sea con los errores o el formulario vacío
require('views/registro.view.php');
?>
