<?php
include_once "connect.php";
if (isset($_POST['submit'])) {
    $name   = $_POST['name'];
    $email  = $_POST['email'];
    $mobile = $_POST['mobile'];
    $pwd    = $_POST['password'];

    $sql_query = "INSERT into crud (Name,Email,Mobile,Password) values ('$name', '$email', '$mobile', '$pwd');";
    $result    = mysqli_query($connect, $sql_query);

    if ($result) {
        header("location: ../CRUD%20Operations/display.php");
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
            <input type="text" class="form-control"  placeholder="Enter your full name" name="name" autocomplete="off">
        </div>

        <div class="form-group">
            <label><strong>Email</strong></label>
            <input type="email" class="form-control"  placeholder="Enter your email" name="email" autocomplete="off">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>

        <div class="form-group">
            <label><strong> mobile</strong></label>
            <input type="number" class="form-control"  placeholder="Enter your mobile number" name="mobile" autocomplete="off">
        </div>

        <div class="form-group">
            <label><strong>Password</strong></label>
            <input type="password" class="form-control"  placeholder="Enter your password"  name="password" autocomplete="off">
        </div>
    
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>

    </div>
    
  </body>
</html>
