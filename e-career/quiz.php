<?php
include_once("config/pdo.php");

if (!isset($_SESSION)) {
    session_start();
}

if (!(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == true)) {
    header("Location: login.php");
    exit;
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <link rel="stylesheet" href="style/quiz.css">

    <title>Quiz e-career</title>
</head>

<body>

    <form action="">
        <main class="container-fluid bg-primary">
            <h1>Quiz e-career</h1>

            <br>
            <hr>
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="quiz-info">Click just once</h2>
                    <h4 class="quiz-info-2">

                        *Not - 0 Point
                        <br>

                        *A little - 1 Point
                        <br>

                        *Yes - 2 Points
                        <br>

                        *Yes Sure - 3 Points
                    </h4>
                </div>
            </div>

            <hr>

            <div id="question-1">
                <p class="question-title">1. Are you social?</p>
                <form id="form-question-1">
                    <button class="btn btn-success" id="first-choice-1" data-points="0" onclick="addPoints('first-choice-1'); disableButtons('first')">0</button>
                    <button class="btn btn-success" id="first-choice-2" data-points="1" onclick="addPoints('first-choice-2'); disableButtons('first')">1</button>
                    <button class="btn btn-success" id="first-choice-3" data-points="2" onclick="addPoints('first-choice-3'); disableButtons('first')">2</button>
                    <button class="btn btn-success" id="first-choice-4" data-points="3" onclick="addPoints('first-choice-4'); disableButtons('first')">3</button>
                </form>
            </div>

            <div id="question-2">
                <p class="question-title">2. Do you like to work with people?</p>
                <form id="form-question-2">
                    <button class="btn btn-success" id="second-choice-1" data-points="0" onclick="addPoints('second-choice-1'); disableButtons('second')">0</button>
                    <button class="btn btn-success" id="second-choice-2" data-points="1" onclick="addPoints('second-choice-2'); disableButtons('second')">1</button>
                    <button class="btn btn-success" id="second-choice-3" data-points="2" onclick="addPoints('second-choice-3'); disableButtons('second')">2</button>
                    <button class="btn btn-success" id="second-choice-4" data-points="3" onclick="addPoints('second-choice-4'); disableButtons('second')">3</button>
                </form>
            </div>

            <div id="question-3">
                <p class="question-title">3. Do you like to work with people?</p>
                <form id="form-question-3">
                    <button class="btn btn-success" id="third-choice-1" data-points="0" onclick="addPoints('third-choice-1'); disableButtons('third')">0</button>
                    <button class="btn btn-success" id="third-choice-2" data-points="1" onclick="addPoints('third-choice-2'); disableButtons('third')">1</button>
                    <button class="btn btn-success" id="third-choice-3" data-points="2" onclick="addPoints('third-choice-3'); disableButtons('third')">2</button>
                    <button class="btn btn-success" id="third-choice-4" data-points="3" onclick="addPoints('third-choice-4'); disableButtons('third')">3</button>
                </form>
            </div>

            <div id="question-4">
                <p class="question-title">4. Do you like to work with people?</p>
                <form id="form-question-4">
                    <button class="btn btn-success" id="fourth-choice-1" data-points="0" onclick="addPoints('fourth-choice-1'); disableButtons('fourth')">0</button>
                    <button class="btn btn-success" id="fourth-choice-2" data-points="1" onclick="addPoints('fourth-choice-2'); disableButtons('fourth')">1</button>
                    <button class="btn btn-success" id="fourth-choice-3" data-points="2" onclick="addPoints('fourth-choice-3'); disableButtons('fourth')">2</button>
                    <button class="btn btn-success" id="fourth-choice-4" data-points="3" onclick="addPoints('fourth-choice-4'); disableButtons('fourth')">3</button>
                </form>
            </div>

            <div id="question-5">
                <p class="question-title">5. Do you like to work with people?</p>
                <form id="form-question-5">
                    <button class="btn btn-success" id="fifth-choice-1" data-points="0" onclick="addPoints('fifth-choice-1'); disableButtons('fifth')">0</button>
                    <button class="btn btn-success" id="fifth-choice-2" data-points="1" onclick="addPoints('fifth-choice-2'); disableButtons('fifth')">1</button>
                    <button class="btn btn-success" id="fifth-choice-3" data-points="2" onclick="addPoints('fifth-choice-3'); disableButtons('fifth')">2</button>
                    <button class="btn btn-success" id="fifth-choice-4" data-points="3" onclick="addPoints('fifth-choice-4'); disableButtons('fifth')">3</button>
                </form>
            </div>

            <div id="question-6">
                <p class="question-title">6. Do you like to work with people?</p>
                <form id="form-question-6">
                    <button class="btn btn-success" id="sixth-choice-1" data-points="0" onclick="addPoints('sixth-choice-1'); disableButtons('sixth')">0</button>
                    <button class="btn btn-success" id="sixth-choice-2" data-points="1" onclick="addPoints('sixth-choice-2'); disableButtons('sixth')">1</button>
                    <button class="btn btn-success" id="sixth-choice-3" data-points="2" onclick="addPoints('sixth-choice-3'); disableButtons('sixth')">2</button>
                    <button class="btn btn-success" id="sixth-choice-4" data-points="3" onclick="addPoints('sixth-choice-4'); disableButtons('sixth')">3</button>
                </form>
            </div>

            <div id="question-7">
                <p class="question-title">7. Do you like to work with people?</p>
                <form id="form-question-7">
                    <button class="btn btn-success" id="seventh-choice-1" data-points="0" onclick="addPoints('seventh-choice-1'); disableButtons('seventh')">0</button>
                    <button class="btn btn-success" id="seventh-choice-2" data-points="1" onclick="addPoints('seventh-choice-2'); disableButtons('seventh')">1</button>
                    <button class="btn btn-success" id="seventh-choice-3" data-points="2" onclick="addPoints('seventh-choice-3'); disableButtons('seventh')">2</button>
                    <button class="btn btn-success" id="seventh-choice-4" data-points="3" onclick="addPoints('seventh-choice-4'); disableButtons('seventh')">3</button>
                </form>
            </div>

            <div id="question-8">
                <p class="question-title">8. Do you like to work with people?</p>
                <form id="form-question-8">
                    <button class="btn btn-success" id="eighth-choice-1" data-points="0" onclick="addPoints('eighth-choice-1'); disableButtons('eighth')">0</button>
                    <button class="btn btn-success" id="eighth-choice-2" data-points="1" onclick="addPoints('eighth-choice-2'); disableButtons('eighth')">1</button>
                    <button class="btn btn-success" id="eighth-choice-3" data-points="2" onclick="addPoints('eighth-choice-3'); disableButtons('eighth')">2</button>
                    <button class="btn btn-success" id="eighth-choice-4" data-points="3" onclick="addPoints('eighth-choice-4'); disableButtons('eighth')">3</button>
                </form>
            </div>

            <div id="question-9">
                <p class="question-title">9. Do you like to work with people?</p>
                <form id="form-question-9">
                    <button class="btn btn-success" id="ninth-choice-1" data-points="0" onclick="addPoints('ninth-choice-1'); disableButtons('ninth')">0</button>
                    <button class="btn btn-success" id="ninth-choice-2" data-points="1" onclick="addPoints('ninth-choice-2'); disableButtons('ninth')">1</button>
                    <button class="btn btn-success" id="ninth-choice-3" data-points="2" onclick="addPoints('ninth-choice-3'); disableButtons('ninth')">2</button>
                    <button class="btn btn-success" id="ninth-choice-4" data-points="3" onclick="addPoints('ninth-choice-4'); disableButtons('ninth')">3</button>
                </form>
            </div>

            <div id="question-10">
                <p class="question-title">10. Do you like to work with people?</p>
                <form id="form-question-10">
                    <button class="btn btn-success" id="tenth-choice-1" data-points="0" onclick="addPoints('tenth-choice-1'); disableButtons('tenth')">0</button>
                    <button class="btn btn-success" id="tenth-choice-2" data-points="1" onclick="addPoints('tenth-choice-2'); disableButtons('tenth')">1</button>
                    <button class="btn btn-success" id="tenth-choice-3" data-points="2" onclick="addPoints('tenth-choice-3'); disableButtons('tenth')">2</button>
                    <button class="btn btn-success" id="tenth-choice-4" data-points="3" onclick="addPoints('tenth-choice-4'); disableButtons('tenth')">3</button>
                </form>
            </div>

            <div id="question-11">
                <p class="question-title">11. Do you like to work with people?</p>
                <form id="form-question-11">
                    <button class="btn btn-success" id="eleventh-choice-1" data-points="0" onclick="addPoints('eleventh-choice-1'); disableButtons('eleventh')">0</button>
                    <button class="btn btn-success" id="eleventh-choice-2" data-points="1" onclick="addPoints('eleventh-choice-2'); disableButtons('eleventh')">1</button>
                    <button class="btn btn-success" id="eleventh-choice-3" data-points="2" onclick="addPoints('eleventh-choice-3'); disableButtons('eleventh')">2</button>
                    <button class="btn btn-success" id="eleventh-choice-4" data-points="3" onclick="addPoints('eleventh-choice-4'); disableButtons('eleventh')">3</button>
                </form>
            </div>


            <hr>
            <br>
            <button class="btn btn-outline-warning" id="endButton" onclick="sumPoints()">Done</button>

            <div class="progress">
                <div id="progressBar" class="progress-bar bg-success" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div id="displayPoints"></div>
        </main>
    </form>

    <script src="script/quiz.js"></script>
</body>

</html>