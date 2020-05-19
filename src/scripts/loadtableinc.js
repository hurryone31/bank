import {addHeader} from "./addHeader.js";
import {addFoot} from "./addFoot.js";
export function loadTableinc(stval,table,somedata, yr)
{
    table.innerHTML = "";
    addHeader(table);
    if (stval>1) {
        stval = stval * 12 - 11;
    }
    let endval = stval + 12;
    for (let i = stval; i < endval; i++) {
        let tr = document.createElement('tr');
        table.appendChild(tr);
        let dateCol = document.createElement('td');
        tr.appendChild(dateCol);
        dateCol.innerHTML = somedata[i].date;
        let platCol = document.createElement('td');
        tr.appendChild(platCol);
        platCol.innerHTML = somedata[i].plat;
        let pogprocCol = document.createElement('td');
        tr.appendChild(pogprocCol);
        pogprocCol.innerHTML = somedata[i].pogproc;
        let pogcredCol = document.createElement('td');
        tr.appendChild(pogcredCol);
        pogcredCol.innerHTML = somedata[i].pogcred;
        let ostCol = document.createElement('td');
        tr.appendChild(ostCol);
        ostCol.innerHTML = somedata[i].ost;
    }
    addFoot(yr, table, somedata);

}
