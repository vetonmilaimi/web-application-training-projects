<?php

$IPATH = $_SERVER["DOCUMENT_ROOT"]."/PROJECT_15/assets/php/";

   if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 


if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    if(isset($_SESSION["is_admin"]) && $_SESSION["is_admin"] === true) {
        header("Location: admin/admin.php");
        exit;
    } else {
        header("Location: index.php");
        exit;
    }
} 

include_once "config.php";

$username = $password = "";
$username_err = $password_err = "";

if($_SERVER["REQUEST_METHOD"] == "POST") {

    if(empty(trim($_POST["inputUsername"]))) {
        $username_err = "Please enter a username.";
    } else {
        $username = trim($_POST["inputUsername"]);
    }

    if(empty(trim($_POST["inputPassword"]))) {
        $password_err = "Please enter a password.";
    } else {
        $password = trim($_POST["inputPassword"]);
    }

    if(empty($username_err) && empty($password_err)) {

        $sql = "SELECT ID, UserName, password, is_admin FROM users WHERE UserName = :username";

        if($stmt = $pdo->prepare($sql)) {
            $stmt->bindParam(":username", $param_username, PDO::PARAM_STR);


            $param_username = trim($_POST["inputUsername"]);

            if($stmt->execute()) {
                if($stmt->rowCount() == 1) {
                    if($row = $stmt->fetch()) {
                        $id = $row["ID"];
                        $username = $row["UserName"];
                        $hashed_password = $row["password"];
                        if(password_verify($password, $hashed_password)) {
                            session_start();

                            $_SESSION["loggedin"] = true;
                            $_SESSION["ID"] = $id;
                            $_SESSION["UserName"] = $username;

                            if($row["is_admin"] == true) {
                                $_SESSION["is_admin"] = true;

                                header("Location: admin/admin.php");
                            } else {
                                $_SESSION["is_admin"] = false;
                                header("Location: login.php");
                            }

                        } else {
                            $password_err = "The password you entered was not correct.";
                        }
                    }
                } else {
                    $username_err = "No Accound found with this username.";
                }
            } else {
                echo "Ooopss! Something went wrong. Please try again later.";
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php include($IPATH."bootstrap.php"); ?>
    
    <style>
        input {
            max-width: 80%;
        }
    </style>
    
    <title>Login</title>
</head>

<?php  include($IPATH."navbar.php"); ?>

<body>

    <div class="container">
        <div style="text-align: center">
            <h2>Login</h2>
            <p>Please fill this form to Login.</p>
        </div>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
            <div class="form-group row">
                <label for="inputUsername" class="col-sm-2">Username</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="inputUsername" id="inputUsername" placeholder="Username" >
                    <small class="help-block text-danger"><?php echo $username_err; ?></small>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2">Password</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" name="inputPassword" id="inputPassword" placeholder="Password" >
                    <small class="help-block text-danger"><?php echo $password_err; ?></small>
                </div>
            </div>
            <div class="form-group row justify-content-center">
                <button type="submit" class="btn btn-primary" value="login">Sign in</button>
            </div>
        </form>
        <br>
        <hr>
        <div style="text-align: center">
            <p>If you don't have an account please <a href="register.php">Register</a> </p>
        </div>
    </div>

</body>

</html>