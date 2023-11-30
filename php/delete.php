<?php

    include "connection.php";


    $id = $_GET['id'];
    // echo "<center> <h1>$id</h1> </center>";

    $connection->query("DELETE FROM users WHERE  id='$id'");
    header("Location: get.php");
?>