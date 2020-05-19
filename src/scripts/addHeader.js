export function addHeader(table)
{
    let tr = document.createElement('tr');
    table.appendChild(tr);
    let dateCol = document.createElement('th');
    tr.appendChild(dateCol);
    dateCol.innerHTML = 'Дата';
    let platCol = document.createElement('th');
    tr.appendChild(platCol);
    platCol.innerHTML = 'Ежемесячный платеж, руб.';
    let pogprocCol = document.createElement('th');
    tr.appendChild(pogprocCol);
    pogprocCol.innerHTML = 'Погашение процентов, руб.';
    let pogcredCol = document.createElement('th');
    tr.appendChild(pogcredCol);
    pogcredCol.innerHTML = 'Погашение кредита, руб';
    let ostCol = document.createElement('th');
    tr.appendChild(ostCol);
    ostCol.innerHTML = 'Остаток, руб.';
}