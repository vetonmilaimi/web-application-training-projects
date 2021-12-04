<?php
$IPATH = $_SERVER["DOCUMENT_ROOT"] . "/PROJECT_15/assets/php/";
include_once "../config.php";

if (!isset($_SESSION)) {
    session_start();
}




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php include($IPATH . "bootstrap.php"); ?>

    <style>
        * {
            text-align: center;
            color: #fff;
        }

        body {
            background-color: #323232;
        }

        button {
            color: black;   
        }
    </style>

    <title>Users administration</title>
</head>

<body>
    <div class="container-fluid">
        <h1>Users administration</h1>

        <h2>Users</h2>

       
        <?php

        $stmt = $pdo->prepare(
            "SELECT * FROM users"
        );
        $stmt->execute();
        $users = $stmt->fetchAll();
        foreach ($users as $user) {
        ?>
            <table>
                <tbody>
                    <?php echo $user['ID'] . " " . $user['FirstName'] . " " . $user['LastName'] . " " . $user['email'] . " " . $user['username'] .  " " . $user['is_admin'];
                        echo '
                        <form method="post" action="delete.php" data-id = "'. $user["ID"] .'">
                            <button type="submit" name="delete">Delete</button>
                        </form>
                        ';
                    ?>
                </tbody>
            </table>
        <?php
        }
        ?>
        </tbody>
        </table>

        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">

        </form>

    </div>

</body>

</html>