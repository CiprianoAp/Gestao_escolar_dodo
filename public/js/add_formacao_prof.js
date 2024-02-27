
function showFormProf()
{
    let dialog = document.getElementById('add_formacao_prof');
    dialog.classList.remove("hidden");
    dialog.classList.add("flex");
    dialog.classList.add("opacity-100");
    setTimeout(() => {
        dialog.classList.add("opacity-100");
    }, 20);
}

function hideFormProf(){
    let dialog = document.getElementById('add_formacao_prof');
    dialog.classList.add("opacity-0");
    dialog.classList.remove("opacity-100");
    setTimeout(() => {
        dialog.classList.add("hidden");
        dialog.classList.remove("flex");
    }, 500);
}

