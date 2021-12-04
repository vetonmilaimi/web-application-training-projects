<?php
if (!isset($_SESSION)) {
    session_start();
}
?>

<nav class="topnav">
    <ul class="nav justify-content-end sticky-top">

        <li class="nav-item">
            <a class="nav-link" href="#">Home</a>
        </li>

        <?php
        if (!(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)) {
            echo "
                    <li class='nav-item'>
                        <a class='nav-link' href='../login.php'> Login</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link' href='../register.php'> Register</a>
                    </li>
                ";
        } else {
            echo "
                    <li class='nav-item'>
                        <a class='nav-link'href='../myprofile.php'> My Profile</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link'href='../logout.php'> Logout</a>
                    </li>
                ";
        }
        ?>
    </ul>

    
    </nav>