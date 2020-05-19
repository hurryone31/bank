export function mailSend(somedata)
{
    var f = fetch('src/common/mailSend/mailSend.php', {
        method: "POST",
        mode: "same-origin",
        credentials: "same-origin",
        headers: {
            "Content-Type": "text\html"
        },
        body: somedata
    }).then(response => response.text)
        .catch(error => alert('письмо не отправлено.'));
}