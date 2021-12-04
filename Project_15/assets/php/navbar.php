<?php

if(!isset($_SESSION)) {
    session_start();
}

?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="index.php">Project 15</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
            </li>

            <?php 
                if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
                    echo '
                    <li class="nav-item">
                        <a class="nav-link" href="#">Create a Post</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Log Out</a>
                    </li>

                    ';
                    
                    if(isset($_SESSION["is_admin"]) && $_SESSION["is_admin"] === true) {
                        echo '
                            <li class="nav-item">
                                <a class="nav-link" href="admin/admin.php">Admin Page</a>
                            </li>
                        ';
                    }

                } else {
                    echo '
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="register.php">Register</a>
                        </li>
                    ';
                }
            ?>
 
        </ul>
        <form class="form-inline">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>
