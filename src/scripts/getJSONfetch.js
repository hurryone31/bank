export function getJSONFetch(url,jsonf)
{
    var f = fetch(url, {
        method: "POST",
        mode: "same-origin",
        credentials: "same-origin",
        headers: {
            "Content-Type": "application/json"
        },
        body: jsonf
    });
    return(f);
}