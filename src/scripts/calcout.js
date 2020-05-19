export function calcout(arr)
{
    document.getElementById('plat').innerHTML = (arr.plat) + ' руб.';
    document.getElementById('sumproc').innerHTML = (arr.sumproc) + ' руб.';
    document.getElementById('lastdate').innerHTML = (arr.lastdate);
}