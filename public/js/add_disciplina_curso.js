
function showDisicpilnaAocurso()
{
    let dialog = document.getElementById('add_disiciplina_curso');
    dialog.classList.remove("hidden");
    dialog.classList.add("flex");
    dialog.classList.add("opacity-100");
    setTimeout(() => {
        dialog.classList.add("opacity-100");
    }, 20);
}

function hideDisicpilnaAocurso(){
    let dialog = document.getElementById('add_disiciplina_curso');
    dialog.classList.add("opacity-0");
    dialog.classList.remove("opacity-100");
    setTimeout(() => {
        dialog.classList.add("hidden");
        dialog.classList.remove("flex");
    }, 500);
}

