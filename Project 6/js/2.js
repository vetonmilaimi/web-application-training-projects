function averageMark() {
    var grades = [
        ['Math', 80],
        ['Physics', 75],
        ['English', 85],
        ['History', 95]
    ];

    var total = 0;
    for (var i = 0; i < grades.length; i++) {
        total += grades[i][1];
    }

    var avg = total / grades.length;

    var grade = '';

    if (avg < 59) {
        grade = 'E';
    } else if (avg < 69) {
        grade = 'D';
    } else if (avg < 79) {
        grade = 'C';
    } else if (avg < 89) {
        grade = 'B';
    } else if (avg <= 100) {
        grade = 'A';
    }

    var display = document.querySelector('#display');
    display.innerHTML = 'The grade is: ' + grade;

    // for (var i = 0; i < grades.length; i++) {
    //     console.log(grades[i][0]);
    // }
}

averageMark();