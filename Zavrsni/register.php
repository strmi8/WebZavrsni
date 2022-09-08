<?php
include_once './spoj.php';
session_start();
$username = $email = $pwd = "";
$status = true;
$error = "";

if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $pwd = $_POST['password'];

    $hashed_password = password_hash($pwd, PASSWORD_DEFAULT);

    $userExists = "SELECT * FROM users WHERE name='$username'";
    $doesExist = mysqli_query($conn, $userExists);
    if (mysqli_num_rows($doesExist) > 0) {
        $status = false;
        $error="Name already taken";
    }
    if ($status) {
        $query = "INSERT INTO users (name, password, email, role) VALUES ('$username', '$hashed_password', '$email', 'user')";
        $results = mysqli_query($conn, $query);
        if (!$results) {
            printf("Error message: %s\n", $conn->error);
        }
        header('Location: ./login.html');
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="static/zavrsni/register.css">
</head>
    <body>
        <section>
            <div class="form-container">
                    <h1>Register</h1>
            <form action="" method="post">
                <div class="control">
                    <label for="name">Name</label>
                    <input type="text" id="name" maxlength="20" name="username">
                </div>
                <div class="control">
                    <label for="psw">Password</label>
                    <input type="password" id="psw" name="password">
                </div>
                <div class="control">
                    <label for="Email">E-mail</label>
                    <input type="email" id="Email" maxlength="50" name="email">
                </div>
                <span>
                    <input type="checkbox"> Remember me</span>
                <div class="control">
                    <input type="submit" class="btn" value="Sign up" name="register">
                </div>
                <div class ="control" style="text-align: center; color: red;">
                    <p><?php
                        echo $error;
                    ?></p>
                    
                </div>
            </form>
            </div>
        </section>
    </body>
</html>

