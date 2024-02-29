
function showinscrever_estudante()
{
    let dialog = document.getElementById('inscrever_estudante');
    dialog.classList.remove("hidden");
    dialog.classList.add("flex");
    dialog.classList.add("opacity-100");
    setTimeout(() => {
        dialog.classList.add("opacity-100");
    }, 20);
}

function hideinscrever_estudante(){
    let dialog = document.getElementById('inscrever_estudante');
    dialog.classList.add("opacity-0");
    dialog.classList.remove("opacity-100");
    setTimeout(() => {
        dialog.classList.add("hidden");
        dialog.classList.remove("flex");
    }, 500);
}
