import {createHrefDiv} from "./createHrefDiv.js";
import {createHref} from "./createHref.js";
import {loadTableinc} from "./loadtableinc.js";

export function openNTable(somedata,term)
{
    let hrefWrap = document.getElementById('hrefWrap');
    let popWrap = document.getElementById('popupWrap');
    let table = document.getElementById('ttable');
    popWrap.style.display = 'block';
    hrefWrap.innerHTML = "";
    for (let i = 1; i <= term; i++) {
        let p = createHrefDiv();
        let b = createHref(i);
        hrefWrap.appendChild(p);
        p.appendChild(b);
        b.addEventListener('click', function () {
            loadTableinc(i, table, somedata, i);
        });
    }
    loadTableinc(1,table,somedata, 1);
    return(true);

}
