export function addFoot(yrval, table, somedata)
{
    let tr = document.createElement('tr');
    table.appendChild(tr);
    let dateCol = document.createElement('th');
    tr.appendChild(dateCol);
    dateCol.innerHTML = 'Итого';
    let platCol = document.createElement('th');
    tr.appendChild(platCol);
    platCol.innerHTML = somedata.itogplat[yrval];
    let pogprocCol = document.createElement('th');
    tr.appendChild(pogprocCol);
    pogprocCol.innerHTML = somedata.itpogproc[yrval];
    let pogcredCol = document.createElement('th');
    tr.appendChild(pogcredCol);
    pogcredCol.innerHTML = somedata.itpogcred[yrval];
}