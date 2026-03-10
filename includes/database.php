
<?php

    $db = new mysqli($hostname = 'localhost', $username = 'root', $password = 'root', $database = 'devwebcamps');

    if(!$db){
        echo "Error: No se pudo conectar a Mysql";
        echo "error :" . mysqli_connect_errno();
        exit;
    }
?>