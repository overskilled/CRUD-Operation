<?php
include_once "connect.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Display Information</title>
</head>
<body>
    <div class="container my-5">
            <button class="btn btn-primary"><a href="user.php" class="text-light">Add a user</a>
        </button><br><br>
        <table class="table">
        <thead class="thead-dark">
            <tr>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Mobile</th>
            <th scope="col">Password</th>
            <th scope="col">operations</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql_query = "SELECT * FROM crud";
            $result    = mysqli_query($connect, $sql_query);
            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $id     = $row['Id'];
                    $name   = $row['Name'];
                    $email  = $row['Email'];
                    $mobile = $row['Mobile'];
                    $pwd    = $row['Password'];

                    echo '<tr>
                    <th scope="row">'.$name.'</th>
                    <td>'.$email.'</td>
                    <td>'.$mobile.'</td>
                    <td>'.$pwd.'</td>
                    <td>
                        <button class="btn btn-primary"><a href="update.php?updateid='.$id.'"
                        class="text-light">Update</a></button>
                        <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'"
                        class="text-light">Delete</a></button>
                    </td>
                    </tr>';
                    
                }
            }
        ?>
        </tbody>
        
        </table>
    </div>

</body>
</html>
