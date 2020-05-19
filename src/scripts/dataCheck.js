export function dataCheck() {
    var term = document.getElementById('2');
    var sum = document.getElementById('1');
    var proc = document.getElementById('3');
    return((term.value.trim().length && sum.value.trim().length && proc.value.trim().length))

}