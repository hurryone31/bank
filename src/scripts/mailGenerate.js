import {mailSend} from "./mailSend.js";

export function mailGenerate(somedata)
{
    var sex;
    var f = fetch('template/content/mailForm.php', {
        method: "POST",
        mode: "same-origin",
        credentials: "same-origin",
        headers: {
            "Content-Type": "application/json"
        },
        body: JSON.stringify(somedata)
    }).then(response => response.text())
        .then(data => mailSend(data))
        .catch(error => console.log('письмо не сгенерировано.'));
    return(true);
}