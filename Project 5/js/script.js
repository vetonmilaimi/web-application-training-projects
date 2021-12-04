function findAndReplace() {
    var string1 = document.getElementById('string1').value;
    var search = /covid(-19)?/ig;
    var result = string1.search(search);

    var replaced = string1.replace(search, 'SOMETHING');

    document.getElementById('another').innerHTML = replaced;
}



function psychoanalysis() {
    var feel = document.getElementById('feelings').value;
    var display = document.getElementById('display-feelings');

    console.log(feel);

    if (feel === "good") {
        function good() {
            return 'I\'m very happy';
        }

        display.innerHTML = good();

    } else if (feel == "notgood") {
        function notgood() {
            return 'Try to be very good';
        }

        display.innerHTML = notgood();

    } else if (feel == "bad") {
        function bad() {
            return 'I\'m very sorry, I hope that you will be okay';
        }

        display.innerHTML = bad();

    } else if (feel == "verybad") {
        function verybad() {
            return 'Try to meditate I think you will be okay';
        }

        display.innerHTML = verybad();

    }
}


function sellBook() {

    var bornYear = document.getElementById('born-year').value;
    var today = new Date();
    var thisYear = today.getFullYear();

    var calculateYear = thisYear - bornYear;

    var display = document.getElementById('yourAge');
    display.innerHTML = 'You are ' + calculateYear + ' year\'s old.';

    var bookList = [];

    if (calculateYear > 0 && calculateYear < 16) { // 1 to 15 year
        bookList.push('"The Graveyard Book" by Neil Gaiman - 20$');
        bookList.push('"Matilda" by Adam Gidwitz - 15$');
        bookList.push('"The One and Only Ivan" by Katherine Applegate - 18$');
    } else if (calculateYear > 15 && calculateYear < 19) { // 16 to 18 year  
        bookList.push('"Harry Potter Series" by J.K. Rowling - 54$')
        bookList.push('"Yes, please" by Amy Poehler - 8$');
        bookList.push('"The Bluest Eye" by Toni Morrison - 15$');
        bookList.push('"Beauty Queens" by Libba Bray - 11$');
        bookList.push('"Fahrenheit 451" by Ray Bradbury - 7$');
    } else if (calculateYear > 18) { // +18 year
        bookList.push('"They Both Die at the End" by Adam Silvera - 17$');
        bookList.push('"Just Listen" by Sarah Dessen - 7$');
        bookList.push('"The Kissing Booth" by Beth Reekles - 5$');
        bookList.push('"Hot Dog Girl" by Jennifer Dugan - 18$');
    }

    for (var i = 0; i < bookList.length; i++) {
        var list = document.createElement('li');
        var text = document.createTextNode(bookList[i]);
        list.appendChild(text);

        var container = document.getElementById('container');
        container.appendChild(list);

    }

    bookList = [];
}