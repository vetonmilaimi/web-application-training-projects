<?php

$IPATH = $_SERVER["DOCUMENT_ROOT"] . "/PROJECT_15/assets/php/";

include_once "config.php";

$username = $password = $confirm_password = "";
$username_err = $email_err = $password_err = $confirm_password_err = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Email Validate
    if (empty(trim($_POST['inputUsername'])) || empty(trim($_POST['inputEmail']))) {
        $email_err = $username_err = "Please fill field";
    } else {
        $sql = "SELECT ID FROM users WHERE email = :email";

        if ($stmt = $pdo->prepare($sql)) {
            $stmt->bindParam(":email", $param_email, PDO::PARAM_STR);

            $param_email = trim($_POST["inputEmail"]);

            if ($stmt->execute()) {
                if ($stmt->rowCount() == 1) {
                    $email_err = "This email is alredy taken.";
                } else {
                    $email = trim($_POST["inputEmail"]);
                }
            } else {
                echo "Ooops! Something went wrong. Please try again later.";
            }

            unset($stmt);
        }
    }


    // Password Validate
    if (empty(trim($_POST["inputPassword"]))) {
        $password_err = "Please enter a password.";
    } elseif (strlen(trim($_POST["inputPassword"])) < 7) {
        $password_err = "Password must have atleast 7 character.";
    } else {
        $password = trim($_POST["inputPassword"]);
    }

    // Confirm Password Validate
    if (empty(trim($_POST["inputConfirmPassword"]))) {
        $confirm_password_err = "Please confirm password";
    } else {
        $confirm_password = trim($_POST["inputConfirmPassword"]);
        if (empty($password_err) && ($password != $confirm_password)) {
            $confirm_password_err = "Password did not match.";
        }
    }

    // Check input errors
    if (empty($username_err) && empty($password_err) && empty($confirm_password_err) && empty($email_err)) {
        $sql = "INSERT INTO users (FirstName, LastName, username, email, password) VALUES (:firstname, :lastname, :username, :email, :password)";

        if ($stmt = $pdo->prepare($sql)) {
            $stmt->bindParam(":firstname", $param_firstname, PDO::PARAM_STR);
            $stmt->bindParam(":lastname", $param_lastname, PDO::PARAM_STR);
            $stmt->bindParam(":email", $param_email, PDO::PARAM_STR);
            $stmt->bindParam(":username", $param_username, PDO::PARAM_STR);
            $stmt->bindParam(":password", $param_password, PDO::PARAM_STR);

            $param_firstname = trim($_POST["inputFirstName"]);
            $param_lastname = trim($_POST["inputLastName"]);
            $param_email = $email;
            $param_username = trim($_POST["inputUsername"]);
            $param_password = password_hash($password, PASSWORD_DEFAULT);

            if ($stmt->execute()) {
                header("location: profile_picture/upload.php");
            } else {
                echo "Something went wrong. Please try again later";
            }

            unset($stmt);
        }

        unset($pdo);
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php include($IPATH . "bootstrap.php"); ?>

    <style>
        input {
            max-width: 80%;
        }
    </style>

    <title>Document</title>
</head>

<?php include($IPATH . "navbar.php"); ?>

<body>
    <div class="container ">
        <div style="text-align: center">
            <h2>Sign Up</h2>
            <p>Please fill this form to Sign Up</p>
        </div>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
            <div class="form-group row">
                <label for="inputFirstName" class="col-sm-2">First Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="inputFirstName" id="inputFirstName" placeholder="First Name" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputLastName" class="col-sm-2">Last Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="inputLastName" id="inputLastName" placeholder="Last Name" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputUsername" class="col-sm-2">Username</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="inputUsername" id="inputUsername" placeholder="Username" required>
                    <small class="help-block text-danger"><?php echo $username_err; ?></small>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail" class="col-sm-2">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" name="inputEmail" id="inputEmail" placeholder="Email" required>
                    <small class="help-block text-danger"><?php echo $email_err; ?></small>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2">Password</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" name="inputPassword" id="inputPassword" placeholder="Password" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputConfirmPassword" class="col-sm-2">Confirm Password</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" name="inputConfirmPassword" id="inputConfirmPassword" placeholder="Confirm Password" required>
                    <small class="help-block text-danger"><?php echo $confirm_password_err; ?></small>
                </div>
            </div>
            <br>
            <div class="form-group row justify-content-center">
                <button type="submit" class="btn btn-primary" value="register">Register</button>
                <button type="reset" class="btn btn-danger">Reset</button>
            </div>
        </form>
        <br>
        <hr>
        <div style="text-align: center">
            <p>If you have an account please <a href="login.php">Login</a> </p>
        </div>
    </div>

</body>

</html>