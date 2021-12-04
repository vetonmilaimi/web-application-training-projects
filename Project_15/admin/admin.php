<?php
    session_start();

    include_once("../config.php");

    

    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
        if(isset($_SESSION["is_admin"]) && $_SESSION["is_admin"] === true) {
            echo '
                <ul>
                    <li>
                        <a href="../index.php" >Home</a>
                    </li>
                    <li>
                        <a href="users.php">Users</a>
                    </li>
                </ul>
            ';

        } else {
            header("Location: ../login.php");
        }
    } else {
        echo 'You need to <a href="../login.php">login</a> first!';
    }

?>