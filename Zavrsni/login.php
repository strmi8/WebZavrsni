<?php
include_once './spoj.php';


$message = '';

if(!isset($_SESSION)) { 
    session_start(); 
}

if (count($_POST) > 0 && isset($_POST['login']) && !empty($_POST['name']) && !empty($_POST['password'])) {
    $sql = "select * from users";
    $q = mysqli_query($conn, $sql);
    while ($line = mysqli_fetch_array($q, MYSQLI_ASSOC)) {
        if ($_POST['name'] == $line['name'] && password_verify($_POST['password'], $line['password'])) {
            //$_SESSION['uName'] = $line['username'];
            $_SESSION["site_role"] = $line["role"];
            $_SESSION['userLogged'] = True;
        }
        else {
            $message = 'Invalid login credentials.';
        }
    }

    if(isset($_SESSION['userLogged'])) {
        header("Location: ./pocetna.php");
    }
}?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="static/zavrsni/login.css">
</head>
<body>
    <section>
        <div class="form-container">
            <h1>Login</h1>
        <form action="" method ="post">
            <div class="control">
            <label for="name">Name</label>
            <input type="text" id="name" name="name">
            </div>
            <div class="control">
            <label for="psw">Password</label>
            <input type="password" id="psw" name="password">
            </div>
            <span><input type="checkbox"> Remember me</span>
            <div class="control">
            <input type="submit" class="btn" value="Login" name="login">
            </div>
            <div class ="control" style="text-align: center; color: red;">
                    <p><?php
                        echo $message;
                    ?></p>
                    
                </div>
        </form>
        </div>
    </section>
</body>
</html>
