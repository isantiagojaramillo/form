<?php

    // $server = "localhost";
    // $database = "form";
    $server = "localhost";
    $database = "id21601161_form";

    //// XAMPP BY DEFAULT
    // $user = "root";
    // $password = "";
    $user = "id21601161_root";
    $password = "";

    $connection = new PDO("mysql:server=$server;port=3307;dbname=$database", "$user", "$password");


    // echo "connection successful";

?>