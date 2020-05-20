import {getJSONFetch} from "./getJSONfetch.js";
import {openNTable} from "./openNTable.js";
import {showError} from "./showError.js";
import {contactCheck} from "./contactCheck.js";
import {dataCheck} from "./dataCheck.js";
import {mailGenerate} from "./mailGenerate.js";

export function loadRequest()
{
    var term = document.getElementById('2');
    var sum = document.getElementById('1');
    var proc = document.getElementById('3');
    var fio = document.getElementById('4');
    var tel = document.getElementById('5');
    if (contactCheck() && dataCheck()) {
        let jsonf = JSON.stringify({
            "sum": sum.value.trim(),
            "term": term.value.trim(),
            "proc": proc.value.trim(),
            "fio": fio.value.trim(),
            "tel": tel.value.trim()
        });
        let f = getJSONFetch("src/common/controller/bigCalcController.php", jsonf);
        f.then(response  => response.json())
            .then(data => onLoad(data, term.value))
        .catch(err => alert('Данные с сервера не загружены!'));
    } else {
        showError('Заявка не отправлена, провертье введённые данные!')
    }
}
function onLoad(data,term)
{
    data['fio'] = document.getElementById('4').value;
    data['tel'] = document.getElementById('5').value;
    data['term'] = document.getElementById('2').value;
    let promise = new Promise((resolve, reject) => {
        openNTable(data,term);
        resolve(data);
    });
    promise
        .catch(error => alert('Заявка не отправлена, нет ответа сервера!'))
        .then(result => {
            mailGenerate(result);
            alert('Заявка отправлена. Спасибо!')
        })
        .catch(error => alert('Заявка не отправлена: письмо не сгенерировано'));
}