<?php

    include "connection.php";

    $data = $connection->query("SELECT * FROM users");

        // while($data = $datas->fetch()){
        //     echo $data['email']." ".$data ['password']."<br>";
        // }

        // foreach($data as $i){
        //     echo $i['email']." ".$i ['password']."<br>";
        // }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/styles.css">
    <title>Form</title>
</head>
<body class="row vh-100 d-flex justify-content-center">
    <div class="container p-5">
        <h1 class="text-white text-center">Table Data</h1>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col"># ID</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">Actions</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($data as $i){ ?>
                    <tr>
                        <th scope="row"> <?php echo $i['id']; ?>        </th>
                        <td>             <?php echo $i['email']; ?>     </td>
                        <td>             <?php echo $i['password']; ?>  </td>
                        <td> <a class="btn btn-primary" href="edit.php?id=<?php echo $i['id']; ?>">Edit</a> </td>
                        <td> <a class="btn btn-danger" href="delete.php?id=<?php echo $i['id']; ?>">Delete</a> </td>
                    </tr>
                <?php }?>
            </tbody>
        </table>

        
    </div>









    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>