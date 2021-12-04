<?php
$IPATH = $_SERVER["DOCUMENT_ROOT"] . "/components/";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php include($IPATH . "bootstrap.php"); ?>

    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../style/about.css">
    <link rel="stylesheet" href="../style/topnav.css">
    <link rel="stylesheet" href="../style/footer.css">
    <link rel="stylesheet" href="../style/navbar.css">

    <title>HOME</title>
</head>

<body>

    <header>
        <?php include($IPATH . "topnav.php"); ?>
        <?php include($IPATH . "nav.php"); ?>
    </header>

    <main class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="text-info">About Us</h1>
                <p class="text-muted">Please inform about us below.</p>
            </div>
        </div>

        <hr>

        <div class="row">
            <div class="col-md-6">
                <h2 class="text-dark">Our Vision</h2>
                <p class="text-muted paragraph-start">
                    Our vision is to be a great place when you can find your dream Job and a place when we can orient you for your career. <br>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corrupti voluptates dignissimos id iusto, sunt molestiae omnis voluptas incidunt aliquam quo ipsam temporibus commodi tempora rem dicta qui similique nam distinctio? <br>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, magnam soluta possimus consectetur aliquid, facere voluptates, sint dolorum inventore placeat ut! Unde minima maiores assumenda inventore at fugiat neque obcaecati. <br>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum possimus animi saepe odio, at perferendis eum officiis ipsam ullam! Voluptates ipsa eligendi tempora possimus explicabo voluptatem neque ullam, beatae commodi.
                </p>
            </div>
            <div class="col-md-6">
                <img src="../images/our_vision.jpg" alt="" width="100%">
            </div>
        </div>

        <hr>

        <div class="row">
            <div class="col-md-6">
                <img src="../images/our_approach.jpg" alt="" width="100%">
            </div>
            <div class="col-md-6">
                <h2 class="text-dark">Our Approach</h2>
                <p class="text-muted paragraph-start">
                    Our Approach is to be a great place when you can find your dream Job and a place when we can orient you for your career. <br>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corrupti voluptates dignissimos id iusto, sunt molestiae omnis voluptas incidunt aliquam quo ipsam temporibus commodi tempora rem dicta qui similique nam distinctio? <br>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, magnam soluta possimus consectetur aliquid, facere voluptates, sint dolorum inventore placeat ut! Unde minima maiores assumenda inventore at fugiat neque obcaecati. <br>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum possimus animi saepe odio, at perferendis eum officiis ipsam ullam! Voluptates ipsa eligendi tempora possimus explicabo voluptatem neque ullam, beatae commodi.
                </p>
            </div>
        </div>

        <hr>

        <div class="row">
            <div class="col-md-6">
                <h2 class="text-dark">Our Mission</h2>
                <p class="text-muted paragraph-start">
                    Our mission is to be a great place when you can find your dream Job and a place when we can orient you for your career. <br>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corrupti voluptates dignissimos id iusto, sunt molestiae omnis voluptas incidunt aliquam quo ipsam temporibus commodi tempora rem dicta qui similique nam distinctio? <br>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, magnam soluta possimus consectetur aliquid, facere voluptates, sint dolorum inventore placeat ut! Unde minima maiores assumenda inventore at fugiat neque obcaecati. <br>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum possimus animi saepe odio, at perferendis eum officiis ipsam ullam! Voluptates ipsa eligendi tempora possimus explicabo voluptatem neque ullam, beatae commodi.
                </p>
            </div>
            <div class="col-md-6">
                <img src="../images/our_mission.jpg" alt="" width="100%">
            </div>
        </div>

    </main>

    <footer>
        <?php include($IPATH . "footer.php"); ?>
    </footer>


    <script src="script/bootstrap.js"></script>
    <script src="script/scrollTop.js"></script>
</body>

</html>