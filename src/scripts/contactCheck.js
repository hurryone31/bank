export function contactCheck()
{
    var fio = document.getElementById('4');
    var tel = document.getElementById('5');
    return(fio.value.trim().length && tel.value.trim().length);
}