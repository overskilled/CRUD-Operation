<?php
include_once "connect.php";
$id = $_GET['updateid'];
$sql_query = "SELECT * FROM crud WHERE id = $id;";
$result    = mysqli_query($connect, $sql_query);
$row       = mysqli_fetch_assoc($result);
$name   = $row['Name'];
$email  = $row['Email'];
$mobile = $row['Mobile'];
$pwd    = $row['Password'];

if (isset($_POST['submit'])) {
    $name   = $_POST['name'];
    $email  = $_POST['email'];
    $mobile = $_POST['mobile'];
    $pwd    = $_POST['password'];

    $sql_query = "UPDATE crud set id = '$id', name =' $name', email = '$email',
    mobile = '$mobile', password = '$pwd' where id = $id;";
    $result    = mysqli_query($connect, $sql_query);

    if ($result) {
        header("location: ../CRUD%20Operations/display.php?error=none");
    }else {
        die(mysqli_error($connect));
    }
}


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Crud Operations</title>
  </head>
  <body>
    <div class="container my-5">
    <form method="post">

        <div class="form-group">
            <label><strong>Name</strong></label>
            <input type="text" class="form-control"  placeholder="Enter your full name" name="name" autocomplete="off"
            value= <?php echo $name ?>>
        </div>

        <div class="form-group">
            <label><strong>Email</strong></label>
            <input type="email" class="form-control"  placeholder="Enter your email" name="email"
            autocomplete="off" value= <?php echo $email ?>>
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>

        <div class="form-group">
            <label><strong> mobile</strong></label>
            <input type="number" class="form-control"  placeholder="Enter your mobile number" name="mobile"
            autocomplete="off" value= <?php echo $mobile ?>>
        </div>

        <div class="form-group">
            <label><strong>Password</strong></label>
            <input type="password" class="form-control"  placeholder="Enter your password"  name="password"
            autocomplete="off" value= <?php echo $pwd ?>>
        </div>
    
        <button type="submit" class="btn btn-primary" name="submit">Update</button>
    </form>

    </div>
    
  </body>
</html>
