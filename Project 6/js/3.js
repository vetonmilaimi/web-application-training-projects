var answer = prompt('Write a number form 0 to 100');

while (!(answer >= 0 && answer <= 100)) {
    alert('Try Again...!');
    answer = prompt('Try again to write a number from 0 to 100.!');
}

document.write(answer);