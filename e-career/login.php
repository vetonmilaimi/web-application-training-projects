<?php

if(!isset($_SESSION)) {
    session_start();
}

if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']) {
    header("Location: index.php");
    exit;
}

$IPATH = $_SERVER["DOCUMENT_ROOT"] . "/components/";

include_once("config/pdo.php");

$username = $password = "";
$username_err = $password_err = "";

if($_SERVER["REQUEST_METHOD"] == "POST") {
    if(empty(trim($_POST['inputUsername']))) {
        $username_err = "Please enter a username.";
    } else {
        $username = trim($_POST['inputUsername']);
    }

    if(empty(trim($_POST['inputPassword']))) {
        $password_err = "Please enter a password.";
    } else {
        $password = trim($_POST['inputPassword']);
    }

    if(empty($username_err) && empty($password_err)) {
        $sql = "SELECT id, username, password FROM users WHERE username = :username";

        if($stmt = $pdo->prepare($sql)) {
            $stmt->bindParam(":username", $param_username, PDO::PARAM_STR);

            $param_username = trim($_POST['inputUsername']);
            if($stmt->execute()) {
                if($stmt->rowCount() == 1) {
                    if($row = $stmt->fetch()) {
                        $id = $row['id'];
                        $username = $row['username'];
                        $hashed_password = $row['password'];
                        if(password_verify($password, $hashed_password)) {
                            session_start();

                            $_SESSION['loggedin'] = true;
                            $_SESSION['id'] = $id;
                            $_SESSION['username'] = $username;

                            header("Location: index.php");
                        } else {
                            $password_err = "The password that you entered is incorrect.";
                            $_SESSION['loggedin'] = false;
                        }
                    }
                } else {
                    $username_err = "No account found with this username.";
                }
            } else {
                echo "Ooppsss something went wrong, please try again later.";
            }
        }
        unset($stmt);
    }
    unset($pdo);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php include($IPATH . "bootstrap.php"); ?>

    <link rel="stylesheet" href="style/login.css">

    <title>Login</title>
</head>

<body>

    <main class="container-fluid">
        <h1 class="page-header">Login</h1>
        <p>If you have an account please fill the form below to login.</p>

        <div class="row">
            <div class="col-md-6" style="margin: 15px 0;">
                <img class="img-responsive" src="images/login-image.jpg" width="100%">
            </div>

            <div class="col-md-6">
                <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
                    <div class="form-group row">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="inputUsername" id="inputUsername" placeholder="Username">
                            <small class="help-block text-danger"><?php echo $username_err; ?></small>
                        </div>
                        <div class="col-sm-1"></div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" name="inputPassword" id="inputPassword" placeholder="Password">
                            <small class="help-block text-danger"><?php echo $password_err; ?></small>
                        </div>
                        <div class="col-sm-1"></div>
                    </div>
                    <div class="form-group row justify-content-center">
                        <button type="submit" class="btn btn-primary" value="login">Sign in</button>
                    </div>
                </form>
                <br>
                <hr>
                <div style="text-align: center">
                    <p>If you don't have an account please <a href="register.php" style="color: #fff">Register</a> </p>
                </div>
            </div>
        </div>

    </main>

</body>

</html>