<?php
$usuario = $_POST['Rolmin'];
$password = $_POST['LLLLL'];

if ($usuario == "admin" && $password == "1234") {
    echo "Login exitoso";
} else {
    echo "Usuario o contraseña incorrectos";
}
?>
