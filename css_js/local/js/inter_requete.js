function control_note() {
    var input=document.querySelector('[name="envoyer"]');
    var note_recu=document.getElementById('note_recu').value;
    var note_effec=document.getElementById('note_effec').value;
    if(note_recu>=note_effec)
        input.setAttribute('disabled',false);
    else if (note_recu<note_effec) {
        input.removeAttribute('disabled');
    }
}
function control_matiere() {
    var matiere=document.getElementById('matiere').checked;
    var fichier=document.getElementById('matiere');
    var submit=document.querySelector('[name="envoyer"]');
    if (matiere==false) {
        submit.setAttribute('disabled',false);
    } else{
        submit.removeAttribute('disabled');
    }
}
