<?php

    $server = "localhost";
    $database = "form";

    //// XAMPP BY DEFAULT
    $user = "root";
    $password = "";

    $connection = new PDO("mysql:server=$server;port=3307;dbname=$database", "$user", "$password");


    // echo "connection successful";

?>