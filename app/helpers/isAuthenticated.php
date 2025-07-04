<?php

// Función para comprobar si existe una cookie de sesión
function isAuthenticated()
{
    return isset(($_COOKIE['nusuario'])) && isset($_COOKIE['id']);
}
