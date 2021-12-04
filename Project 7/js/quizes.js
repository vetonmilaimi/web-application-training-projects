function answerValidation() {
    var first1 = document.getElementById('first-1');
    var second1 = document.getElementById('second-1');
    var third1 = document.getElementById('third-1');

    var first2 = document.getElementById('first-2');
    var second2 = document.getElementById('second-2');
    var third2 = document.getElementById('third-2');

    var first3 = document.getElementById('first-3');
    var second3 = document.getElementById('second-3');
    var third3 = document.getElementById('third-3');

    var first4 = document.getElementById('first-4');
    var second4 = document.getElementById('second-4');
    var third4 = document.getElementById('third-4');

    var first5 = document.getElementById('first-5');
    var second5 = document.getElementById('second-5');
    var third5 = document.getElementById('third-5');

    var unAnsweredValidation = (first1.checked || second1.checked || third1.checked) 
                            && (first2.checked || second2.checked || third2.checked) 
                            && (first3.checked || second3.checked || third3.checked) 
                            && (first4.checked || second4.checked || third4.checked)
                            && (first5.checked || second5.checked || third5.checked);


    if(!unAnsweredValidation) {
        alert("Please Answer all the questions");
    } else {
        var points = [];

        if (first1.checked) {
            points.push(0);
        } 
        if (second1.checked) {
            points.push(1);
        } 
        if (third1.checked) {
            points.push(0);
        }


        if (first2.checked) {
            points.push(1);
        } 
        if (second2.checked) {
            points.push(0);
        } 
        if (third2.checked) {
            points.push(0);
        }


        if (first3.checked) {
            points.push(0);
        } 
        if (second3.checked) {
            points.push(0);
        } 
        if (third3.checked) {
            points.push(1);
        }


        if (first4.checked) {
            points.push(1);
        } 
        if (second4.checked) {
            points.push(0);
        } 
        if (third4.checked) {
            points.push(0);
        }


        if (first5.checked) {
            points.push(0);
        } 
        if (second5.checked) {
            points.push(1);
        } 
        if (third5.checked) {
            points.push(0);
        }

        var sumLength = null;
        for (let i = 0; i < points.length; i++) {
            sumLength += points[i];
        }


        var displayScoreLength = document.getElementsByClassName("display-score").length;

        if (displayScoreLength < 1) {
            var displayScore = document.createElement('h1');
            displayScore.style.backgroundColor = "Red";
            displayScore.style.color = "aqua";
            displayScore.style.textAlign = "center";

            var text = document.createTextNode(`Score: ${sumLength}/5`);

            displayScore.appendChild(text);

            var position = document.getElementById("display");

            displayScore.className = "display-score";

            position.appendChild(displayScore);
        }

        sumLength = 0;

        var form = document.getElementsByTagName("form")[0];

        form.addEventListener("submit", (event) => {
            event.preventDefault();

            var retryButtonLength = document.querySelectorAll(".retry-button").length;

            if (retryButtonLength < 1){
                var button = document.createElement('button');
                var retry = button.type = "reset";
                retry = button.className = "retry-button";

                var text = document.createTextNode(`Retry`);
                button.appendChild(text);
                var position1 = document.getElementById("buttons");
                position1.appendChild(button);

                form.addEventListener("reset", () => {
                    location.reload();
                })
            }
        });
    }
}
