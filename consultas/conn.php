<?php
    $host = "localhost"; # dirección de servidor de la base de datos
    $user = "root"; # Usuario de la base de datos
    $password = ""; # Contraseña en la base de datos
    $dbname = "tukicitasv2"; # Nombre de la base de datos

    # Establecer conexión con la base de datos
    $xcon = mysqli_connect($host, $user, $password, $dbname);
    
    if (!$xcon) {
        echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
        echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
        echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }
    
    #echo "Éxito: Se realizó una conexión apropiada a MySQL!" . PHP_EOL;
    #echo "Información del host: " . mysqli_get_host_info($xcon) . PHP_EOL;
