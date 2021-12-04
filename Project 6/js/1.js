function search() {
    const arr = [1, 100, 2, 3, 4, 5, 8, 80, 99, 75, 84, 86, 54, 56, 55, 35, 45, 21, 23, 36];
    const search = document.getElementById('search');
    const result = document.getElementById('result');

    for (let i = 0; i < arr.length; i++) {
        if (search.value == arr[i]) {
            result.value = i;
            break;
        } else {
            result.value = 'Value not Found';
        }
    }
}