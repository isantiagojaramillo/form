<?php
    include "connection.php";
    //// BASIC KNOWNLEDGE
    // $edad = 24;

    // print('Hello Santi! Your age is: '. $edad);

    // echo " <h2>Have  a nice day!</h2>";
    // echo "<h1>THIS IS A TITLE</h1>";
    // echo "your age is {$edad}";
    
    // for ($i=0; $i < 10; $i++) { 
    //     # code...
    // }

    // foreach

    // if (condition) {
    //     # code...
    // }

    //// OBTAINING DATA
    $email = $_POST['email'];
    $password = $_REQUEST['password'];
    $encryptedPassword = password_hash($password,PASSWORD_BCRYPT);
        

    // echo "<p> email: {$email}</p>";
    // echo "<p> password: {$password} </p>";


    //// ENCRYPTING DATA
    // $encryptedPassword2 = password_hash($password, PASSWORD_DEFAULT);

    // echo "<p> hash1: {$encryptedPassword}</p>";
    // echo "<p> hash2: {$encryptedPassword2} </p>";

    // $sql = "INSERT INTO usuarios VALUES (null, '$email', '$encryptedPassword')";

    // $connection -> query($sql);

    $send = $connection->prepare("INSERT INTO users VALUES (null, ?, ?)");

        $send->bindParam(1,$email);
        $send->bindParam(2,$encryptedPassword);
        $send->execute();

        header('Location: ../index.html');


?>








