import {getJSONFetch} from './getJSONfetch.js';
import {calcout} from './calcout.js';
export function loadCalc()
{
    let term = document.getElementById('2');
    let sum = document.getElementById('1');
    let proc = document.getElementById('3');
    if (sum.value.trim().length && term.value.trim().length && proc.value.trim().length)
    {
        let jsonf = JSON.stringify({
            "sum": sum.value.trim(),
            "term": term.value.trim(),
            "proc": proc.value.trim()
        });
        let f = getJSONFetch("src/common/controller/smallCalcController.php",jsonf);
        f.then(response  => response.json())
            .then(data => calcout(data));
        f.catch(err => alert('jopa'));
    }
}