console.log(sessionStorage.getItem('pseudo'));

function savePseudo() {
    var pseudoValue = document.getElementById('pseudo').value;

    sessionStorage.setItem('pseudo', pseudoValue);

    console.log('Pseudo sauvegardé : ' + pseudoValue);
}