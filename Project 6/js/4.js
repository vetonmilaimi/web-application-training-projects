let aristeasFriends = ['Maria', 'Marina', 'Elena', 'Pola', 'Nick', 'Loukas'];
let mariasFriends = ['Panos', 'Maria', 'Marina', 'Pola', 'Kostas', 'Andrew'];

var display = document.getElementById('display');

let newArr = [];

for (var friend of aristeasFriends) {
    for (var friend2 of mariasFriends) {
        if (friend === friend2) {
            newArr.push(friend);
        }
    }
}

display.innerText = 'The both friends of Aristea and Marias are: ' + newArr;