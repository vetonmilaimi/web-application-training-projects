<?php
$IPATH = $_SERVER["DOCUMENT_ROOT"] . "/components/";

$message_sent = false;
if (isset($_POST['email']) && $_POST['email'] != '') {

    if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {


        $userName = $_POST['name'];
        $userEmail = $_POST['email'];
        $message = $_POST['message'];

        $to = "cc445008ec9b9de05df853525d8bb117m";
        $body = "";

        $body .= "From: " . $userName . "\r\n";
        $body .= "Email: " . $userEmail . "\r\n";
        $body .= "Message: " . $message . "\r\n";

        // mail($to, "Contact", $body);

        $message_sent = true;
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php include($IPATH . "bootstrap.php"); ?>

    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../style/contact.css">
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
            <div class="col-md-6" style="margin: 15px 0;">
                <div class="card bg-light mb-3">
                    <div class="card-header bg-success text-white text-uppercase"><i class="fa fa-home"></i> Address</div>
                    <div class="card-body">
                        <p>3 / III / MATI 1</p>
                        <p>10000 Pristina</p>
                        <p>Kosovo</p>
                        <p>Email : veton.milaimi@e-career.com</p>
                        <p>Tel. +383 43 932 432</p>
                        <p>Tel. +383 43 123 456</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6" style="margin: 15px 0;">
                <?php
                if ($message_sent) :
                ?>

                    <h3>Thank's, we'll be contacting you...</h3>

                <?php
                else :
                ?>
                    <form action="contact.php" method="POST">
                        <div class="card border-primary rounded-0">
                            <div class="card-header p-0">
                                <div class="bg-info text-white text-center py-2">
                                    <h3><i class="fa fa-envelope"></i> Contact with us</h3>
                                    <p class="m-0">If you want to contact with us please fill the form below</p>
                                </div>
                            </div>
                            <div class="card-body p-3">

                                <!--Body-->
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                                        </div>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Your full name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-envelope text-info"></i></div>
                                        </div>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Your email address">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-comment text-info"></i></div>
                                        </div>
                                        <textarea class="form-control" id="message" name="message" placeholder="Your message"></textarea>
                                    </div>
                                </div>

                                <div class="text-center">
                                    <input type="submit" value="Send" class="btn btn-info btn-block rounded-0 py-2">
                                </div>
                            </div>

                        </div>
                    </form>

                <?php
                endif;
                ?>
            </div>

        </div>

        <div class="row">
            <div class="col-sm-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d46940.210038582816!2d21.12370786360921!3d42.66637476673427!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ssq!2s!4v1606402702033!5m2!1ssq!2s" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>

    </main>

    <footer>
        <?php include($IPATH . "footer.php"); ?>
    </footer>


    <script src="../script/contact.js"></script>
    <script src="../script/bootstrap.js"></script>
    <script src="../script/scrollTop.js"></script>
</body>

</html>