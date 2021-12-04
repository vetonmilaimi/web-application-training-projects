var pointsArray = [];
var sum = 0;

function addPoints(id) {
    var button = document.getElementById(id);
    pointsArray.push(parseInt(button.dataset.points));
}

function sumPoints() {

    var form = document.getElementsByTagName("form")[0];

    for (var i = 0; i < pointsArray.length; i++) {
        sum += pointsArray[i];
    }

    var pointsDisplay = document.createElement("h2");
    var text = document.createTextNode(`You have: ${sum} ${sum > 1 ? 'points' : 'point'}`);
    pointsDisplay.appendChild(text);
    var position = document.getElementById("displayPoints");
    position.appendChild(pointsDisplay);

    document.getElementById("endButton").disabled = true;

    var retrybtn = document.createElement("input");
    retrybtn.innerHTML = "Retry";
    retrybtn.setAttribute("type", "reset");
    retrybtn.setAttribute("value", "Reset");
    retrybtn.setAttribute("class", "btn btn-danger");
    position.appendChild(retrybtn);

    var continueButton = document.createElement("button");
    continueButton.innerHTML = "Continue";
    continueButton.setAttribute("formaction", "quiz-info.php");
    continueButton.setAttribute("class", "btn btn-outline-warning");
    position.appendChild(continueButton);

    var progressbar = document.getElementById("progressBar");
    progressbar.style.width = `${(sum/33) * 100}%`;


    form.addEventListener("reset", () => {
        location.reload();
    })
}

function disableButtons(question) {
    var buttons = document.querySelectorAll(`button[id^=${question}]`);
    for (var i = 0; i < buttons.length; i++) {
        buttons[i].disabled = true;
    }
}