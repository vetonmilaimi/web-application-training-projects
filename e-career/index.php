<?php
$IPATH = $_SERVER["DOCUMENT_ROOT"] . "/components/";
include_once("config/pdo.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php include($IPATH . "bootstrap.php"); ?>

    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="style/index.css">
    <link rel="stylesheet" href="style/topnav.css">
    <link rel="stylesheet" href="style/footer.css">
    <link rel="stylesheet" href="style/navbar.css">

    <style>
        .parallax {
            /* The image used */
            background-image: url('../images/parallax.jpg');

            /* Full height */
            height: 100%;

            /* Create the parallax scrolling effect */
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>

    <title>HOME</title>
</head>

<body>

    <header>
        <?php include($IPATH . "topnav.php"); ?>
        <?php include($IPATH . "nav.php"); ?>
    </header>

    <main class="container-fluid parallax">
        <h1>Welcome to e-career website</h1>
        <p class="home-info">Here you can find for what job you are and you can find your dream job</p>
        <hr>

        <div class="row" style="margin: 15px 0;">
            <div class="col-sm-12">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="images/slide1.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="images/slide2.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="images/slide3.jpg" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <h2 class="text-white bg-primary p-3">Find some jobs below...</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="card flex-md-row mb-4 shadow-sm h-md-250">
                    <div class="card-body d-flex flex-column align-items-start">
                        <strong class="d-inline-block mb-2 text-success">Customer service team manager</strong>
                        <h6 class="mb-0">
                            <a class="text-dark">$47,500 - $61,800 a year</a>
                        </h6>
                        <div class="mb-1 text-muted small">Nov 11</div>
                        <p class="card-text mb-auto">The Manager, Customer Service will support and participate in the development and management of the Government Services Customer Service team for The Suddath…</p>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#firstJob">
                            Continue reading
                        </button>
                    </div>
                    <img class="card-img-right flex-auto d-none d-lg-block" alt="Thumbnail [200x250]" src="//placeimg.com/250/250/nature" style="width: 200px; height: 250px;">
                </div>
            </div>

            <div class="col-md-6">
                <div class="card flex-md-row mb-4 shadow-sm h-md-250">
                    <div class="card-body d-flex flex-column align-items-start">
                        <strong class="d-inline-block mb-2 text-success">Customer service team manager</strong>
                        <h6 class="mb-0">
                            <a class="text-dark">$47,500 - $61,800 a year</a>
                        </h6>
                        <div class="mb-1 text-muted small">Nov 11</div>
                        <p class="card-text mb-auto">The Manager, Customer Service will support and participate in the development and management of the Government Services Customer Service team for The Suddath…</p>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#firstJob">
                            Continue reading
                        </button>
                    </div>
                    <img class="card-img-right flex-auto d-none d-lg-block" alt="Thumbnail [200x250]" src="//placeimg.com/250/250/nature" style="width: 200px; height: 250px;">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="card flex-md-row mb-4 shadow-sm h-md-250">
                    <div class="card-body d-flex flex-column align-items-start">
                        <strong class="d-inline-block mb-2 text-success">Customer service team manager</strong>
                        <h6 class="mb-0">
                            <a class="text-dark">$47,500 - $61,800 a year</a>
                        </h6>
                        <div class="mb-1 text-muted small">Nov 11</div>
                        <p class="card-text mb-auto">The Manager, Customer Service will support and participate in the development and management of the Government Services Customer Service team for The Suddath…</p>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#firstJob">
                            Continue reading
                        </button>
                    </div>
                    <img class="card-img-right flex-auto d-none d-lg-block" alt="Thumbnail [200x250]" src="//placeimg.com/250/250/nature" style="width: 200px; height: 250px;">
                </div>
            </div>
            <div class="col-md-6">
                <div class="card flex-md-row mb-4 shadow-sm h-md-250">
                    <div class="card-body d-flex flex-column align-items-start">
                        <strong class="d-inline-block mb-2 text-success">Customer service team manager</strong>
                        <h6 class="mb-0">
                            <a class="text-dark">$47,500 - $61,800 a year</a>
                        </h6>
                        <div class="mb-1 text-muted small">Nov 11</div>
                        <p class="card-text mb-auto">The Manager, Customer Service will support and participate in the development and management of the Government Services Customer Service team for The Suddath…</p>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#firstJob">
                            Continue reading
                        </button>
                    </div>
                    <img class="card-img-right flex-auto d-none d-lg-block" alt="Thumbnail [200x250]" src="//placeimg.com/250/250/nature" style="width: 200px; height: 250px;">
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="firstJob" tabindex="-1" role="dialog" aria-labelledby="firstJobTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="firstJobTitle">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolores quidem perferendis qui at! Iure assumenda, reprehenderit repellat recusandae consectetur dolore consequatur vero, esse excepturi cupiditate dolorem ducimus a porro illum.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Apply Now</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <section class="bg-warning text-center p-5 mt-4">
                    <div class="container p-3">
                        <h3 class="text-danger">SUBSCRIBE to inform for new jobs</h3>
                        <form action="config/subscribe.php" method="Post">
                            <input type="email" name="email" placeholder="Enter Your Email addres">
                            <button type="submit" class="btn btn-primary">Subscribe</button>
                        </form>
                    </div>
                </section>
            </div>
        </div>
    </main>

    <footer>
        <?php include($IPATH . "footer.php"); ?>
    </footer>


    <!-- Modals -->
    <div class="modal fade" id="firstJob" tabindex="-1" role="dialog" aria-labelledby="firstJobTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="firstJobTitle">JOB title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deserunt hic provident ipsam id. Voluptatum officia amet modi quo optio dolorem esse molestias! Sit rerum consectetur fuga, quaerat praesentium veritatis iure.
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolores quidem perferendis qui at! Iure assumenda, reprehenderit repellat recusandae consectetur dolore consequatur vero, esse excepturi cupiditate dolorem ducimus a porro illum.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


    <script src="script/bootstrap.js"></script>
    <script src="script/scrollTop.js"></script>

</body>

</html>