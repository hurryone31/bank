export function createHref(id)
{
    let f = document.createElement('a');
    id = id + "-й год"     ;
    f.setAttribute("href", "#");
    f.innerHTML = (id);
    return(f);
}